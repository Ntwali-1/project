<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
  $first = $_POST['first'];
  $second = $_POST['second'];
  $email = $_POST['email'];
  $tel = $_POST['tel'];
  // $pic = $_POST['pic'];
  $bd = $_POST['bd'];
  $country = $_POST['country'];
  $gender = $_POST['n1'];
  $lang = $_POST['lang'];
  $rating = $_POST['rating'];
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <table border = "1" >
  <tr>
    <th>Firstname</th>
    <th>Secondname</th>
    <th>Email</th>
    <th>Telephone</th>
    <!-- <th>Picture</th> -->
    <th>Birthdate</th>
    <th>Country</th>
    <th>Gender</th>
    <th>Spoken Languages</th>
    <th>Rating</th>
    
   </tr>
   <tr>
    <td><?php echo $first; ?></td>
    <td><?php echo $second; ?></td>
    <td><?php echo $email; ?></td>
    <td><?php echo $tel; ?></td>
    
    <td><?php echo $bd; ?></td>
    <td><?php echo $country ?> </td>
    <td><?php echo $gender; ?></td>
    <td><?php echo implode(", ",$lang); ?></td>
    <td><?php echo $rating; ?></td>
    
   </tr>
  </table>
</body>
</html>
