<!DOCTYPE HTML>  
<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
 $Name = $_POST['Name'];
 $Nickname = $_POST['Nickname'];
 $Email = $_POST['Email'];
 $Phone_number = $_POST['Phone_number'];
 $Home_address = $_POST['Home_address'];
 // variables for input data
 
 // sql query for inserting data into database
 
        $sql_query = "INSERT INTO users(Name,Nickname,Email,Phone_number,Home_address) VALUES('$Name,$Nickname,$Email,$Phone_number,$Home_address')";
 mysqli_query($sql_query);
        
        // sql query for inserting data into database
 
}
?>
<html>

<head>
<style>
<?php include 'style.css'; ?>

</style>
</head>
<body>  
<?php include 'links.php';?>
 <?php
 $sql_query="SELECT * FROM users";
 $result_set=mysql_query($sql_query);
 while($row=mysql_fetch_row($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
  <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="b_edit.png" align="EDIT" /></a></td>
        <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="b_drop.png" align="DELETE" /></a></td>
        </tr>
        <?php
 }
 ?>


<?php
// define variables and set to empty values
$nameErr = $nicknameErr = $emailErr = $genderErr = $phoneErr = $homeadErr = "";
$name =$nickname= $email = $gender = $comment = $phone = $homead = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-0-9]*$/",$name)) {
      $nameErr = "Only letters,numbers and white space allowed"; 
    }
  }
    if (empty($_POST["nickname"])) {
    $nicknameErr = "Nickname is required";
  } else {
    $nickname = test_input($_POST["nickname"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$nickname)) {
      $nicknameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    if (empty($_POST["phone"])) {
    $phoneErr = "Phonenumber is required";
  } else {
    $phone = test_input($_POST["phone"]);
    if (!preg_match("/^([0-9]*)$/",$phone)) {
      $phoneErr = "Only numbers allowed"; 
    }
  }
    
  if (empty($_POST["homead"])) {
    $homead = "";
  } else {
    $homead = test_input($_POST["homead"]);
    }


  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<br><br>


<br><br>
<center><h2>CONTACT ME AT deleonaleoralphcastro@gmail.com OR SEND ME A NOTE</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name:<input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Nickname:<input type="text" name="nickname" value="<?php echo $nickname;?>">
  <span class="error">* <?php echo $nicknameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Phonenumber: <input type="text" name="phone" value="<?php echo $phone;?>">
  <span class="error">* <?php echo $phoneErr;?></span>
  <br><br>
  Home Address: <input type="text" name="homead" value="<?php echo $homead;?>">
  <span class="error"><?php echo $homeadErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit"></center> 
</form>
<center><h2>Your Input:</h2>
<?php

echo $name;
echo "<br>";
echo $nickname;
echo "<br>";
echo $email;
echo "<br>";
echo $homead;
echo "<br>";
echo $comment;
echo "<br>";
echo $phone;
echo "<br>";
echo $gender;

?>
</center>

</body>
</html>