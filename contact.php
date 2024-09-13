<?php session_start()?>
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

    <title>AIS | Contact Page</title>
</head>

<style>
body {
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
        background-image: url(students.jfif);
        background-size: cover;
        background-repeat: no-repeat;
    }

    .container{
        /* height: 87vh; */
        background-color: rgba(0,0,0,0.90);
        /* padding: 10px; */
        padding-bottom: 80px;
        width: 100%;
       
    }

    .label{
        color: white;
        text-align: center;
        padding: 10px 0px;
    }

    .form-group{
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .contact-hold{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        width: fit-content;
        /* padding: 10px; */
        background-color: transparent;
        backdrop-filter: blur(50px);
        -webkit-backdrop-filter: blur(70px);
       
    }

    .contact-hold .hold1{
        background-color: #fff;
        width: fit-content;
        padding: 10px;
        margin: 10px 40px;
        /* padding-right: 50px; */
    }

    .hold1 .line{
        display: flex;
        align-items: center;
        margin: 20px 0px
    }

    .hold1 .line button{
        height: 40px;
        width: 40px;
        border: none;
        border-radius: 50%;
        font-size: 20px;
        color: darkblue;
    }

    .hold1 .line p{
        margin-left: 20px;
        width: 330px;
        font-size: 19px;
    }

    .hold1 .line p a .email{
        width: 130px;
    }

    .hold1 .line p a{
        color: black;
        text-decoration: none;
        transition: .6s;
    }

    .hold1 .line p a:hover{
        color: blue;
        text-decoration: underline;
    }

    .hold2{
        background-color: white;
        padding: 20px 30px;
        margin: 10px 40px;
        width: 340px;
    }

    .hold2 .input-hold{
        margin: 20px 0px;
        width: 100%;
        display: block;
        
    }

    .hold2 .input-hold input{
        display: block;
        margin: auto;
        padding: 10px;
        width: 94%;
        margin-top: 7px;
        border: 1px solid gray;
        font-size: 17px;
    }

    .hold2 .input-hold textarea{
        display: block;
        padding: 10px;
        width: 95%;
        margin-top: 7px;
        height: 70px;
        border: 1px solid gray;
        font-size: 17px;
    }

    .hold2 .send-btn{
        display: block;
        margin: auto;
        padding: 10px;
        width: 100%;
        background-color: darkblue;
        border: none;
        color: white;
        font-size: 18px;
        transition: .6s;
    }

    .hold2 .send-btn:hover{
        background-color: black;
        cursor: pointer;
    }

    @media screen and (max-width: 720px) {
        .contact-hold{
            width: 370px;
        }
        .contact-hold .hold1{
            width: 300px;
        }

     .container .contact-hold .hold1 .line p .email{
            width: 250px;
        }
        
    }
</style>
<body>
    <?php include 'header.php'?>

    <div class="container">
        <div class="label">
        <h1>Contact Us</h1>
        </div>


        <div class="form-group">
        <div class="contact-hold">
           
            <div class="hold1">
                <div class="line">
                    <button><i class="fas fa-location-dot"></i></button>
                    <p>After Mountain of Fire Road Baba Street, Mararaba Nasarawa State.</p>
                </div>

                <div class="line">
                    <button><i class="fas fa-envelope"></i></button>
                    <a href="mailto:" class="email"> <p >abujaint'l@gmail.com</p></a>
                </div>

                <div class="line">
                    <button><i class="fas fa-phone"></i></button>
                    <p><a href="tel:+">234 819 934 9944</a> <br><a href="tel:+">234 819 934 9944</a></p>
                </div>
            </div>

            <div class="hold2">
            <form>
                <h2>Send Message</h2>
            <div class="input-hold">
                <label for="username">Username</label>
                <input type="text" name="username" required>
            </div>

            <div class="input-hold">
                <label for="username">Email Address</label>
                <input type="email" name="email" required>
            </div>

            <div class="input-hold">
                <label for="message">Type Your Message</label>
                <textarea name="messaage" id="message" required></textarea>
            </div>

            <button type="submit" class="send-btn">Send Message</button>
            </div>
            </form>
            </div>
           
        </div>

     
    </div>
    <?php include "footer.php"; ?>  
    
</body>
</html>