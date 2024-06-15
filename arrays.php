<?php
//indexed or numeric array
$colors = ["Black" , "Green", "Yellow"];

print_r($colors);

?>
<br>

<?php
$user= array("Alex","Peter","Ann");
?>

<pre>
   <?php print_r($user[2]);?>
</pre>


<?php
//associative arrays
$user_data=[
    "fullname" =>"Alex Okama",
    "email" => "AOkama@yahoo.com",
    "phone" =>"+2548458965"
    ];
print $user_data["email"];
    ?>
    <pre>
        <?php print_r($user_data);?>
  
    </pre>

    <?php
    //multidimensional arrays

    $user_details=[
    "Director" => array(
    "fullname" =>"Alex Okama",
    "address"=>"Mada",
    "email" => "AOkama@yahoo.com",
    "phone" =>[
        "Home" => "+2548458565",
        "Work" => "+819740127417",
        "Mobile"=>"0930497109109",

    
    ]
),

print $user_details
["Secretary"]["phone"];

    ?>







