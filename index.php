 <?php

include 'db.php';
if(isset($_POST['submit-btn'])){
  $email = $_POST['email'];

  $query = $conn->query("SELECT * from subscribers where email='$email'");

  $numrows = $query->num_rows;

  if($numrows == 0){
    $sql = $conn->query("INSERT INTO subscribers(email) VALUES ('$email')");
    if($sql){
      $error = "<div class='succ wow slideInDown slow ' id='one'>
      <div>
        <i class='fa fa-check-circle'></i>
      <p>Subscribed</p>
      </div>  
    </div>" ;
    }else{ 
      $error = "<div class='dang wow slideInDown slow ' id='three'>
    <div>
      <i class='fa fa-close'></i>
    <p>An Error occured</p>
    </div>  
  </div>";
    }
  }else{
    
    $error = "<div class='warn wow slideInDown slow ' id='two'>
    <div>
      <i class='fa fa-exclamation-triangle'></i>
    <p>Email already Exist</p>
    </div>  
  </div>" ;
  }

}

?> 


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


  <link rel="stylesheet" href="./assets/css/animate.css">
  <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>


  
  <div class="head my-0 ">
    <nav id="myNavbar" class="navbar navbar-light navbar-expand-md fixed-top">
      <a class="navbar-brand" href="#"><img src="./assets/img/Group 25.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse  w-90 m-auto" id="navbarSupportedContent">
        <ul class="navbar-nav w-100 m-auto mr-0">
          <li class="nav-item w-100 active">
            <a class="nav-link w-50 m-auto mr-0" style="color: white" href="#about">About<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item w-100 m-auto ">
            <a class="nav-link  m-auto"style="color:white" href="#how">How to use</a>
          </li>
        </ul>
        
      </div>
    </nav>
    <div class="container p-3">
    </div>
    <div class="container my-5 mon">
      <div class="row">
        <div class="col-md-7 my-auto  wow fadeInDown int">
          <div class="mb-2">
            <h1>Share battery charge with other devices easily.</h1>
          </div>
          <div class="my-2">
            <h3>Be the first to use this app when it arrives</h3>
            <form action="" method="Post">
              <div class="input-wrap">
                <input type="text" placeholder="Email address" name="email">
                <button class="btn btn-danger" name="submit-btn">Submit</button>
              </div>
            </form>
          </div>
          <div class="mb-5 com">
            <h5>Coming soon on</h5>
            <img src="./assets/img/Group 35.png" alt="">
            <img src="./assets/img/Group 36.png" alt="">
            <i class="fa fa-amazon"></i>
          </div>
          <img src="./assets/img/Group 25.png" alt="" class="or">
        </div>
        <div class="col-md-5 wow fadeInDown">
          <div class="inner">

          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  <?php

    if(isset($error)){
      echo $error;
    }

  ?>






  <section class="container sec" id="how">
    <div class="row">
      <div class="col-md-5 wow fadeInDown">
        <div>
          <img src="./assets/img/Group 33.png" onclick="openModal();currentSlide(1)" class="hover-shadow">
        </div>
      </div>
      <div class="col-md-7 my-auto align-self-center wow fadeInDown" id="how">
        <h1>5 Easy Steps to follow. </h1>
        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum lorem ipsum is simply free text dolore
          eu fugiat nulla pariatur.</p>
        <ul>
          <li>Refresing to get such a personal touch.</li>
          <li>Alluring to get such a personal touch.</li>
          <li>Amazing to get such a personal touch.</li>
          <li>Mind to get such a personal touch.</li>
          <li>Incredible to get such a personal touch.</li>
        </ul>
      </div>
    </div>
  </section>



  <section class="container sec sid">
    <div class="row">
      <div class="col-md-7 my-auto align-self-center wow fadeInUp">
        <h1>QR code is created using Hotspot from your mobile.</h1>
        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum lorem ipsum is simply free text dolore
          eu fugiat nulla pariatur. </p>
      </div>
      <div class="col-md-5 wow fadeInUp">
        <div>
          <img src="./assets/img/Group 35 (1).png" onclick="openModal();currentSlide(2)" class="hover-shadow">
        </div>
      </div>
    </div>
  </section>


  <section class="container sec sid">
    <div class="row">
      <div class="col-md-5 wow fadeInUp">
        <div>
          <img src="./assets/img/Group 34.png" onclick="openModal();currentSlide(3)">
        </div>
      </div>
      <div class="col-md-7 my-auto align-self-center wow fadeInUp">
        <h1> Connect to Devices using wifi</h1>
        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum lorem ipsum is simply free text dolore
          eu fugiat nulla pariatur.</p>
      </div>
    </div>
  </section>


  <!-- The Modal/Lightbox -->

  <div id="myModal" class="modal">
    <span class="close cursor" onclick="closeModal()">&times;</span>
    <div class="modal-content">

      <div class="mySlides">
        <div class="numbertext">1 / 6</div>
        <img src="./assets/img/Group 33.png" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">2 / 6</div>
        <img src="./assets/img/Group 34.png" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">3 / 6</div>
        <img src="./assets/img/Group 35 (1).png" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">4 / 6</div>
        <img src="./assets/img/Group 39.png" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">5 / 6</div>
        <img src="./assets/img/Group 48.png" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">5 / 6</div>
        <img src="./assets/img/Group 97.png" style="width:100%">
      </div>

      <!-- Next/previous controls -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
  </div>


  <section class="container sec sid">
    <div class="row">
      <div class="col-md-7 my-auto align-self-center wow fadeInUp">
        <h1>You can send battery directly to your favorite devices.</h1>
        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum lorem ipsum is simply free text dolore
          eu fugiat nulla pariatur. </p>
      </div>
      <div class="col-md-5 wow fadeInUp">
        <div>
          <img src="./assets/img/Group 39.png" class="mag" onclick="openModal();currentSlide(4)">
        </div>
      </div>
    </div>
  </section>

  <section class="container sec sid">
    <div class="row">
      <div class="col-md-5 wow fadeInUp">
        <div>
          <img src="./assets/img/Group 48.png" onclick="openModal();currentSlide(5)">
        </div>
      </div>
      <div class="col-md-7 my-auto align-self-center wow fadeInUp">
        <h1>You can send battery directly to your favorite devices.</h1>
        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum lorem ipsum is simply free text dolore
          eu fugiat nulla pariatur. </p>
      </div>
    </div>
  </section>

  <section class="container sec sid">
    <div class="row">
      <div class="col-md-7 my-auto align-self-center wow fadeInUp">
        <h1>Enter the amount of battery you want to send.</h1>
        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum lorem ipsum is simply free text dolore
          eu fugiat nulla pariatur. </p>
      </div>
      <div class="col-md-5 wow fadeInUp">
        <div>
          <img src="./assets/img/Group 97.png" class="mag" onclick="openModal();currentSlide(6)">
        </div>
      </div>
    </div>
  </section>


  <div class="container-fluid lind">
    <div class="container">
      <div class="link-wrap">
        <i class="fa fa-windows"></i>
        <i class="fa fa-amazon"></i>
        <i class="fa fa-apple"></i>
        <i class="fa fa-android"></i>
      </div>
    </div>
  </div>
  <div class="sub-wrap container-fluid">
    <div class="container">
      <div class="fut align-self-center wow slideInLeft">
        <h3>Be the first to use this app when it arrives</h3>
        <form action="" method="Post">
          <div class="footer-input">
            <input type="text" placeholder="Email address" name="email">
            <button class="btn btn-danger" name="submit-btn">Submit</button>
          </div>
        </form>
        <div class="mb-5 com">
          <h5>Coming soon on</h5>
          <img src="./assets/img/Group 35.png" alt="">
          <img src="./assets/img/Group 36.png" alt="">
          <i class="fa fa-amazon"></i>
        </div>
      </div>
      
    </div>
    <div class="copy wow fadeInDown">
      Copyright &copy; 2020
    </div>
  </div>



  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https ://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
  </script>
  <script src="./assets/js/wow.js"></script>
  <script src="./assets/js/script.js"></script>
  <script>
    new WOW().init();
  </script>

</body>

</html>