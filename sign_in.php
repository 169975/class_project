<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="CSS/style.css">

</head>
<body>
    <?php include_once ("templates/navigate.php");?>


    <div class="topheading">
        <h1>Welcome to resident sign-in page</h1>
    </div>
    <p>This page is meant for those who have registered with us and have an account!</p>




    <form action="" method="post" class="clientDetails">
        <label for="un">Username</label><br>
        <input type="text" id="un"
        placeholder="Enter your Fullname" required> <br><br>

        <label for="pw">Password</label><br>
        <input type="password" id="pw" maxlength="4"
        placeholder="####" required><br>

        <input type="submit" value="Submit">
        <input type="reset" value="Edit">

</form>


    <div class="footer_down">
        Copyright BBIT 2.1 &copy; Allrights reserved 
    </div>
    

</body>
</html>