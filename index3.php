<?php
session_start();
$msg = "";
if (isset($_REQUEST['btn_log']))
{
session_destroy();
header("Location: index3.php");
}
if (isset($_REQUEST['btn_sub'])) {
$email = validate1($_POST["name"]);
$password = validate1($_POST["password"]);
$semail = "huzaifazafar7@gmail.com";
$spassword = "12345";
if (!empty($email) && !empty($password))
{
if ($email == $semail && $password == $spassword)
{
$_SESSION['email'] = $email;
$_SESSION['password'] = $password;
}
else
{
$msg = "Email or password increcrt";
}
}
else
{
$msg = "Some field is Empty";
}
}
function validate1($value1)
  {
    $value1 = trim($value1);
    $value1 = htmlspecialchars($value1);
    return  $value1;
  }





if (isset($_REQUEST['btn_img']))
{
  $img = $_POST["img"];
 $file_path = 'image/'. basename($_FILES['img']['name']);
 $file_path1 = basename($_FILES['img']['name']);
 $get_count = strrpos($file_path1,'.');
 $tcount = strlen($file_path1);
 $get_ext = substr($file_path1, $get_count);
 $get_name = substr($file_path1,"-".$tcount,$get_count);
 $mydate=getdate(date("U"));
 $mydate=$mydate[year].$mydate[mon].$mydate[mday].$mydate[minutes].$mydate[seconds];
 echo $get_name.$mydate. $get_ext;
  $file_path1 = 'image/'. basename($get_name.$mydate.$get_ext);
  
 $imageFileType = strtolower(pathinfo($file_path,PATHINFO_EXTENSION));
  
  if (empty($_FILES['img']['name'])) {$msg = "Select the File first";}
  elseif ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"&& $imageFileType != "gif" ) {$msg = "Sorry Only image allow";}
  // elseif (file_exists($file_path)){$msg = "This file is Alrady exist";}
  elseif (move_uploaded_file($_FILES['img']['tmp_name'], $file_path1)) {$msg = "The file has been uploaded.";} 
  else { $msg = "Sorry, there was an error uploading your file.";  }


}



?>
<html>
  <head>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>Sign in</title>
    
  </head>
  <body>
    <div class="main">
      <p class="sign" align="center">Sign in</p>
      <form class="form1" method="POST" accept="#">
        <input class="un " name="name" type="text" align="center"  placeholder="Username">
        <input class="pass" name="password" type="password"  align="center"  placeholder="Password">
        <button class="submit" type="submit" name="btn_sub" align="center">Sign in</button>
        <button class="submit1" type="submit" name="btn_log" align="center">logout</button>
      </form>
      <p class="" style="color: red" align="center"><?php echo $msg  ?></p>
      <p class="sign" align="center"> <?php echo $_SESSION['email'] ?></p>
      <p class="forgot" align="center"></p>
    </div>


     <div class="main">
      <p class="sign" align="center">uplode image</p>
      <form class="form1" method="POST" accept="#" enctype="multipart/form-data">
        <input class="un " name="img" type="file" align="center">
        <button class="submit" type="submit" name="btn_img" align="center">Submit</button>
      </form>
      <p class="" style="color: red" align="center"><?php echo $msg  ?></p>
      
   
    </div>
    
    
  </body>
  <style>
  body {
  background-color: #F3EBF6;
  font-family: 'Ubuntu', sans-serif;
      display: flex;
  }
  
  .main {
  background-color: #FFFFFF;
  width: 400px;
  height: 400px;
  margin: 7em auto;
  border-radius: 1.5em;
  box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
  }
  
  .sign {
  padding-top: 40px;
  color: #8C55AA;
  font-family: 'Ubuntu', sans-serif;
  font-weight: bold;
  font-size: 23px;
  }
  
  .un {
  width: 76%;
  color: rgb(38, 50, 56);
  font-weight: 700;
  font-size: 14px;
  letter-spacing: 1px;
  background: rgba(136, 126, 126, 0.04);
  padding: 10px 20px;
  border: none;
  border-radius: 20px;
  outline: none;
  box-sizing: border-box;
  border: 2px solid rgba(0, 0, 0, 0.02);
  margin-bottom: 50px;
  margin-left: 46px;
  text-align: center;
  margin-bottom: 27px;
  font-family: 'Ubuntu', sans-serif;
  }
  
  form.form1 {
  padding-top: 40px;
  }
  
  .pass {
  width: 76%;
  color: rgb(38, 50, 56);
  font-weight: 700;
  font-size: 14px;
  letter-spacing: 1px;
  background: rgba(136, 126, 126, 0.04);
  padding: 10px 20px;
  border: none;
  border-radius: 20px;
  outline: none;
  box-sizing: border-box;
  border: 2px solid rgba(0, 0, 0, 0.02);
  margin-bottom: 50px;
  margin-left: 46px;
  text-align: center;
  margin-bottom: 27px;
  font-family: 'Ubuntu', sans-serif;
  }
  
  
  .un:focus, .pass:focus {
  border: 2px solid rgba(0, 0, 0, 0.18) !important;
  
  }
  .submit1 {
  cursor: pointer;
  border-radius: 5em;
  color: #fff;
  background: linear-gradient(to right, #9C27B0, #E040FB);
  border: 0;
  padding-left: 40px;
  padding-right: 40px;
  padding-bottom: 10px;
  padding-top: 10px;
  font-family: 'Ubuntu', sans-serif;
  margin-left: 10%;
  font-size: 13px;
  box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
  }
  
  .submit {
  cursor: pointer;
  border-radius: 5em;
  color: #fff;
  background: linear-gradient(to right, #9C27B0, #E040FB);
  border: 0;
  padding-left: 40px;
  padding-right: 40px;
  padding-bottom: 10px;
  padding-top: 10px;
  font-family: 'Ubuntu', sans-serif;
  margin-left: 16%;
  font-size: 13px;
  box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
  }
  
  .forgot {
  text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
  color: #E1BEE7;
  padding-top: 15px;
  }
  
  a {
  text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
  color: #E1BEE7;
  text-decoration: none
  }
  
  @media (max-width: 600px) {
  .main {
  border-radius: 0px;
  }
  
  
  </style>
</html>