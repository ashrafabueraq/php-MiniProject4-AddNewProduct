<!doctype html>
<html lang="en">

<head>
  <title>Add Product</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="style.css">
  
</head>


<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php"><img src="image/logo-removebg-preview (2).png" alt="" width="100px" hieght="100px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="add.php">Add Product</a>
        </li>
        <!-- <li class="nav-item">
        <form method="post" action="index.php">
          <input type="submit" name="clear" value="clear" style="margin: 21%;width: 150%;">
          </form>
        </li> -->
      </ul>
    </div>
  </div>
</nav>
  
  <form action="add.php" method="post">
        <div class="container">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Product name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="pname" placeholder="Product name" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"> Image </label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="source / : " name="pimg" >
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Price </label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="pprice"  placeholder="price" required >
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Descriotion</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="pdesc"  placeholder="Descriotion" required ></textarea>
            </div>

            <br> <br>
            
            <!-- <input type="submit" value="add" class="su"> -->
            <button type="submit" class="btn btn-dark" >Add Product</button>
           

        </div>

    </form>

  </div>

  <br> <br>



  <?php

            
    
session_start();
    if ($_SERVER["REQUEST_METHOD"]=="POST"){



    if (!isset($_SESSION['names'])) {
      $_SESSION['names'] = array();
    }
    array_push($_SESSION['names'],$_POST["pname"]);


    if (!isset($_SESSION['imgs'])) {
     $_SESSION['imgs'] = array();
    }
    array_push($_SESSION['imgs'],$_POST["pimg"]);


    if (!isset($_SESSION['prices'])) {
    $_SESSION['prices'] = array();
    }
   array_push($_SESSION['prices'],$_POST["pprice"]);


   if (!isset($_SESSION['descs'])) {
    $_SESSION['descs'] = array();
     }
     array_push($_SESSION['descs'],$_POST["pdesc"]);


    }





    ?> 

    
  <section>
        <div class="container">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">name</th>
                    <th scope="col">price</th>
                    <th scope="col">description</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php

                  if ($_SERVER["REQUEST_METHOD"]=="POST"){

                   $nt= $_SESSION['names'];
                   $it= $_SESSION['imgs'] ;
                   $pt= $_SESSION['prices'];
                   $dt= $_SESSION['descs'];

                   for ($i=1; $i <count($nt);++$i ){
                     
                    echo "<th scope='row'>" . $i ."</th>";
                    echo '<td>'. $nt[$i] .'</td>';
                    echo '<td>'. $pt[$i] .'</td>';
                    echo '<td>'. $dt[$i].'</td>';
                    echo "</tr>";
                   }
                  }

                  ?>

                </tbody>
            </table>
        </div>
        <?php 
        // echo "<bre>";
        // print_r ( $_SESSION["names"]);
        // echo "</bre>";
        ?>

    </section>



  
  <!-- Footer -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://web.facebook.com/salmspehat" role="button"><i class="fab fa-facebook-f"></i></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="ashrafabueraq97@gmail.com" role="button"><i class="fab fa-google"></i></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/in/ashraf-abueraq" role="button"><i class="fab fa-linkedin-in"></i></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/ashrafabueraq" role="button"><i class="fab fa-github"></i></a>
    </section>
    <!-- Section: Social media -->


    <!-- Section: Text -->
    <section class="mb-4">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
        repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
        eum harum corrupti dicta, aliquam sequi voluptate quas.
      </p>
    </section>

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright : by ASHRAF ABUERAQ
    <a class="text-white" href="pruductpage.php"></a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->



  
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>
</body>




</html>