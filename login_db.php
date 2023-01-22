<?php
session_start();

require_once ('./config/dbaccess.php');

if(isset($_POST["username1"]) && !empty($_POST["username1"])
    && isset($_POST["password1"]) && !empty($_POST["password1"]))
    {
		 $db_obj = new mysqli($host, $user, $password, $database);
         $username = $_POST["username1"];

		 $sql = "SELECT * from user WHERE username=?"; //sucht man sich den benutzername raus
		 $stmt = $db_obj->prepare($sql); // um unerwünschte milisceos code zu verhindern


		 //"s" stands for string (string datatype is expected) ... i for integer, d for double
		 //followed by the variables which will be bound to the parameters
		 $stmt-> bind_param("s", $username);

		

		$stmt->execute(); //sql objekt das aus der datenbank zurückkommt
		$result= $stmt->get_result();
			
			$count_row = $result->num_rows;
			if($count_row ==0) //0 es gibt den benutzernamen nicht
			{
				echo "Username doesn't exist!";
			}

			if($count_row == 1) //1 heisst benutzername ist vorhanden und kann mit pw überprüft werden 
			{
				$user_data = $result->fetch_assoc(); //returned die daten der reihe die aus dem sql statment kommt, zurück als array
				$password = $_POST["password1"]; //eingegeben pw wird automatisch gehasht verglichen mit vorhandenen pw

				if(password_verify($password,$user_data['pwd'])) //passwörter werden verglichen
				{
					
					
						$_SESSION['user']=$user_data['userID'];
						echo "You are Logged In!";
					
					

				}
				else{
					echo "Wrong Password!";
				}
			}



			$stmt->close();
			//close the connection
			$db_obj->close();
			header('refresh: 3; url =index.php');

	}
?>