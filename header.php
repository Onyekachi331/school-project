<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
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
</style>
<body>
<header>
    
    <div class="logo">
        <marquee behavior="slow" direction=""> <h1>Welcome <?php echo"" .$_SESSION['username'];?></h1></marquee>
       
    </div>
    <nav>
        <ul>
            <li>
                <a href="welcome.php">Home</a>
            </li>
           
            <li>
                <a href="about.php">About</a>
            </li>
            <li>
                <a href="contact.php">Contact</a>
            </li>
            <li>
                <a href="dashboard.php">Dashboard</a>
            </li>
            <li class="log-list">
                <a href="index.php"><Button class="log-btn" onclick="message()">Logout</Button></a>
            </li>
        </ul>
    </nav>
</header>

<script>
    function message(){
        window.alert("You have Successfully Logout!");
    }
</script>
</body>
</html>