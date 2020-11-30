<?php 
session_start();
include('connection.php');
//<!--Check user inputs-->
//    <!--Define error messages-->
$errors='';
$missingUsername = '<p><strong>Please enter a username!</strong></p>';
 $missingEmail = '<p><strong>Please enter your email address!</strong></p>';
$invalidEmail = '<p><strong>Please enter a valid email address!</strong></p>';
$missingPassword = '<p><strong>Please enter a Password!</strong></p>';
$invalidPassword = '<p><strong>Your password should be at least 6 characters long and inlcude one capital letter and one number!</strong></p>';
$differentPassword = '<p><strong>Passwords don\'t match!</strong></p>';
$missingPassword2 = '<p><strong>Please confirm your password</strong></p>';

//get username

if(empty($_POST["username"])) 
    //username is the id in index.php
{
    $errors.=$missingUsername;

}
else{ 
$username=filter_var($_POST["username"],FILTER_SANITIZE_STRING);}
    
//GET EMAIL

if(empty($_POST["email"]))
    //EMAIL is the id in index.php
{
    $errors.=$missingEmail;

}
else{ 
$email=filter_var($_POST["email"],FILTER_SANITIZE_EMAIL);
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){  
    // to validate if the eamil gven is correct
        $errors .= $invalidEmail;
    }}

    

//GET PASSWORD

if(empty($_POST["password"])) 
    //password is the id in index.php
{
    $errors.=$missingPassword;
    

}
elseif(!(strlen($_POST["password"])>6
         and preg_match('/[A-Z]/',$_POST["password"])
         and preg_match('/[0-9]/',$_POST["password"])
        )
       ){
    $errors .= $invalidPassword;
}else{
    $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
    if(empty($_POST["password2"])){
        $errors .= $missingPassword2;
    }else{
        $password2 = filter_var($_POST["password2"], FILTER_SANITIZE_STRING); 
        // password2 is the id of comfirm password
        if($password !== $password2){
            $errors .= $differentPassword;
        }
    }
}
//If there are any errors print error
if($errors){
    $resultMessage = '<div class="alert alert-danger">' . $errors .'</div>';
    echo $resultMessage;
    exit;
}
// prepare variables for the queries
$username=mysqli_real_escape_string($link,$username);
$email=mysqli_real_escape_string($link,$email);
$password=mysqli_real_escape_string($link,$password);
//hashing keeps the password secure
$password=md5($password);  

//unique username

$sql="SELECT * FROM users WHERE username='$username' ";
$result=mysqli_query($link,$sql);
if(!$result){
//  echo '<div class="alert alert-danger">Error running the query!</div>';
    echo '<div class="alert alert-danger">' . mysqli_error($link) . '</div>';
    exit;
}
$results=mysqli_num_rows($result);
if($results){
    echo '<div class="alert alert-danger">That username is already registered. Do you want to log in?</div>';  exit;
}

//unique email

$sql="SELECT * FROM users WHERE email='$email' ";
$result=mysqli_query($link,$sql);
if(!$result){
//  echo '<div class="alert alert-danger">Error running the query!</div>';
    echo '<div class="alert alert-danger">' . mysqli_error($link) . '</div>';
    exit;
}
$results=mysqli_num_rows($result);
if($results){
    echo '<div class="alert alert-danger">That email is already registered. Do you want to log in?</div>';  exit;
}

//inserting values 
$sql = "INSERT INTO users (`username`, `email`, `password`) VALUES ('$username', '$email', '$password')";
$result = mysqli_query($link, $sql);
if(!$result){
    echo '<div class="alert alert-danger">There was an error inserting the users details in the database!</div>';
    exit;
}
else
{
       echo "<div class='alert alert-success'>Thank You for your registering! Your account "."<strong>$email</strong>"." has been activated successfully !</div>";
}

?>