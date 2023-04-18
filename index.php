<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- including css-->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="css/style1.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">
  <title>The Spark Bank</title>
</head>

<body>

  <?php
  include 'navbar.php';
  ?>

  <div class="container-fluid">
    <!-- Introduction section -->
    <div class="homecontent">
      <div class="welcommsg">
        <H1>Welcome To... </H1>
        <H2>The Spark Bank</H2>
        <p>Welcome to the future of banking! Our cutting-edge financial institution offers unparalleled services and features designed to meet all your banking needs. From seamless online transactions to personalized wealth management solutions, we're here to help you achieve your financial goals. Trust us to provide you with innovative technology, outstanding customer service, and the peace of mind that comes with knowing your money is in good hands. Join us today and experience the difference of banking with a true partner.</p>
        <!-- Activity section -->
        <a class="nav-link" href="createuser.php" style="color : #fff;"><b><button>Create User</button></b></a>
        <a class="nav-link" href="transfermoney.php" style="color : #fff;"><b><button>View All Customer</button></b></a>
        <a class="nav-link" href="removeuser.php" style="color : #fff;"><b><button>Delete Users</button></b></a>
        <a class="nav-link" href="transactionhistory.php" style="color : #fff;"><b><button>Transaction History</button></b>
        </a>
      </div class="img">

        <img src="img/Image/Home.jpg" width="50%" alt="Bank Image">
      </div>
    <div>
   
  </div>

  <footer class="text-center mt-5 py-2" id="footer">
    <p>&copy 2023 Made by <b>Narendra Singh </b>Under The Guidence of <b><a href="https://internship.thesparksfoundation.info/"  style="color : #fff;">The Spark Foundation</a></b></p>
  </footer>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>
</body>

</html>