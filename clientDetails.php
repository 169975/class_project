<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>

<?php include_once ("templates/navigate.php");?>
    <div class="topheading">
        <h1>Thank you for visiting our website!</h1>
    </div>
    <p>Book an interview or make a reservation today: <br>
E-mail: rhemaresidents@gmail.com <br>
Telephone: +254-789-123-45/77</p>
    <h1>Forms </h1>
    <form action="" method="post" class="clientDetails">
        <label for="fn">Fullname:</label><br>
        <input type="text" id="fn"
        placeholder="Enter Fullname" required ><br><br>
        

        <label for="pwd">Password:</label><br>
        <input type="password" id="pwd"
        placeholder="Enter password" maxlength="10"><br><br>

        <label for="age">Age:</label><br><br>
        <input type="number" id="age" 
        placeholder="age" required><br><br>

        <label for="em">E-mail:</label><br><br>
        <input type="email" id="em"
        placeholder="email" ><br><br>

        <label for="telno">Telephone number</label><br><br>
        <input type="tel" id="telno" placeholder="#####"><br><br>


        <input type="time"
        placeholder="deadline"><br><br>

        <input name="level" type="radio" id="Basic"><label for="Basic">Basic</label><br>

        <input name="level" type="radio" id="Intermediate"><label for="Intermediate">Intermediate</label><br>

        <input name="level" type="radio" id="Advanced"><label for="Advanced">Advanced</label><br>

<input type="checkbox" name="Japanese" id="Japanese"><label for="Japanese">Japanese
</label><br>

<input type="checkbox" name="Swahili" id="Swahili"><label for="Swahili">Swahili
</label><br>

<input type="checkbox" name="English" id="English"><label for="English">English
</label><br>

<textarea name="" id="" cols="30" rows="10"></textarea>

<select name="" id="">
    <option value="">--Select Gender--</option>
    <option value="">Female</option>
    <option value="">Male</option>
    <option value="">Rather not say</option>
</select>

<br><br>
<input type="submit" value="save details">
    </form>

   <?php include_once("templates/footer.php");?>
</body>



</html>