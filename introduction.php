<?php

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

date_default_timezone_set("Africa/Nairobi");

print "Today is " .date('l,F jS Y H:i:s')


//Creating(Declaring) a variable
$fname= "Alex";//Declaration of a variable or a string or a group of words.

$yob =1999; //Declaration of digit or an integer

print "<br>";//using HTML's <br> to break a line

print $fname;

print "<br>";//using HTML's <br> to break a line

$user_dob = "1999-05-26";

echo

$current_year=date('Y';)

echo $current_year;

print "<br>";//using HTML's <br> to break a line

$age= $current_year -$yob;//using subtraction to find the age

print $fname . "is". $age . "years old.";

print "<br>";//using HTML's <br> to break a line

print "45+96";

$birthday= new DateTime($uaer_dob);
$today = new DateTime('today');

echo '<pre>';
print_r($interval);
echo'</pre>';

print "<br>";//using HTML's <br> to break a line

print $fname . "is, actually, ". $interval->y. "years" . $interval->m . "months, and " . $interval->d . "days old.";

//The if...else ...statement

print "<br>";//using HTML's <br> to break a line

$adult_age=18;
if($interval->y > $adult_age){
    print $fname . "is an adult";//event in block to be executed if the condition is true

}
?>