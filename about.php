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

    <title>AIS | About Page</title>
</head>
<style>
    .label{
        text-align: center;
        font-weight: bold;
    }

    .container{
        padding: 10px;
        background-color: rgb(216, 205, 186);
        padding-bottom: 60px;
    }

    .about-group{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        gap: 80px;
    }

    .container .text-hold{
        width: 400px;
    }

    .container .text-hold  h1{
        font-size: 26px;
    }

    .container .text-hold p{
        width: 90%;
        text-align: justify;
        font-size: 17px;
        background-color: #fff;
        padding: 10px;
    }

    .container .text-hold button {
        padding: 10px;
        background-color: black;
        border: none;
        color: white;
        border-radius: 3px;
        transition: .6s;
    }

    .container .text-hold button:hover{
        transform: scale(1.1);
        cursor: pointer;
    }

    .about-img{
        width: 420px;
    }

    @media screen and (max-width: 720px;) {
        .container .text-hold{
            width: 200px;
        }

        .container .text-hold p{
            font-size: 14px;
        }

        .about-img{
            width: 260px;;
        }
        
    }
</style>
<body>
    <?php include 'header.php';?>


    <div class="container">

    <div class="label">
        <h1>About Us</h1>
    </div>

   <div class="about-group">
        <div class="text-hold">
           <h1>Abuja International Academy</h1>
           <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea consequuntur obcaecati molestiae maiores ullam quod vitae vero iste inventore? Quasi esse, consequatur animi odio tempore ex qui delectus officiis ab! Aspernatur laudantium sapiente numquam nulla delectus. At reiciendis nihil aut voluptate, laboriosam autem repellat ut molestiae ipsam. Incidunt, cum iste!</p>
           <button>Learn More</button>
        </div>

        <div class="about-img">
            <img src="students.jfif" width="100%">
        </div>
        </div>
    </div>
    <?php include 'footer.php' ?>
</body>

</html>