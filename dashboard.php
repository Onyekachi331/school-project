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

    <link rel="shortcut icon" href="IMAGES/logo.jpg" type="image/x-icon">
    <title>AIS | Dashboard</title>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            transition: all .5s;
        }
        
        header {
            background-color: navy;
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            padding: 4px;
        }
        
        .logo {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-left: 20px;
        }

        .button-area{
            display: flex;
            align-items: center;
            margin-right: 40px;
        }

        .button-area button{
            transition: .6s;
        }

        .button-area button:hover{
            transform: scale(1.1);
            cursor: pointer;
        }

        .button-area .home-btn{
            background-color: red;
            padding: 10px;
            width: 80px;
            border: none;
            color: white;
            border-radius: 5px;
            margin: 0px 30px;
        }

        .button-area .out-btn{
            background-color: green;
            padding: 10px;
            width: 80px;
            border: none;
            color: white;
            border-radius: 5px;
        }
        
       
        
        @media screen and (max-width:720px) {
            .logo {
                margin: auto;
            }
            nav {
                margin: auto;
            }
            nav .head-list-style {
                list-style: none;
                margin-left: -30px;
            }
            nav .head-list-style .head-list {
                margin-left: 12px;
            }
            .left-side .side {
                position: absolute;
                left: -100%;
                transition: all .6s;
            }
            #check:checked~.left-side {
                left: 60%;
            }
        }
        
        .menu-hold {
            background-color: rgb(223, 149, 11);
            height: 50px;
            display: none;
        }
        
        .menu-hold .checkbtn {
            float: right;
            margin-top: 10px;
            margin-right: 40px;
        }
        
        .container {
            display: flex;
            flex-wrap: wrap;
            width: 100%;
        }
        
        .side {
            background-color: rgb(6, 12, 17);
            width: 290px;
            color: white;
            height: 470px;
            transition: all .6s;
        }
        
        .side .tittle {
            background-color: black;
            padding: 17px 0px;
        }
        
        .side .tittle h2 {
            text-align: center;
            font-size: 28px;
        }
        
        .dash-list {
            /* width: 100%; */
            margin-left: -35px;
        }
        
        .dash-list .list {
            display: block;
            margin: auto;
            list-style: none;
            transition: all .6s;
        }
        
        .dash-list .list li {
            width: 100%;
            list-style: none;
            padding: 10px 0px;
            border-bottom: 1px solid gray;
            font-size: 17px;
            transition: all .5s;
            margin-top: 7px;
        }
        
        .dash-list .list li:hover {
            background-color: #c2baba36;
            color: rgb(223, 149, 11);
            margin-left: 1px;
            cursor: pointer;
            padding-left: 5px;
        }
        
        .dash-list li a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
        }
        
        .profile-group {
            /* padding: 20px; */
            width: 70%;
            height: 450px;
            overflow: auto;
            cursor: pointer;
        }
        
        .pro1 {
            display: flex;
            align-items: center;
            padding: 5px 10px;
            /* background-color: rgb(238, 226, 226); */
            width: 100%;
        }
        
        .pro1 #profile-img {
            height: 80px;
            width: 80px;
            border: none;
            border-radius: 50%;
            background-image: url(IMAGES/agent2.jpeg);
            background-size: cover;
            background-repeat: no-repeat;
        }
        
        .pro1 h2 {
            margin-left: 20px;
        }
        
        .pro1 .edit {
            width: fit-content;
            margin-left: auto;
            margin-right: 30px;
        }
        
        .details {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .details-hold {
            padding: 0px 10px;
            /* display: flex;
            align-items: center;
            justify-content: space-between; */
            width: 60%;
            margin: 10px 20px;
            margin-left: 20px;
            border: 1px solid rgb(214, 205, 205);
        }
        
        .details-hold .row2 {
            width: 80%;
            color: gray;
        }
        
        #services .service-label {
            text-align: center;
            color: black;
            display: block;
            margin: auto;
            margin-left: 30px;
        }
        
        #services .service-label h1 {
            padding: 8px 0px;
        }

        .sub1{
            margin-left: 30px;
            margin-top: 20px;
        }

        .sub1 input{
            display: block;
            padding: 10px;
            width: 60%;
            margin-top: 10px;
        }
        
        .sub1-btn button{
            width: ;
            padding: 10px;
            background-color: black;
            color: white;
            border: none;
            border-radius: 3px;
            margin-top: 40px;
            margin-left: 30px;
        }

        .form-area .form1{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            margin: auto;
            gap: 20px;
        }

        .form-area .form1 input{
            width: 300px;
            padding: 10px;
            margin: 10px 10px;
            font-size: 16px;
        }
      
        
        @media screen and (max-width:720px) {
            .profile-group {
                width: 90%;
                display: block;
                margin: auto;
                overflow: auto;
                /* height: 900px; */
            }
            .details-hold {
                margin-left: -10px;
            }
            .service1 li {
                margin: 25px 0px;
            }
            .side {
                width: 100%;
            }
        }
        
       
        
        .app-details h1 {
            margin-left: 20px;
        }
        
        .app-details ul li {
            list-style: none;
            margin: 7px 0px;
        }
        
        .app-details label {
            margin-left: 10px;
        }
        
       
        
       
        
        .label {
            width: fit-content;
            display: block;
            margin: auto;
            margin-top: 10px;
        }
        
        .label button {
            display: block;
            margin: auto;
            height: 70px;
            width: 70px;
            border-radius: 50%;
            color: orange;
            border: none;
            font-size: 30px;
        }
        
        footer {
            background-color: darkblue;
            padding: 9px;
            text-align: center;
            color: white;
        }
        
        .form-hold {
            padding-bottom: 40px;
        }
        
        .form-hold .group1 {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
        }
        
        .form-hold form .form1 {
            margin: 10px 20px;
        }
        
        .form-hold form .form1 input {
            display: block;
            padding: 10px;
            width: 300px;
            font-size: 18px;
            border: 1px solid rgb(184, 182, 182);
        }
        
        .form-hold form .form1 select {
            display: block;
            padding: 10px;
            width: 326px;
            font-size: 18px;
            border: 1px solid rgb(184, 182, 182);
        }
        
        .form-hold form .form1 label {
            color: gray;
        }
        
        .form-hold form .form1 label font {
            color: red;
        }
        
        .form-hold .agree {
            width: fit-content;
            display: block;
            margin: auto;
            margin-top: 20px;
        }
        
        .form-hold .formbtn {
            width: fit-content;
            display: block;
            margin: auto;
            margin-top: 30px;
        }
        
        .form-hold .formbtn button {
            padding: 10px;
            width: 220px;
            margin: 0px 10px;
            transition: all .4s;
        }
        
        .form-hold .formbtn .fas {
            margin-left: -20px;
            transition: all .4s;
        }
        
        .form-hold .formbtn button:hover .fas {
            transform: translateX(-10px);
        }
        
        .form-hold .formbtn button:hover {
            transform: scale(1.1);
            cursor: pointer;
        }
        
        .form-hold .formbtn .reset-btn {
            background-color: red;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 14px;
        }
        
        .form-hold .formbtn .submit-btn {
            background-color: green;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 14px;
        }
        
        @media screen and (max-width: 720px) {
            .form-hold .formbtn button {
                width: 120px;
            }
            .password-group  .passhold  button{
                width: 100px;
            }
          .password-group  .passhold .input-hold input {
                width: 70%;
            }
            .form-area .form1 {

                flex-wrap{
                    wrap;
                }
            }
        }
        
        .password-group h1 {
            text-align: center;
        }
        
        .passhold {
            margin-left: 40px;
        }
        
        .passhold .input-hold {
            margin-top: 20px;
        }
        
        .passhold .input-hold input {
            width: 50%;
            display: block;
            padding: 10px;
            font-size: 18px;
        }
        
        .passhold .resetbtn {
            margin-top: 20px;
            padding: 10px;
            width: 12%;
            border: none;
            background-color: red;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }
        
        .passhold .submitbtn {
            margin-top: 20px;
            padding: 10px;
            width: 12%;
            border: none;
            background-color: green;
            color: white;
            margin: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
        
        .class {
            margin-left: 30px;
        }
        
        .class-hold h1 {
            text-align: center;
        }
        
        .class .class1 {
            margin: 13px 0px;
        }
        
        .class .class1 #input {
            width: 50%;
            padding: 10px;
            display: block;
        }
        
        .class .class1 #class-select {
            width: 53%;
            padding: 10px;
            display: block;
        }

        .add-btn{
            padding: 10px;
            background-color: black;
            color: white;
            border: none;
            border-radius: 3px;
            width: 80px;
            margin-top: 15px;
            cursor: pointer;
        }

        #result-class{
            padding: 10px;
            width: 323px;
            font-size: 18px;
            border: 1px solid rgb(184, 182, 182);
            margin: 0px 10px;
        }

        .result-btn{
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .result-btn button{
            padding: 10px;
            margin: 20px 13px;
            width: 170px;
        }

        .result-btn .resetbtn{
            background-color: brown;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
        }

        .result-btn .submitbtn{
            background-color: black;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
        }
    </style>

</head>


<body>
    <header>
        <div class="logo"><img src="IMAGES/logo.jpg" height="35px">
            <h1>Welcome
                <?php echo"".$_SESSION['username'];?>
            </h1>
        </div>
        
        <div class="button-area">
            <a href="welcome.php"><button class="home-btn">Home</button></a>
            <a href="index.php"><button class="out-btn" onclick="logOut()">Logout</button></a>
        </div>

    </header>
    <div class="menu-hold">
        <input type="checkbox" id="check" name="checkbox">
        <label class="checkbtn" for="check"><img src="IMAGES/menu img.png" height="30px"></label>
    </div>

    <div class="container">

        <div class="side">
            <aside class="sidebar">
                <div class="tittle">
                    <h2>Dashboard</h2>
                </div>
                <nav class="dash-list">
                    <ul class="list">
                        <li><i class="fas fa-book-open"></i><a href="#applications" onclick="message()">Students</a></li>
                        <li><i class="fas fa-globe"></i><a href="#services">Subjects</a></li>
                        <li><i class="fas fa-atom"></i><a href="#settings">Result</a></li>
                        <li><i class="fas fa-power-off"></i><a href="#logout">Class</a></li>
                        <li><i class="fas fa-power-off"></i><a href="#password">Change Password</a></li>
                    </ul>
                </nav>
            </aside>
        </div>

        <div class="profile-group">
            <main class="main-content">
               





                <!-- Applications content -->
                <section id="applications">
                    <div class="form-section ">
                        <div class="label">
                            <button class="fas fa-toolbox"></button>
                            <h1>Student Registration Form</h1>
                        </div>
                        <div class="form-hold">
                            <form>
                                <div class="group1">
                                    <div class="form1">
                                        <label for="First Name">First Name <font>*</font></label>
                                        <input type="text" required>
                                    </div>
                                    <div class="form1">
                                        <label for="First Name">Last Name <font>*</font></label>
                                        <input type="text" required>
                                    </div>
                                </div>

                                <div class="group1">
                                    <div class="form1">
                                        <label for="First Name">Age<font>*</font></label>
                                        <input type="number" required>
                                    </div>
                                    <div class="form1">
                                        <label for="First Name">Gender<font>*</font></label>
                                        <select name="gender" id="">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="group1">
                                    <div class="form1">
                                        <label for="State of Origin">Country of Origin<font>*</font></label>
                                        <select name="states" id="" required>
                                        <optgroup label="Country of Origin">
                                            <option value="Algeria">Algeria</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Dubai">Dubai</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="France">France</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Iran">Iran</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Morroco">Morroco</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Russia">Russia</option>
                                            <option value="South Korea">South Korea</option>
                                            <option value="Turkey">Turkey</option>
                                            
                                        </optgroup>
                                    </select>
                                    </div>
                                    <div class="form1">
                                        <label for="First Name">Contact Address<font>*</font></label>
                                        <input type="text" required>
                                    </div>
                                </div>

                              

                                <div class="formbtn">
                                    <button class="reset-btn" type="reset"><i class="fas fa-arrow-rotate-left"></i>Reset</button>
                                    <button class="submit-btn" type="submit"><i class="fas fa-check"></i>Reset</button>
                                </div>

                            </form>
                        </div>
                    </div>
                    <!-- Applications content -->
                </section>



                <section id="services">
                    <div class="service-label ">
                        <h1>Add New Subjects</h1>
                    </div>
                    <div class="sub1">
                        <label for="name">Subject Name:</label>
                        <input type="text">
                    </div>
                    <div class="sub1">
                        <label for="name">Subject Class:</label>
                        <input type="text">
                    </div>

                    <div class="sub1-btn">
                        <button type="submit">Submit</button>
                    </div>
                 
                </section>


                <section id="settings">
                    <div class="label">
                    <h1>Check your Result Here</h1>
                    </div>

                    <div class="form-area">
                        <div class="form1">
                            <input type="text" placeholder="Student Name">
                            <input type="number" placeholder="Student Reg No.">
                        </div>

                        <div class="form1">
                            <select name="class" id="result-class">
                                <optgroup label="Choose Your Class">
                                <option value="JSS 1">Class</option>
                                <option value="JSS 1">JSS 1</option>
                                <option value="JSS 2">JSS 2</option>
                                <option value="JSS 3">JSS 3</option>
                                <option value="SSS 1">SSS 1</option>
                                <option value="SSS 2">SSS 2</option>
                                <option value="SSS 3">SSS 3</option>
                                </optgroup>
                            </select>
                            <input type="number" placeholder="Serial Number">
                        </div>
                        <div class="result-btn">
                        <button class="resetbtn" type="reset">Reset</button>
                        <button class="submitbtn" type="submit">Submit</button>
                        </div>
                    </div>
                </section>

              


                <section id="logout">

                    <div class="class-hold">
                        <h1>Register New Classes</h1>
                    </div>

                    <div class="class">
                        <div class="class1">
                            <label for="Class">Class Name</label>
                            <select name="class" id="class-select">
                            <!-- <option value="Primary 1">Primary 1</option>
                            <option value="Primary 2">Primary 2</option>
                            <option value="Primary 3">Primary 3</option>
                            <option value="Primary 4">Primary 4</option>
                            <option value="Primary 5">Primary 5</option> -->
                            <option value="JSS 1">JSS 1</option>
                            <option value="JSS 2">JSS 2</option>
                            <option value="JSS 3">JSS 3</option>
                            <option value="SSS 1">SSS 1</option>
                            <option value="SSS 2">SSS 2</option>
                            <option value="SSS 3">SSS 3</option>
                        </select>
                        </div>

                        <div class="class1">
                            <label for="Class">Number of Students</label>
                            <input type="number" name="number" id="input">
                        </div>

                        <div class="class1">
                            <label for="Class">Number of Subjects</label>
                            <input type="number" name="number" id="input">
                        </div>

                        <!-- <div class="class1">
                            <label for="Class">List of Subjects</label>
                            <div>
                                <label for="mathematics">Mathematics</label>
                                <input type="checkbox" name="" id="mathematics">

                                <label for="English">English Lang.</label>
                                <input type="checkbox" name="" id="English">

                                <label for="civic">Civic Edu.</label>
                                <input type="checkbox" name="" id="civic">

                                <label for="social">Social Studies</label>
                                <input type="checkbox" name="" id="social">

                                <label for="health">Health Edu.</label>
                                <input type="checkbox" name="" id="health">

                                <label for="govt">Government</label>
                                <input type="checkbox" name="" id="govt">

                                <label for="lit">Lit-in-Eng.</label>
                                <input type="checkbox" name="" id="lit">

                                <label for="bio">Biology</label>
                                <input type="checkbox" name="" id="bio">

                                <label for="chems">Chemistry</label>
                                <input type="checkbox" name="" id="chems">

                                <label for="com">Commerce</label>
                                <input type="checkbox" name="" id="com">

                                <label for="eco">Economics</label>
                                <input type="checkbox" name="" id="eco">

                                <label for="phy">Physics</label>
                                <input type="checkbox" name="" id="phy">

                                <label for="geo">Geography</label>
                                <input type="checkbox" name="" id="geo">
                            </div>
                        </div> -->

                        <button class="add-btn">Add</button>

                    </div>

                </section>

                <section id="password">
                    <div class="password-group ">

                        <h1>Change your Password</h1>

                        <div class="passhold">
                            <div class="input-hold">
                                <form>
                                    <label for="old-password">Last Password</label>
                                    <input type="password" name="old-password" required>
                            </div>
                            <div class="input-hold">
                                <label for="new-password">New Password</label>
                                <input type="password" name="new password" required>
                            </div>
                            <div class="input-hold">
                                <label for="confirm-password">Confirm Password</label>
                                <input type="password" name="confirm-password" required>
                            </div>
                            <button type="reset" class="resetbtn">Reset</button>
                            <button type="submit" class="submitbtn">Submit</button>
                            </form>
                        </div>
                    </div>
                    <!-- Settings content -->
                </section>


            </main>
        </div>
    </div>
    <footer>
        <p>Contact us: info@vipaji.com | Follow us on social media</p>
        <div class="social-media-links ">
            <!-- Social media icons here -->
        </div>
    </footer>







    <script src="script.js ">
        document.addEventListener('DOMContentLoaded'),
            function() {
                const sidebarLinks = document.querySelectorAll('.sidebar .list li a');
                const sections = document.querySelectorAll('.main-content section');
                sidebarLinks.forEach(link => {
                    link.addEventListener('click',
                        function(event) {
                            event.preventDefault();
                            const targetId = this.getAttribute('href').substring(1);
                            const targetSection = document.getElementById(targetId);
                            sections.forEach(section => {
                                section.style.display = 'none';
                            });
                            targetSection.style.display = 'block';
                        });
                });
            } // Show the first section by default sections.forEach(section => { section.style.display = 'none'; }); if (sections.length > 0) { sections[0].style.display = 'block'; } });
    </script>
    <script>
        function message() {
            window.alert("Kindly read through the following Details Carefully ")
        }

        function logOut(){
            window.alert("You Have Successfully Log-out");
        }
    </script>
</body>

</html>

</html>

</html>

</html>

</html>

</html>

</html>

</html>

</html>