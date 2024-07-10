<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="CSS/style.css">

</head>
<body>
    <?php include_once ("templates/navigate.php");?>
<?php require_once("include/database_connect.php");?>
    <div class="topheading">
<h1>
Create an account here!
    </h1>
</div><br>
<p>Kindly enter your details below: </p>


<form action="" method="post" class="clientDetails">
    <label for="FN">Full name:</label><br>
    <input type="text" id="FN"
    placeholder="Enter your Fullname" required> <br><br>


        <label for="em">E-mail:</label><br>
        <input type="email" id="em"
        placeholder="Enter your E-mail" required> <br><br>


            <h3>--Select Gender--</h3>
<input type="checkbox" name="Male" id="Male"><label for="Male">Male
            </label><br>
             
<input type="checkbox" name="Female" id="Female"><label for="Female">Female
            </label><br>
            

                <label for="age">Age:</label><br>
                <input type="number" id="age"
                placeholder="Age" required> <br><br>

                <input type="submit" value="Submit">
                <input type="reset" value="Edit">
        

</form>



<?php include_once("templates/footer.php");?>
    
</body>
</html>