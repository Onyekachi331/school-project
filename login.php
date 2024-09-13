<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
include 'include/connection.php';
$username = $_POST["username"];
$password = $_POST["password"]; 
// // $sql = "Select * from users where username='$username' AND 
// password='$password"; //
$sql = "Select * from admin where username='$username'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
if ($num == 1){
while($row=mysqli_fetch_assoc($result)){
if (password_verify($password, $row['password'])){ 
$login = true;
session_start();
$_SESSION['loggedin'] = true;
$_SESSION['username'] = $username;
header("location: welcome.php");
} 
else{
$showError = "Invalid Credentials";
}
}
} 
else{
$showError = "Invalid Credentials";
}

}
?>

<?php
if($showError){
    echo '<div class="alert alert-danger">'. $showError . '</div>';
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


    <title>LOGIN FORM</title>
</head>

<style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
    }
    
    .background {
        height: 100vh;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(to right, darkblue, rgb(51, 4, 51));
    }
    
    .form-hold {
        padding: 20px;
        box-shadow: 2px 2px 20px 2px rgba(0, 0, 0, 0.40);
        width: 360px;
        background-color: #fff;
    }
    
    .form-hold h1 {
        color: darkblue;
        text-align: center;
    }
    
    .form-hold .hold1 {
        margin-top: 20px;
    }


    
    .form-hold .hold1 input {
        display: block;
        width: 90%;
        padding: 10px;
        height: 30px;
        font-size: 18px;
        border: 1px solid rgb(192, 188, 188);
    }
    
    .button-area {
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 20px 0px;
        width: 100%;
        margin-top: 50px;
    }
    
    .button-area button {
        padding: 10px;
        width: 35%;
        margin: 0px 10px;
        transition: all .5s;
    }
    
    .button-area button:hover {
        transform: scale(1.1);
        cursor: pointer;
    }
    
    .button-area .reset-btn {
        background-color: red;
        border: none;
        color: white;
        border-radius: 4px;
    }
    
    .button-area .submit-btn {
        background-color: green;
        border: none;
        color: white;
        border-radius: 4px;
    }
</style>


<body>
    <div class="background">
<form action="" method="post">
        <div class="form-hold">
            <h1>LOGIN HERE</h1>

            <div class="hold1">
                <label>Username</label>
                <input type="text" name="username" id="">
            </div>
           
            <div class="hold1">
                <label>Password</label>
                <input type="password" name="username" id="">
            </div>

            <div class="button-area">
                <button type="reset" class="reset-btn">Reset</button>
                <button type="submit" class="submit-btn">Submit</button>
            </div>
        </div>
        </form>
    </div>
</body>

</html>

</html>


