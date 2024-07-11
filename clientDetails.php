<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv ="Content-Type" content= "text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
<link rel="stylesheet" href="CSS/style.css">
</head>

<?php 
 include_once ("templates/navigate.php");
 require_once("includes/database_connect.php");


 if(isset ($_POST["save_details"])){
    $fn=$_POST["fullname"];
    $pwd=$_POST["password"];
    $em=$_POST["e-mail"];
    $gd=$_POST["gender"];
    $message=$_POST["message"];


$insert_message = "INSERT INTO messages (sender_name, sender_password, sender_email,sender_gender,text_message)
 VALUES ('$fn','$pwd','$em', '$gd', '$message')";
 
 if ($conn->query($insert_message) === TRUE) {
   echo "New record created successfully";
 } else {
   echo "Error: " . $insert_message . "<br>" . $conn->error;
 }
 
}
?>

<div class="topheading">
        <h1>Thank you for visiting our website!</h1>
    </div>
    <p>Book an interview or make a reservation today: <br>
E-mail: rhemaresidents@gmail.com <br>
Telephone: +254-789-123-45/77</p>
    <h1>Forms </h1>
    <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>" 
    method="POST" class="clientDetails">
        <label for="fn">Fullname:</label><br>
        <input type="text" id="fn"
        placeholder="Enter Fullname" name="fullname" required ><br><br>
        

        <label for="pwd">Password:</label><br>
        <input type="password" id="pwd"
        placeholder="Enter password" name ="password" maxlength="10" required><br><br>

       <!-- <label for="age">Age:</label><br><br>
        <input type="number" id="age" 
        placeholder="age" name="age" required><br><br>-->

        <label for="em">E-mail:</label><br><br>
        <input type="email" id="em"
        placeholder="email" name="e-mail" required ><br><br>
        
      <!--  <label for="telno">Telephone number</label><br><br>
        <input type="tel" id="telno" placeholder="#####" name="Telephone_number" ><br><br>
         <input type="time"
        placeholder="deadline" name="time"><br><br> -->

       
       
        <!-- <input name="level" type="radio" id="Basic"><label for="Basic">Basic</label><br>

        <input name="level" type="radio" id="Intermediate"><label for="Intermediate">Intermediate</label><br>

        <input name="level" type="radio" id="Advanced"><label for="Advanced">Advanced</label><br>

<input type="checkbox" name="Japanese" id="Japanese"><label for="Japanese">Japanese
</label><br>

<input type="checkbox" name="Swahili" id="Swahili"><label for="Swahili">Swahili
</label><br>

<input type="checkbox" name="English" id="English"><label for="English">English
</label><br>-->

<label for="msg">Write the Message Here:</label><br>
<textarea name="message" id="" cols="30" rows="10"required >
   
</textarea><br>

<label for="gd">Gender:</label>
<select name="gender" id="gd" required>
    <option value="">--Select Gender--</option>
    <option value="">Female</option>
    <option value="">Male</option>
    <option value="">Rather not say</option>
</select>

<br><br>
<input type="submit" name="save_details" value="save details">
    </form>

   <?php include_once("templates/footer.php");?>




