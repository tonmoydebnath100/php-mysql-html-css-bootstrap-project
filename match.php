<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/22dfd5b5e0.js" crossorigin="anonymous"></script>
  
  <link rel="stylesheet" href="home.css">
  <title>Welcome to FIFA WORLD CUP QATAR 2022</title>
</head>
<body>
  <div class="navbar">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand text-white" href="home.php">Welcome to FIFA WORLD CUP QATAR 2022</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"><i class="fa-solid fa-bars text-white"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-white" href="team.php">Teams</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="score.php">Scores</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="match.php">Match Schedule</a>
            </li>
            <li class="nav-item">
              <a  class="btn btn-outline-light" href="FrontPage.php">Logout</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
    </div>
    <div class="text-center mt-5">
      <h3>Match Schedule</h3>
    </div>
    <div class="container mb-5">
    <div class="row">
    <?php
    session_start();
    include("db_connection.php");
    $sql = "select * from match_schedule";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_row($result)){
      $f1="select flag_img from team WHERE (team_name='$row[0]')";
      $f2="select flag_img from team WHERE (team_name='$row[1]')";
      $r1 = mysqli_query($conn, $f1);
      $ro1 = mysqli_fetch_row($r1);
      $r2 = mysqli_query($conn, $f2);
      $ro2 = mysqli_fetch_row($r2);
    ?>
      <div class="col-lg-4 col-md-6 col-sm-12 my-5 ">
        <div class="card bg-light" style="width: 19rem; height:150px;">
          <div class="d-flex justify-content-between m-2">
            <img src="<?php echo $ro1[0];?>" class="card-img-top" style="width: 100px; height:60px;" alt="...">
            <h3>VS</h3>
            <img src="<?php echo $ro2[0];?>" class="card-img-top" style="width: 100px; height:60px;" alt="...">
          </div>
          <div class="card-body">
            <h6 class="m-0"><?php echo $row[0];?> VS <?php echo $row[1];?></h6>
            <p class="m-0">Date: <?php echo $row[4];?></p>
          </div>
        </div>
      </div>
    
      <?php } ?>
    </div>
    </div>
    <footer class="bg-dark">
    <div class="text-center py-5">
      <div>
        <a class="navbar-brand fs-2 fw-bold text-white" href="#">Welcome to FIFA WORLD CUP QATAR 2022</a>
      </div>
      <div>
        <p class="fs-6 text-white m-0">
          Office 41, Zawaya Buildin, Ghala Muscat, <br>
          Sultanate of Oman <br>
          Privacy Ploicy | Terms of use
        </p>
      </div>
      <div class="mt-2">
        <i class="fa-brands fa-square-facebook text-white fs-4"></i>
        <i class="fa-brands fa-square-instagram text-white fs-4"></i>
        <i class="fa-brands fa-square-twitter text-white fs-4"></i>
        <i class="fa-brands fa-linkedin text-white fs-4"></i>
      </div>
    </div>
  </footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>


</body>
</html>