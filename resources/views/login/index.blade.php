<!DOCTYPE html>

<html>

<head>
    <title>Login Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: rgb(230, 236, 240);
            font-family: sans-serif;
            border-radius: 25px;
        }
        
        .loginbox {
            width: 350px;
            height: 420px;
            background: black;
            color: white;
            top: 50%;
            left: 50%;
            position: absolute;
            transform: translate(-50%, -50%);
            box-sizing: border-box;
            border-radius: 25px;
            padding: 70px 30px
        }
        
        .avatar {
            width: 125px;
            height: 125px;
            border-radius: 25%;
            position: absolute;
            top: -75px;
            left: 32%
        }
        
        h1 {
            margin: 0;
            padding: 0 0 20 px;
            text-align: center;
            font-size: 22px;
        }
        
        .loginbox p {
            margin: 0;
            padding: 0;
            font-weight: bold;
        }
        
        .loginbox input {
            width: 100%;
            margin-bottom: 20px;
        }
        
        .loginbox input[type="text"],
        input[type="password"] {
            border: none;
            border-bottom: 1px solid white;
            background: transparent;
            outline: none;
            height: 40px;
            color: white;
            font-size: 18px;
        }
        
        .loginbox input[type="submit"] {
            border: none;
            outline: none;
            height: 40px;
            background: red;
            color: white;
            font-size: 18px;
            border-radius: 20px;
        }
        
        .loginbox input[type="submit"]:hover {
            cursor: pointer;
            background: #ffc107;
            color: #000;
        }
        
        .loginbox a {
            text-decoration: none;
            font-size: 12px;
            line-height: 20px;
            color: darkgrey;
        }
        
        .loginbox a:hover {
            color: #ffc107;
        }
    </style>

    <body>
        <div class="loginbox">
            <img src="images/iconlogin.png" class="avatar">
            <h1>Login Here</h1>
            <form>
                <p>Username</p>
                <input type="text" name= "" placeholder="Enter Username" required>
                <p>Password</p>
                <input type="Password" name="" placeholder="Enter Password" required>
                <input type="submit" name="" value="Login"><br>
                <a href="#">Forget your Password?</a><br>
                <a href="JS Exercise File\Registration page\Registration.html">Don't have account?</a>

            </form>
        </div>
    </body>
</head>

</html>