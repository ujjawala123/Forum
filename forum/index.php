<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        #ques{
            min-height: 433px;
        }
    </style>
    
    <title >Welcome to iDiscuss - Coding Forums</title>
</head>

<body>
    <?php include 'partials/_dbconnect.php';?>
    <?php include 'partials/_header.php';?>

    <!-- Slider starts here -->
    <div id="carouselExampleIndicators border" class="carousel slide " data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner ">
            <div class="carousel-item active">
            <img src="img/ha.jpg" class="rounded float-left max-auto py-3 w-30" alt="...">
            <img src="img/tr.jpg" class="rounded float-right w-50" alt="...">
            <!-- <img src="img/hi.jpg"class="mx-auto p-2 d-block w-70" alt="image1"> -->
                <!-- <img src="https://source.unsplash.com/2400x700/?programmers,code"class="d-block w-100" alt="..."> -->
            </div>
            <div class="carousel-item">
            <img src="img/ui.jpg" class="rounded float-center max-auto py-3 w-40 pd-14" alt="...">
    
            <!-- <div class="container p-2 w-30 my-3 text-dark"><h1>Any time support</h1> -->
            <img src="img/k.jpg" class="rounded float-center max-auto py-3 w-45" alt="...">
            <!-- <img src="img/sa.jpg"class="mx-auto p-2 d-block w-70" alt="image1"> -->
                <!-- <img src="img/slider3.jpg" class="d-block w-100" alt="..."> -->
            </div>
            <div class="carousel-item">
            <img src="img/sf.jpg"class="rounded float-left  py-3 d-block w-30" alt="image1">
            <img src="img/hi.jpg"class="rounded float-right py-3 d-block w-30" alt="image1">
                <!-- <img src="https://source.unsplash.com/2400x700/?programming languages" class="d-block w-100" alt="..."> -->
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Category container starts here -->
    <div class="container my-4 " id="ques">
    <div class="container   my-3  ">
        <h2 class="text-center text-dark my-4">iDiscuss - Browse Categories</h2></div>
        <div class="row my-4">
          <!-- Fetch all the categories and use a loop to iterate through categories -->
         <?php 
         $sql = "SELECT * FROM `categories`"; 
         $result = mysqli_query($conn, $sql);
         while($row = mysqli_fetch_assoc($result)){
          // echo $row['category_id'];
          // echo $row['category_name'];
          $id = $row['category_id'];
          $cat = $row['category_name'];
          $desc = $row['category_description'];
          echo '<div class="col-md-4 my-2">
                  <div class="card" style="width: 18rem;">
                      <img src="img/as.jpg" class="card-img-top" alt="image for this category">
                      <div class="card-body">
                          <h5 class="card-title"><a href="threadlist.php?catid=' . $id . '">' . $cat . '</a></h5>
                          <p class="card-text">' . substr($desc, 0, 90). '... </p>
                          <a href="threadlist.php?catid=' . $id . '" class="btn btn-primary">View Threads</a>
                      </div>
                  </div>
                </div>';
         } 
         ?>
            
 
        </div>
    </div>

    <?php include 'partials/_footer.php';?>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>