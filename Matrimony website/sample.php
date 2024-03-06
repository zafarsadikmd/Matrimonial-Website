<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Matrimony Example</title>

</head>

<body>
    <header>
        <div id="navbar">
            <ul class="hdr-link" style="list-style:none;">
                <li><a title="Assamese Matrimony" href="website.html" target="_blank">Assamese</a></li>
                <li><a title="Bengali Matrimony" href="website.html" target="_blank">Bengali</a></li>
                <li><a title="Bihari Matrimony" href="website.html" target="_blank">Bihari</a></li>
                <li><a title="Gujarati Matrimony" href="website.html" target="_blank">Gujarati</a></li>
                <li><a title="Hindi Matrimony" href="website.html" target="_blank">Hindi</a></li>
                <li><a title="Kannada Matrimony" href="website.html" target="_blank">Kannada</a></li>
                <li><a title="Kerala Matrimony" href="website.html" target="_blank">Kerala</a></li>
                <li><a title="Marathi Matrimony" href="website.html" target="_blank">Marathi</a></li>
                <li><a title="Marwadi Matrimony" href="website.html" target="_blank">Marwadi</a></li>
                <li><a title="Oriya Matrimony" href="website.html" target="_blank">Oriya</a></li>
                <li><a title="Parsi Matrimony" href="website.html" target="_blank">Parsi</a></li>
                <li><a title="Punjabi Matrimony" href="website.html" target="_blank">Punjabi</a></li>
                <li><a title="Rajasthani Matrimony" href="website.html" target="_blank">Rajasthani</a></li>
                <li><a title="Sindhi Matrimony" href="website.html" target="_blank">Sindhi</a></li>
                <li><a title="Tamil Matrimony" href="website.html" target="_blank">Tamil</a></li>
                <li><a title="Telugu Matrimony" href="website.html" target="_blank">Telugu</a></li>
                <li style="margin-right:0px;"><a title="Urdu Matrimony" href="website.html" target="_blank">Urdu</a></li>
            </ul>
        </div>
    </header>
    <div class="logo">
        <div class="logoleft">
            From Matrimony.com
            <img src="img/logo.jpg" alt="LogoImages">
        </div>
        <div class="logoright">
            <h3>Already a member?</h3>
            <a class="login" href="login.html" target="_blank">Login</a>
            Help?
        </div>
    </div>
    <div class="box">
    <section id="main">
        
        <form id="registrationForm" action="connect.php" method="Post">
            <h3 style="margin-bottom: 10px; text-align: center;">Find your perfect match</h3>
            <select class="form-select" required name="troom" aria-label="Default select example">
                <option selected>Matrimony Profile For</option>
                <option value="Daughter">Daughter</option>
                <option value="Son">Son</option>
                <option value="Sister">Sister</option>
                <option value="Brother">Brother</option>
                <option value="Relative">Relative</option>
                <option value="Friend">Friend</option>
            </select>
            <input type="text" name="name" placeholder="Enter Name" required>
            <input type="text" name="mobile" placeholder="Enter Mobile Number" required>
            <input type="text" name="pan" placeholder="Enter PAN Details" required>
            <p class="pan">Upload PAN Document</p><br>
            <input type="file" name="panCardDocument" id="fileToUpload">
            <input class="registerbutton" type="button" value="REGISTER HERE" onclick="validateForm()">
            <br>
            <p>*By clicking, I agree to the <span>T&C and Privacy Policy</span></p>
        </form>
    </section> 
    </div>
    <script>
        function validateForm() {
            var form = document.getElementById('registrationForm');
            var inputs = form.querySelectorAll('input, select');
            var isValid = true;
    
            inputs.forEach(function(input) {
                if (!input.checkValidity()) {
                    isValid = false;
                    input.reportValidity();
                }
            });
    
            if (isValid) {
                form.submit();
            }
        }
    </script>
    


<style>
    * {
    margin: 0;
    font-family: sans-serif;
    border: border-box;
}

#navbar {
    height: 50px;
    background: #F2F4FB;
    color: #000000;
}

li {
    display: inline-block;
    margin: 0 9px;
    text-decoration: none;
    margin-top: 10px;

}

a {
    text-decoration: none;
    color: #000000;
}
.logo{
    height: 100px;
    padding: 0 70px;
    display: flex;
    justify-content: space-between;
    padding-bottom: 10px;
    /* box-shadow: inset; */
}
#main{
    height: 100vh;
    background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),
    url(img/ind.jpg);
    background-size: cover;
}
#main form{
    color: rgb(255, 255, 255); 
        width: 350px;
            background-color: rgba(255, 255, 255, 0.13);
            position: absolute;
            transform: translate(-50%, -50%);
            top: 80%;
            left:32cm;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
            padding: 50px 35px;
}
#main form label,input,select{
    width: 100%;
    height: 35px;
    margin-bottom: 20px;
}
input,select{
    border-radius: 5px;
   
}
.registerbutton{
            background-color: orange;
            color: white;
            border: 1px solid transparent;
            font-weight: 800;
            border-radius: 12px;
            cursor: pointer;
        }
        .registerbutton:hover {
         background-color: rgb(46, 45, 45); 
        }

.login{
    background-color: white;
    color: lightsalmon;
    border-radius: 6px;
    padding: 2px;
    border: 1px solid orange;
}
.logo .logoleft{
    display: flex;
    flex-direction: column;
}
.logo .logoright{
    display: flex;
    flex-direction: row;
    padding: 40px;
    gap: 10px;
}
.logo .logoleft img{
    height: 100px;
    width: 200px;
}
.box span{
    color:rgb(255,165,0);
    cursor:pointer;
    font-size: 12px;
    transition: 0.4s;
}
.box span:hover{
    background:rgb(46, 45, 45);
    border-radius: 5px;
    
}

</style>
</body>
</html>
