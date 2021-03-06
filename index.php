<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="navbar.css">
  <link rel="icon" href="favicon-32x32.png" type="image" sizes="32x32">


  <title>Banking System</title>
</head>

<body>
  <?php
  include 'navbar.php';
  ?>

  <div class="container-fluid">

    <div class="row intro py-1">
      <div class="col-sm-12 col-md">
        <div class="heading text-center my-5">
          <h3>Welcome to</h3>
          <h1>THE BANK OF SPARKS</h1>
          <p>Safe & Secure</p>
        </div>
      </div>
      <div class="col-sm-12 col-md img text-center">
        <img class="im" src="bank.png" class="img-fluid pt-2">
      </div>
    </div>


    <br>
    <br>
    <div class="container">

      <div class="column activity text-center">

        <spam class="col-md act">


          <a href="transfermoney.php"><button>Customer Details & Transfer</button></a>
        </spam>
        <hr>


        <spam class="col-md act">


          <a href="transactionhistory.php"><button>Transaction History</button></a>
        </spam>

      </div>
    </div>

  </div>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>