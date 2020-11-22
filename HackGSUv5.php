<!DOCTYPE html>
<html>
<?php
	console.log("First line");
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, intial-scale = 1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            background: url("https://github.com/preethampython101/Hackathon2020/blob/main/Img-1.jpg?raw=true");
            background-repeat: no-repeat;
            background-size: 100%;
            font-family: "Courier New", Courier, monospace;
            /* background-color: #cccccc; */
        }

        .nav-bar {
            width: fit-content;
            height: fit-content;
            padding: 0.5%;
            float: right;
            color: rgb(255, 255, 255);
            text-align: center;
            font-size: 25px;
            text-decoration: none;
            text-shadow:
                0px 1px 3px rgba(000, 000, 000, 0.3),
                0px 0px 0px rgba(255, 255, 255, 0);
            position: absolute;
            clear: both;
            /* margin-top: 12%; */
        }

        .nav-bar:hover {
            background: #c78cfa;
            border-radius: 25px;
            border: 1px solid rgb(69, 9, 104);
            box-shadow:
                0px 5px 5px rgba(000, 000, 000, 0.1),
                inset 0px 1px 0px rgba(255, 255, 255, 0.5);
            color: white;
        }

        .home {
            margin-left: 43%;
            margin-top: 2%;
            
        }

        .about {
            margin-left: 65%;
            margin-top: 2%;
        }

        .course-select {
            margin-left: 62%;
            margin-top: 0%;
			background: #c78cfa;
            border-radius: 25px;
            border: 1px solid rgb(69, 9, 104);
            box-shadow:
            0px 5px 5px rgba(000, 000, 000, 0.1),
            inset 0px 1px 0px rgba(255, 255, 255, 0.5);
            color: white;
        }

        .login-button {
            width: fit-content;
            height: fit-content;
            padding: 0.5%;
            float: right;
            color: rgb(255, 255, 255);
            text-align: center;
            font-size: 25px;
            text-decoration: none;
            text-shadow:
                0px 1px 3px rgba(000, 000, 000, 0.3),
                0px 0px 0px rgba(255, 255, 255, 0);
            position: static;
            clear: both;
        }

        .login {
            margin-right: 0%;
            margin-top: 0%;
            width: 15%;
            height: 3%;
            overflow: hidden;
            color: #f5f5f5;
            background-image: url('https://www.flaticon.com/svg/static/icons/svg/1828/1828457.svg');
            background-size: 15%;
            background-repeat: no-repeat;
            background-position: 10%;
            padding-top: 0.5%;
            padding-left: 3%;
        }

        .login:hover {
            background-image: url('https://www.flaticon.com/svg/static/icons/svg/1828/1828457.svg');
            background-size: 15%;
            background-position: 15%;
            color: #f73e3e;
        }

        input[type="text"] {
            background: #ffffff;
            padding: 1.2% 2%;
            width: 20%;
            margin-bottom: 5%;
            clear: both;
            border-radius: 15px;
            border: none;
            color: #2b2b2b;
            margin-top: 20%;
            margin-left: 10%;
            position: absolute;
        }

        input[type=text]:focus {
            outline: none;
        }

        input[type="number"] {
            background: #ffffff;
            padding: 1.2% 2%;
            width: 20%;
            margin-bottom: 5%;
            clear: both;
            border-radius: 15px;
            border: none;
            color: #2b2b2b;
            margin-top: 20%;
            margin-left: 10%;
            position: absolute;
        }

        input[type=submit] {
            display: inline-block;
            padding: 10px 20px;
            width: 20%;
            margin-top: 20%;
            margin-left: 40%;
            padding: 2.5%;
            color: #ebebeb;
            font-size: 1.5vw;
            font-family: Tahoma, Geneva, sans-serif;
            text-align: center;
            text-decoration: none;
            background: #c78cfa;
            border-radius: 15px;
            box-shadow: 10px 10px 10px #7228bd,
                -5px -5px 12px #9c4ced;
            text-shadow:
                0px 1px 3px rgba(000, 000, 000, 0.3),
                0px 0px 0px rgba(255, 255, 255, 0);
            position: absolute;
            clear: both;
            border: none;
            font-weight: strong;
        }

        input[type=submit]:hover {
            box-shadow: inset -3px -3px 3px rgba(255, 255, 255, 0.5),
                inset 5px 5px 5px rgba(0, 0, 0, 0.1);
        }

        ::placeholder {
            font-size: 17px;
            font-family: Tahoma, Geneva, sans-serif;
        }

        .welcome {
            font-size: 70px;
            margin-top: 5%;
            margin-left: 10%;
            position: absolute;
            color: rgb(255, 255, 255);
        }

        label {
            margin-top: 18%;
            margin-left: 15%;
            font-size: 35px;
            position: absolute;
            color: #ffffff;
        }

        select {
            display: inline-block;
            padding: 10px 20px;
            width: 20%;
            margin-top: 22%;
            margin-left: 15%;
            padding: 2.5%;
            color: #000000;
            font-size: 1.5vw;
            font-family: Tahoma, Geneva, sans-serif;
            text-align: center;
            text-decoration: none;
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 10px 10px 10px #7228bd,
                -5px -5px 12px #9c4ced;
            text-shadow:
                0px 1px 3px rgba(000, 000, 000, 0.3),
                0px 0px 0px rgba(255, 255, 255, 0);
            position: absolute;
            clear: both;
            border: none;
            font-weight: strong;
        }

        h2 {
            margin-top: 20%;
            margin-left: 50%;
            position: absolute;
        }

        button{
            margin-top: 25%;
            margin-left: 15%;
            width: 20%;
            height: fit-content;
            padding: 0.5%;
            float: right;
            color: rgb(255, 255, 255);
            text-align: center;
            font-size: 25px;
            text-decoration: none;
            position: absolute;
            clear: both;
            background: #c78cfa;
            border-radius: 25px;
            border: 1px solid rgb(69, 9, 104);
            box-shadow: 10px 10px 10px #7228bd,
                -5px -5px 12px #9c4ced;
            text-shadow:
                0px 1px 3px rgba(000, 000, 000, 0.3),
                0px 0px 0px rgba(255, 255, 255, 0);
            color: white;
        }

        button:hover{
            box-shadow: inset -3px -3px 3px rgba(255, 255, 255, 0.5),
                inset 5px 5px 5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>

    <a href="HackGSUv1.php" class="nav-bar home">Student Access</a>
    <a href="HackGSUv5.php" class="nav-bar about">Professor Access</a>
    <!--<a href="Homeschool_register.php" class="login-button login">Log-Out</a>-->

    <div class="welcome">
        Welcome to <br>EasyAttend
    </div>
    
	<form action="HackGSUv2.php" METHOD="POST">
        <input type="text" name="crn" value="" id="name" placeholder="Enter Course Number" style = "margin-top: 25%;" required><br>
		<input type="submit" value="Get Attendance">
    
    
	
		<!--<input type="submit"></input>-->
	</form>
    <!--<script>
        function GetSelectedValue() {
            var e = document.getElementById("courses_opt");
            var result = e.options[e.selectedIndex].value;
            document.getElementById("result").innerHTML = result;
        }
		

    </script>-->
    <br />
    <br />
    <!--<button type="button" onclick="GetSelectedValue()">Get Attendance</button>-->

</body>


</html>
