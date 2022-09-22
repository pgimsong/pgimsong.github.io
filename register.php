<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าหลัก</title>
    <link rel="stylesheet" href="./script/style.css" />
</head>

<?php
      include "navbar.php";
    ?>
<h1>ลงทะเบียน</h1>


<form action="login.php" meth0d="post" enctype="multipart/form-data">
    First Name <input type="text" name="firstname" /> <br />
    Last Name <input type="text" name="lastname" /> <br />
    Email <input type="email" name="email" /> <br />
    Password <input type="" name="password" /> <br />
    Address <textarea rows="5" cols="50" name="firstname"></textarea> <br />
    <input type="submit" value="ลงทะเบียน" ?>
</form>



<br />









</body>

</html>