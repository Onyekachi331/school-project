<?php session_start();?>



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
        background-image: url(image\ 1.png);
        background-size: cover;
        background-repeat: no-repeat;
    }
    
    header {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        background-color: darkblue;
        color: white;
    }

    .logo{
        margin-left: 20px;
    }
    
    nav {
        margin-left: auto;
    }
    
    nav ul li {
        display: inline-flex;
        margin: 0px 10px;
        padding: 12px 20px;
        transition: .5s;
    }

    nav ul li:hover{
        background-color: rgba(0,0,0,0.30);
    }
    
    nav ul li a {
        color: white;
        text-decoration: none;
    }

    .log-btn{
        padding: 10px;
        border: 1px solid white;
        background-color: white;
        color: black;
        font-weight: bold;
        border-radius: 3px;
        transition: all .5s;
    }

    .log-list:hover {
        background-color: transparent;
    }

    .log-btn:hover{
        transform: scale(1.1);
        cursor: pointer;

    }
    
    .background {
        background-color: rgba(0, 0, 0, 0.842);
        padding: 20px;
    }
    
    .body-group {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        gap: 40px;
        margin-top: 80px;
        padding-bottom: 140px;
    }
    
    @media screen and (max-width:720px) {
        header .logo {
            display: block;
            margin: auto;
            width: fit-content;
        }
        header .logo h1 {
            font-size: 22px;
            text-align: center;
            word-spacing: 10px;
        }
        header nav {
            display: block;
            margin: auto;
        }
        .body-group .hold1 h1 {
            font-size: 35px;
        }
        .body-group .hold1 p {
            font-size: 22px;
        }
    }
    
    .body-group .hold1 {
        color: white;
        font-size: 21px;
    }
    
    .body-group .hold1 p {
        color: yellow;
        font-family: cursive;
    }
    
    .body-group .hold1 button {
        padding: 15px 10px;
        width: 20%;
        background-color: blue;
        color: white;
        border: none;
        border-radius: 5px;
        margin-top: 20px;
        transition: all .5s;
    }
    
    .body-group .hold1 button:hover {
        transform: scale(1.1);
        cursor: pointer;
    }
    
    .hold2 {
        width: 500px;
    }
    
    .hold2 .img-hold {
        width: 100%;
    }
    
    .hold2 .img-hold img {
        border-radius: 10px;
        transition: all .5s;
    }
    
    .hold2 .img-hold img:hover {
        filter: saturate(60%);
    }
    
    footer {
        background-color: darkblue;
        padding: 2px;
        color: white;
    }
    
    footer p {
        margin-left: 30px;
        font-size: 25px;
    }
</style>


<body>

<?php include 'header.php'?>
   
    <div class="background">
        <div class="body-group">
            <div class="hold1">
                <h1>Welcome to Abuja <br>
                International Academy <br>
                    <font>Home for Quality Educations</font>
                </h1>
                <p>Building a Strong Foundational Ground for Pupils . . . . . . </p>
                <button>Read More</button>
            </div>
            <div class="hold2">
                <div class="img-hold">
                    <img src="image 2.jpeg" width="100%">
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p>Abuja International Academy &copy;</p>
    </footer>
</body>

</html>

</html>