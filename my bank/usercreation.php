<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Create User</title>

    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/nav.css">
    <link rel="stylesheet" type="text/css" href="css\usercreation.css">
</head>

<body>
<?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Congratulations, user created!!');
                               window.location='transaction.php';
                     </script>";
                    
    }
  }
?>

<?php
  include 'navigation.php';
?>

        <h2 class="text-center pt-4" stylr="color:#ADD8E6">Create User</h2>
        <br>
        <form method="post">
          <div class="imgcontainer">
            <img src="https://www.w3schools.com/howto/img_avatar2.png" alt="Avatar" class="avatar">
          </div>

          <div class="container">
        
              <label for="name"><b>USERNAME</b></label>
              <input type="text" placeholder="Enter Username" name="name" required><br>

              <label for="email"><b>EMAIL</b></label>
              <input type="text" placeholder="Enter mail" name="email" required><br>

              <label for="balance"><b>BALANCE</b></label><br>
              <input type="number" placeholder="Enter Balance amount" name="balance" required><br>

          </div>
          <br>


          <div class="container" style="background-color:#f1f1f1">
            <div class="app-form-group button">
                      <input type="submit" value="CREATE" name="submit"></input>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <input type="reset" value="RESET" name="reset"></input>
            </div>
          </div>
        </form>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>