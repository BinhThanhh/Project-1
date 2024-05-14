
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery.min.js"></script>
    <title>Document</title>
</head>
<body id="body">
    <section id="header-body" style="margin-top: 4%;">
        <center>
            <div id="login">
                <div>
                    <h2 style=" padding-top: 8%; padding-left: 41%;">Đăng kí/Sign up</h2>
                    <form method="post" style=" padding-top: 10px; padding-left: 41%;">
                        <input id="iuser" type="text" name="username" style="border-radius: 7px;" placeholder=" Username">
                        <br>
                        <input id="email" type="email" name="email" style="border-radius: 7px;" placeholder=" Email">
                        <br>
                        <input id="ipass" type="password" name="password" style="border-radius: 7px;" placeholder=" Password" >
                        <br>
                        <input id="ipass" type="password" name="password" style="border-radius: 7px; margin-bottom: 3%;" placeholder="Re-enter password" >
                        <br>
                        <button id="bt_signup" type="submit" name="submit" style="border-radius: 5px; ">Sign up</button>
                        <br>
                    </form>
                    <p style="margin-left: 41%; color: #a29e9c;">_______________________________________</p>
                    <button id="btlogin" onclick="window.location.href = 'login.php'" type="submit" name="submit" style="border-radius: 5px;">Login</button>
                </div>
            </div>
        </center>
        

    </section>
</body>
<script src="js/bootstrap.js"></script>
</html>