<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Messages</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
<?php include_once ("templates/navigate.php");?>
<?php require_once("include/database_connect.php");?>
   


    <div class="topheading">
    <h1>Message Table</h1>
    </div>


    <table> 
    
    <tr>
        <th>Sender name</th>
        <th>Sender Email </th>
        <th>Sender Message</th>
        <th>Time</th>
       

    </tr>
    
    <tr>
        <td>1.</td>
        <td><?php print $sel_msg_row[""];?></td>
        <td><?php print $sel_msg_row[""];?></td>
        <td><?php print $sel_msg_row[""];?></td>
        <td><?php print $sel_msg_row[""];?></td>




    </tr>
    
    <tr>
        <td>Two sharing room</td>
        <td>Ksh.20,000</td>
    </tr>






<?php



        $select_msg = "SELECT * FROM  'messages' ";
        $sel_msg_res = $conn->query($select_msg);

        if ($sel_msg_res->num_rows > 0) {
        // output data of each row
        while($sel_msg_row = $sel_msg_res->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        }
        } else {
        echo "0 results";
        }




   
<div class="content2">


<tr>
    <td>Three sharing room</td>
    <td>Ksh.17,000</td>
</tr>

<tr>
    <td>Four sharing room</td>
    <td>Ksh.15,000</td>
</tr>
</table>
</div>


</div>



<?php include_once("templates/footer.php");?>
</body>




</html>