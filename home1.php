<!DOCTYPE HTML>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="keywords" content="htmlcss bootstrap menu, navbar, hover nav menu CSS examples" />
      <meta name="description" content="Bootstrap navbar hover examples for any type of project, Bootstrap 4"/>
      <title>My first website </title>
      <link rel="stylesheet" type="text/css" href="css/home1.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   </head>
   <body class="bg-light">
      <?php
      include_once("navbar.php");
      ?>
      <!----Slider----->
      <div class="container-fluid">
         <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
               <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
               <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img src="img/21.jpg" class=" w-100" alt="...">
                  <center>
                  <div style="position: absolute; top: 250px; color: white; margin-left: 30%;">
                     <h5>New Products</h5>
                     <h1>Flexible Sofa set</h1>
                     <p>Torem ipsum dolor sit amet, consectetur adipisicing elitsed do
                        eiusmo tempor incididunt ut labore
                     </p>
                  </div>
                  </center>
                  <div class="carousel-caption d-none d-md-block">
                  </div>
               </div>
               <div class="carousel-item">
                  <img src="img/22.jpg" class="d-block w-100" alt="..." >
                  <center>
                  <div style="position: absolute; top: 250px; color: white; margin-left: 30%;">
                     <h5>New Products</h5>
                     <h1>Flexible Sofa Set</h1>
                     <p>Torem ipsum dolor sit amet, consectetur adipisicing elitsed do
                        eiusmo tempor incididunt ut labore
                     </p>
                  </div>
                  </center>
                  <div class="carousel-caption d-none d-md-block">
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Next</span>
            </a>
         </div>
      </div>
      <!---Slider end----->
      <div class="abc">
         <h1>Living</h1>
      </div>
      <!---card start--->
      <div class="container-fluid service">
         <div class="row">
            <div class="col-md-3">
               <img src="img/111.jpg" class="card-img-top" alt="..." style="height: 250px">
               <center><h6>Wooden decorations</h6></center>
               <center><h6>₹30.0</h6></center>
               <div class="card-body">
               </div>
            </div>
            <div class="col-md-3">
               <img src="img/112.jpg" class="card-img-top" alt="..." style="height: 250px">
               <center><h6>Simple minimal chair</h6></center>
               <center><h6>₹30.0</h6></center>
               <div class="card-body">
               </div>
            </div>
            <div class="col-md-3">
               <img src="img/113.jpg" class="card-img-top" alt="..." style="height: 250px">
               <center><h6>High quality vase bottle</h6></center>
               <center><h6>₹30.0</h6></center>
               <div class="card-body">
               </div>
            </div>
            <div class="col-md-3">
               <img src="img/116.jpg" class="card-img-top" alt="..." style="height: 250px">
               <center><h6>Living & Bedroom chair</h6></center>
               <center><h6>₹30.0</h6></center>
               <div class="card-body">
               </div>
            </div>
         </div>
      </div>
      
      <div class="abc">
         <h1>Bedroom</h1>
      </div>
      <div class="container-fluid service">
         <div class="row">
            <div class="col-md-3">
               <img src="img/125.jpg" class="card-img-top" alt="..." style="height: 300px">
               <center><h6>Simple minimal chair</h6></center>
               <center><h6>₹30.0</h6></center>
               <div class="card-body">
               </div>
            </div>
            <div class="col-md-3">
               <img src="img/126.jpg" class="card-img-top" alt="..." style="height: 300px">
               <center><h6>Wooden decorations</h6></center>
               <center><h6>₹30.0</h6></center>
               <div class="card-body">
               </div>
            </div>
            <div class="col-md-3">
               <img src="img/127.jpg" class="card-img-top" alt="..." style="height: 300px">
               <center><h6>High quality vase bottle</h6></center>
               <center><h6>₹30.0</h6></center>
               <div class="card-body">
               </div>
            </div>
            <div class="col-md-3">
               <img src="img/129.jpg" class="card-img-top" alt="..." style="height: 300px">
               <center><h6>Living & bedroom chair</h6></center>
               <center><h6>₹30.0</h6></center>
               <div class="card-body">
               </div>
            </div>
         </div>
      </div>
      <!---card end-->
      <div class="abc">
         <h1>Outdoor Furniture</h1>
      </div>
      <!---card start--->
      <div class="container-fluid service">
         <div class="row">
            <div class="col-md-3">
               <img src="img/130.jpg" class="card-img-top" alt="..." style="height: 300px">
               <center><h6>Wooden decorations</h6></center>
               <center><h6>₹30.0</h6></center>
               <div class="card-body">
               </div>
            </div>
            <div class="col-md-3">
               <img src="img/132.jpg" class="card-img-top" alt="..."style="height: 300px">
               <center><h6>Simple minimal chair</h6></center>
               <center><h6>₹30.0</h6></center>
               <div class="card-body">
               </div>
            </div>
            <div class="col-md-3">
               <img src="img/131.jpg" class="card-img-top" alt="..." style="height: 300px">
               <center><h6>High quality vase bottle</h6></center>
               <center><h6>₹30.0</h6></center>
               <div class="card-body">
               </div>
            </div>
            <div class="col-md-3">
               <img src="img/133.jpg" class="card-img-top" alt="..." style="height: 300px">
               <center><h6>Living & Bedroom chair</h6></center>
               <center><h6>₹30.0</h6></center>
               <div class="card-body">
               </div>
            </div>
         </div>
      </div>
      
      <div class="abc">
         <h1>Dining</h1>
      </div>
      <!---card--->
      <div class="container-fluid service">
         <div class="row">
            <div class="col-md-3">
               <img src="img/101.jpg" class="card-img-top" alt="..." style="height: 200px">
               <center><h6>High quality vase bottle</h6></center>
               <center><h6>₹30.0</h6></center>
               <div class="card-body">
               </div>
            </div>
            <div class="col-md-3">
               <img src="img/102.jpg" class="card-img-top" alt="..." style="height: 200px">
               <center><h6>Wooden decorations</h6></center>
               <center><h6>₹30.0</h6></center>
               <div class="card-body">
               </div>
            </div>
            <div class="col-md-3">
               <img src="img/106.jpg" class="card-img-top" alt="..." style="height: 200px">
               <center><h6>Simple minimal chair</h6></center>
               <center><h6>₹30.0</h6></center>
               <div class="card-body">
               </div>
            </div>
            <div class="col-md-3">
               <img src="img/103.jpg" class="card-img-top" alt="..." style="height: 200px">
               <center><h6>Living & bedroom chair</h6></center>
               <center><h6>₹30.0</h6></center>
               <div class="card-body">
               </div>
            </div>
         </div>
      </div>
      <!---card End--->
      
      <div class="abc">
         <h1>Study Room Furniture</h1>
      </div>
      <!---card start--->
      <div class="container-fluid service">
         <div class="row">
            <div class="col-md-3">
               <img src="img/117.jpg" class="card-img-top" alt="..." style="height: 300px">
               <center><h6>Wooden decorations</h6></center>
               <center><h6>₹30.0</h6></center>
               <div class="card-body">
               </div>
            </div>
            <div class="col-md-3">
               <img src="img/118.jpg" class="card-img-top" alt="..." style="height: 300px">
               <center><h6>Simple minimal chair</h6></center>
               <center><h6>₹30.0</h6></center>
               <div class="card-body">
               </div>
            </div>
            <div class="col-md-3">
               <img src="img/119.jpg" class="card-img-top" alt="..." style="height: 300px">
               <center><h6>High quality vase bottle</h6></center>
               <center><h6>₹30.0</h6></center>
               <div class="card-body">
               </div>
            </div>
            <div class="col-md-3">
               <img src="img/120.jpg" class="card-img-top" alt="..." style="height: 300px">
               <center><h6>Living & Bedroom chair</h6></center>
               <center><h6>₹30.0</h6></center>
               <div class="card-body">
               </div>
            </div>
         </div>
      </div>
      <div class="abc">
         <h1>Kids room</h1>
      </div>
      <!---card start--->
      <div class="container-fluid service">
         <div class="row">
            <div class="col-md-3">
               <img src="img/121.jpg" class="card-img-top" alt="...">
               <center><h6>Wooden decorations</h6></center>
               <center><h6>₹40.0</h6></center>
               <div class="card-body">
               </div>
            </div>
            <div class="col-md-3">
               <img src="img/122.jpg" class="card-img-top" alt="...">
               <center><h6>Simple minimal chair</h6></center>
               <center><h6>₹40.0</h6></center>
               <div class="card-body">
               </div>
            </div>
            <div class="col-md-3">
               <img src="img/123.jpg" class="card-img-top" alt="...">
               <center><h6>High quality vase bottle</h6></center>
               <center><h6>₹50.0</h6></center>
               <div class="card-body">
               </div>
            </div>
            <div class="col-md-3">
               <img src="img/124.jpg" class="card-img-top" alt="..." style="height: 310px">
               <center><h6>Living & Bedroom chair</h6></center>
               <center><h6>₹50.0</h6></center>
               <div class="card-body">
               </div>
            </div>
         </div>
      </div>
      
      <!--footer start--->
      <?php
      include_once("footer.php");
      ?>
      <!--footer end-->
      <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
      crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
   </body>
</html>
