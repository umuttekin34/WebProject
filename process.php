<?php
$myusername = "b191210382@sakarya.edu.tr";
$mypassword = "1";
$username = $_POST['email'];
$password = $_POST['password'];

if ($username != $myusername || $password!=$mypassword || $password==""  || $username==""){
        header("location: login.html");
    }
?>
<html>
<head>
    <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="processpage.css">
<title></title>
</head>
<body>
       <div class="container">
           <div class="row justify-content-center">
                <p id="paragraf">
                    Hoşgeldin b191210382
                </p>
           </div>
        </div> 
</body>
</html>
