<?php

session_start();

	if (isset($_POST['submit'])){
		
		include 'dbh.inc.php';
		
		$uid = $_POST['uid'];
		$pwd = $_POST['pwd'];
		
		//Error handlers
		//Check if inputs are empty
		if (empty($uid)) || empty($pwd)){
			header("Location: ..//Homepage.php?login=empty");
			exit();
		} 
		else{
			$sql = "SELECT * FROM users WHERE user_uid='$uid'";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);
			if ($resultCheck < 1){
				header("Location: ..//Homepage.php?login=error");
				exit();
			}
			else{
				if($row = mysqli_fetch_assoc($result)){
					//De-hashing the password
					$hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
					if($hashedPwdCheck == false){
						header("Location: ..//Homepage.php?login=error");
						exit();
					}
					elseif($hashedPwdCheck == true){
						//LOGIN THE USER HERE
						$_SESSION['u_id'] = $row['user_id'];
						$_SESSION['u_first'] = $row['user_first'];
						$_SESSION['u_last'] = $row['user_last'];
						$_SESSION['u_email'] = $row['user_email'];
						$_SESSION['u_uid'] = $row['user_uid'];
						eader("Location: ..//Homepage.php?login=success");
						exit();
					}
				}
			}
		}
	}
	else {
		header("Location: ..//Homepage.php?login=error");
		exit();
	}

?>