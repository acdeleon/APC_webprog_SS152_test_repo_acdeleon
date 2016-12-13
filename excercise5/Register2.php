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
 $Gender = $_POST['Gender'];
 $Comments = $_POST['Comments'];
 // variables for input data

 // sql query for inserting data into database
 $sql_query = "INSERT INTO users(Name,Nickname,Email,Home_address,Gender,Phone_number,Comments) VALUES('$Name','$Nickname','$Email','$Home_address','$Gender','$Phone_number','%Comments')";
 // sql query for inserting data into database

 // sql query execution function
 if(mysqli_query($con,$sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Inserted Successfully ');
  window.location.href='index.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occurred');
  </script>
  <?php
 }
 // sql query execution function
}
?> 
<html>
<head>
<style>
<?php include 'style.css';?>
</style>
</head>
<body>  
<?php include 'links.php';?>
<?php
// define variables and set to empty values
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["Name"])) {
    $Name = "Name is required";
  } else {
    $Name = test_input($_POST["Name"]);
    if (!preg_match("/^[a-zA-Z-0-9]*$/",$name)) {
      $Name = "Only letters,numbers and white space allowed"; 
    }
  }
    if (empty($_POST["Nickname"])) {
    $Nickname = "Nickname is required";
  } else {
    $Nickname = test_input($_POST["Nickname"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$Nickname)) {
      $Nickname = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["Email"])) {
    $Email = "Email is required";
  } else {
    $Email = test_input($_POST["Email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $Email = "Invalid email format"; 
    }
  }
    if (empty($_POST["Phone_number"])) {
    $Phone_number = "Phonenumber is required";
  } else {
    $Phone_number = test_input($_POST["phone"]);
    if (!preg_match("/^([0-9]*)$/",$phone)) {
      $Phone_number = "Only numbers allowed"; 
    }
  }
    
  if (empty($_POST["Home_address"])) {
    $Home_address = "";
  } else {
    $Home_address = test_input($_POST["Home_address"]);
    }


  if (empty($_POST["Comments"])) {
    $Comments = "";
  } else {
    $Comments = test_input($_POST["Comments"]);
  }

  if (empty($_POST["Gender"])) {
    $Gender = "Gender is required";
  } else {
    $Gender = test_input($_POST["Gender"]);
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
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name:<input type="text" name="Name" value="<?php echo $Name;?>">
  <span class="error">* <?php echo $Name;?></span>
  <br><br>
  Nickname:<input type="text" name="Nickname" value="<?php echo $Nickname;?>">
  <span class="error">* <?php echo $Nickname;?></span>
  <br><br>
  E-mail: <input type="text" name="Email" value="<?php echo $Email;?>">
  <span class="error">* <?php echo $Email;?></span>
  <br><br>
  Phonenumber: <input type="text" name="Phone_number" value="<?php echo $Phone_number;?>">
  <span class="error">* <?php echo $Phone_number;?></span>
  <br><br>
  Home Address: <input type="text" name="Home_address" value="<?php echo $Home_address;?>">
  <span class="error"><?php echo $Home_address;?></span>
  <br><br>
  Comment: <textarea name="Comments" rows="5" cols="40"><?php echo $Comments;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($Gender) && $Gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($Gender) && $Gender=="male") echo "checked";?> value="male">Male
  <span class="error">* <?php echo $Gender;?></span>
  <br><br>
  <input type="submit" name="btn-save" value="Submit"></center> 
</form>
</center>

</body>
</html>