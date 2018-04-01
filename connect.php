<?php
 $firstname = filter_input(INPUT_POST, 'firstname');
 $lastname = filter_input(INPUT_POST, 'lastname');
 $email = filter_input(INPUT_POST, 'email');
 $password = filter_input(INPUT_POST, 'password');
 if(!empty($firstname)){
	if(!empty($lastname)){
		if(!empty($email)){
			if(!empty($password)){
				$host = "localhost";
				$dbfirstname = "Minkyoo";
				$dblastname = "Choi";
				$dbemail = "daniel.m.lee@sjsu.edu";
				$dbpassword = "";
				$dbname = "BOOKPANG";
				
				//create connection
				$conn = new mysqli ($host, $dbfirstname, $dblastname, $dbemail, $dbpassword, $dbname);
				if(mysqli_connect_error()){
					die('connect Error ('.mysqli_connect_errno().')'
						.mysqli_connect_error());
				}
				else{
					$sql = "INSERT INTO account (firstname, lastname, email, password)
					values ('$firstname', '$lastname', '$email', '$ password')";
					if($conn->query($sql)){
						echo "Successfully signed up";
					}
					else{
						echo "Error: ". $sql ."<br>". $conn->error;
					}
					$conn->close();
				}
			}
			else{
				echo "Fill in all the areas";
				die();
			}
		}
		else{
			echo "Fill in all the areas";
			die();
		}
	}
	else{
		echo "Fill in all the areas";
		die();
	}
 }
 else{
	echo "Fill in all the areas";
	die();
 }
?>