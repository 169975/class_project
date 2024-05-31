<?php


date_default_timezone_set("Africa/Nairobi");

echo "This is my first php code";//Displaying a sentence or a string

print "<br>";//using HTML's <br> to break a line

print "Today is <span style= 'color: #ff4856; text-transform: uppercase;'> Thursday</span>";


print "<br>";//using HTML's <br> to break a line

print 1999; //this is an integer or a digit

print "<br>";//using HTML's <br> to break a line

print "5475";//this is a string

print "<br>";//using HTML's <br> to break a line

print date ('l'); //displaying the current day of the week

print "<br>";//using HTML's <br> to break a line

print date('d/F/Y', strtotime('+ 5months'));

print "<br>";//using HTML's <br> to break a line

print "Today is " .date('l,F jS Y H:i:s');

//Creating(Declaring) a variable
$fname = "Alex Okama";//Declaration of a variable or a string or a group of words.

$yob =2006; //Declaration of digit or an integer

print "<br>";//using HTML's <br> to break a line

print $fname;

print "<br>";//using HTML's <br> to break a line

$user_dob = "$yob-08-16";

echo $fname . "was born in ". $yob;

print "<br>";//using HTML's <br> to break a line

echo $fname . "was actually born on " . date('l, F jS Y', strtotime($user_dob));

$current_year=date('Y');

echo $current_year;

print "<br>";//using HTML's <br> to break a line

$age= $current_year -$yob;//using subtraction to find the age

print "45+96";

print "<br>";//using HTML's <br> to break a line

print 45+69;

print "<br>";//using HTML's <br> to break a line


$birthday= new DateTime($user_dob);
$today = new DateTime('today');

$interval = $birthday ->diff($today);

echo '<pre>';
print_r($interval);
echo'</pre>';

print "<br>";//using HTML's <br> to break a line

print $fname . " is, actually, ". $interval->y. " years " . $interval->m . " months, and " . $interval->d . " days old.";

//The if...else ...statement

print "<br>";//using HTML's <br> to break a line

$adult_age=18;
if($interval->y > $adult_age){
    print $fname . " is an adult";//event in block to be executed if the condition is true
}else{
    print $fname . " is NOT an adult";//event in block to be executed if the condition is false
}   

//variable Characteristics

print "<br>";//using HTML's <br> to break a line


$last_name ="Okama";//FIRST WAY OF DECLARING VARIABLES

echo "My last name is $last_name";

print "<br>";//using HTML's <br> to break a line

echo '  My last name is ' . $last_name;

print "<br>";//using HTML's <br> to break a line

echo "Today is " . date('l');

print "<br>";//using HTML's <br> to break a line

$call ['lname']= "Okama";//SECOND WAY OF DECLARING VARIABLES
print $call['lname'];

print "<br>";//using HTML's <br> to break a line

define('LNAME', 'Okama');///THIRD WAY OF DECLARING VARIABLES
echo LNAME;

?>