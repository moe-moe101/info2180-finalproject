<?php

session_start();

function userLogin($email, $password) {
    if( (!CheckLoginInBugme($email, $password)))
        {
            echo "Username or Password is invalid!";
            return false;
        }
}

function CheckLoginInBugme($email, $password) {
    $connect = new pdo( 'mysql:host=localhost; dbname= bug_me2;', 'moesha_kim', 'Classof2009!');
    $loginQuery = "SELECT 'id', 'firstname', 'lastname', 'password', 'email' FROM 'Users' WHERE 'username' = '$email' OR 'password' = '$password'";
    $stmt = $connect ->query($loginQuery);
    $result = $stmt -> fetch(PDO::FETCH_ASSOC);
    if ($result)
    {
        $_SESSION["user_id"] = $result['ID'];
        $_SESSION ["firstname"] = $result ['firstname'];
        $_SESSION ["lastname"] = $result ['lastname'];
        password_verify($password, $result['password']);
        /*$_SESSION ['password'] = $result ['password'];*/
        $_SESSION ['email'] = $result ['email'];
        header ("Location: ../dashboard.html");
    }
    else {
            return false;
            
    }
}
if (isset($_SESSION["user_id"]))
{
        header ( "Location: ../database.html");
}

if(isset($_POST['submit_form']))
{
    $username= $_POST['email'];
    $password= $_POST['password'];
    userLogin($username, $password);
}

?>
        
        
    