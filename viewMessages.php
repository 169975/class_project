<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Messages</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>


<?php include_once ("templates/navigate.php");
      require_once ("includes/database_connect.php");?>


    <div class="topheading">
    <h1>Message Table</h1>
    </div>


    <table> 
    <div class="content2">
    <tr>
        <th>Sender name</th>
        <th>Sender Email </th>
        <th>Sender Message</th>
        <th>Time</th>
       

    </tr>
    
<?php
        $select_msg = "SELECT * FROM `messages`";
        $sel_msg_res = $conn->query($select_msg);

        if ($sel_msg_res->num_rows > 0) {
        // output data of each row
        while($sel_msg_row = $sel_msg_res->fetch_assoc()) {
  ?>     
 <tr>
        <td>1.</td>
        <td><?php print $sel_msg_row["sender_name"];?></td>
        <td><?php print $sel_msg_row["sender_email"];?></td>
        <td><?php print $sel_msg_row["text_message"];?></td>
        <td><?php print $sel_msg_row["dateupdated"];?></td>

    </tr>
 <?php
  
        }
        } else {
        echo "0 results";
        }
 ?>       

</table>
</div>
<?php include_once("templates/footer.php");?>
