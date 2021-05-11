<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <style>
        body, html {
        height: 100%;
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
        }

        * {
        box-sizing: border-box;
        }

        .bg-image {
        /* The image used */
        background-image: url("data:image/png;base64,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");
        
        /* Add the blur effect */
        filter: blur(6px);
        -webkit-filter: blur(6px);
        
        /* Full height */
        height: 80%; 
        
        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        }

        /* Position text in the middle of the page/image */
        .bg-text {
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
        color: white;
        font-weight: bold;
        border: 3px solid #f1f1f1;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 2;
        width: 80%;
        padding: 20px;
        text-align: center;
        }
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/nav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>safemonii banking</title>
  </head>

  <body style="background:#FAEBD7;">
  <?php
  include 'navigation.php';
  ?>
  
  <div class="bg-image"></div>

    <div class="bg-text">
    <h2>You are in </h2>
    <h1 style="font-size:50px">SAFEMONII BANKING</h1>
    <p>A secure place for all your transactions!!</p>
    </div>

      <!-- Activity -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTI4Im7MhHLvegnTDAUlrGPLXsvvBuDeMxJQw&usqp=CAU" class="img-fluid">
                    <br><br>
                    <a href="usercreation.php"><button>Create User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="data:image/png;base64,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" class="img-fluid">
                    <br><br>
                    <a href="transaction.php"><button>Make Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSjcvtJHlPxpeL-AoOZtFy5HoppZlpPBGfQbA&usqp=CAU" class="img-fluid">
                    <br><br>
                    <a href="Transhistory.php"><button>Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-left mt-5 py-2">
        <p>&nbsp;&nbsp;&nbsp;&copy 2021. Made by <b>Kavya Gowda </b>. The Sparks Foundation<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="fa fa-facebook"></a>&nbsp;
        <a href="#" class="fa fa-twitter"></a>&nbsp;
        <a href="#" class="fa fa-instagram"></a></p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>