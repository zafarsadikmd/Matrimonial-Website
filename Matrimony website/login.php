<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
       
        *{padding: 0; margin:0; box-sizing: border-box; font-family: sans-serif;}
        header{
            font-family: 'Times New Roman', Times, serif ;
            width:100%;
            min-height: 100vh;
            background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),
            url(img/ist.jpg);
            background-size: cover;
            position: relative;
        }
        .info a{
            text-decoration: none;
            color:rgb(255, 255, 255);
            font-size: 25px;
            padding: 10px 100px;
            transition: 0.4s;
            margin-left: 33cm;
        }
        .info a:hover{
            background:rgb(34, 34, 34);
            border-radius: 5px;
        }
        .box {
            color: rgb(255, 255, 255);
            background: rgb(51, 51, 51);
            background-color: rgba(255, 255, 255, 0.13);
            position: absolute;
            transform: translate(-50%, -50%);
            top: 57%;
            left:32cm;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
            padding: 50px 35px;
            text-align: center;

}

.box input[type="text"],
.box input[type="email"],
.box input[type="password"],
.box input[type="file"],
.box input[type="submit"],
.box label {
    display: block;
    width: 80%;
    margin: 10px auto;
    padding: 8px;
    border: none;
    border-radius: 4px;
}

.box input[type="submit"] {
    background-color: orange;
    color: white;
    font-weight: 800;
    cursor: pointer;
}
.box input[type="submit"]:hover {
    background-color: rgb(34, 34, 34);
}
.htext{
    position:absolute;
    top:30%;
    left:5%;
    max-width: 600px;
    color:white;
}
.htext h2{
    font-size: 4em;}
.htext span{
    color:rgb(255,165,0);
}
.box a {
    color: orange; /* Change 'blue' to the desired color */
    text-decoration: none; /* Optional: Removes underline */
}
a:hover {
    color: rgb(255, 255, 255)
}
.heading{
    margin-left: 20cm;
}
    </style>
</head>
<body>
<header>
    <div class="content">
        <div class="info"><br>
                <a href="#">Help?&nbsp;</a>
            </div>
</header>
<div class="box">
    <h2 style="margin-bottom: 10px; text-align: center;">Login for Matrimony</h2><br>
    <form action="Loginconnect.php" method="post">
        <input type="text" id="username" name="username" placeholder="Enter Username" required pattern=".*\S+.*" title="Please enter text"><br>
        <input type="password" id="password" name="password" placeholder="Enter Password" required pattern=".*\S+.*" title="Please enter text">
        <input type="checkbox"  id="password" onclick="togglePassword()"> Show Password<br><br>
        <input class="registerbutton" type="submit" value="LOGIN">
    </form>
    <br>
    <p>Forgot your password? <a href="reset.html">Reset here</a></p><br>
    <p>New User?<a href="signup.html"> Sign-Up</a></p>
</div>
</div>

<script>
    function togglePassword() {
        var passwordInput = document.getElementById("password");
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
        } else {
            passwordInput.type = "password";
        }
    }
</script>
</body>
</html>


