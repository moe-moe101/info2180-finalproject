<? php

//Process newUser Form
 $firstname = $lastname =  $password =  $email = "";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    

    $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
    
    
    $password = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_PASSWORD);

    
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

   // Validation


  if (!isset($_POST['firstname'])) {

    echo 'First name is required!<br/>';
  }
  
  if (!isset($_POST['lastname'])) {

    echo 'Last name is required<br/>';

  }
  
  if (!isset($_POST['password'])) {

    echo 'Password is required<br/>';

  }
  
  if (!isset($_POST['email'])) {

    echo 'Email is required<br/>';

  }
  // validate password 
  
  if(preg_match ("/^.*(?=.{8,})(?=.*[0-9])(/=.*[a-z])(?=.*[A-Z]).*$/", $_POST["password]) === 0) {
  
   echo "Invalid password. Password must contain atleast a number and a letter and should be eight characters long. <br/>";
  }
 
  //validate email
  
  if (preg_match("/^[a-zA-Z]w+(.w+)*@w+(.[0-9a-zA-Z]+)*.[a-zA-Z] {2,4}$/", $_POST["email"]) === 0){
      echo "Invalid email <br/>";
   }
   
    //hashes user password
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

//add new user information to database

$connect = new PDO ('mysql:host=localhost; dbname=bug_me2;', 'moesha_kim', 'Classof2009')
$sql_query = "INSERT INTO Users (ID, $firstname, $lastname, $password_hash, $email, date');

if(mysql_query(connect, $sql_query))
{
    echo "Registration Successful";
}else{
    echo "Error: Registration falied!";
}

mysql_close($connection)

}

?>

    
    
  
  
  
  
  
  
  
  