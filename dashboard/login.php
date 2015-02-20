<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing connection with server..
$db = mysql_select_db("feedback_gym", $connection); // Selecting Database.
$username=$_POST['email1']; // Fetching Values from URL.
$password= $_POST['password1']; // Password Encryption, If you like you can also leave sha1.
// check if e-mail address syntax is valid or not
$email = filter_var($username, FILTER_SANITIZE_EMAIL); // sanitizing email(Remove unexpected symbol like <,>,?,#,!, etc.)
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
echo "Invalid Email.......";
}else{
// Matching user input email and password with stored email and password in database.
    //echo "SELECT * FROM admin_login WHERE username='$username' AND password='$password'" ;
$result = mysql_query("SELECT * FROM admin_login WHERE username='$username' AND password='$password'");
$data = mysql_num_rows($result);
if($data==1){
echo "Successfully Logged in...";
//header('Location: /dashboard/index.php');
}else{
echo "Email or Password is wrong...!!!!";
}
}
mysql_close ($connection); // Connection Closed.
?>