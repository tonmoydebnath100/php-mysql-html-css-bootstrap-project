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
      <h3>Team Names And Groups</h3>
    </div>
    <div class="container mb-5">
    <div class="row">
    <?php
    session_start();
    include("db_connection.php");
    $sql = "select * from team";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_row($result)){
    ?>
      <div class="col-lg-3 col-md-4 col-sm-6 my-5 ">
        <div class="card " style="width: 10rem; height:100px;">
          <img src="<?php echo $row[2];?>" class="card-img-top" alt="...">
          <div class="card-body">
          
          <div class="d-flex justify-content-between"><h5 class="m-0"><?php echo $row[1];?></h5><a href="squad.php?name=<?php echo $row[1];?>"><i class="fa-solid fa-link"></i></a></div>
          <p class="m-0">Group: <?php echo $row[3];?></p>
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