<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/
   css?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body>
<?php include 'menu.php'; ?>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/ll.jpg" alt="Light" width="1100" height="500 ">
      <div class="carousel-caption">
        <h3>Death note</h3>
        <p>Boku wa kira</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/n.jpg" alt="Teen gojo" width="1100" height="500">
      <div class="carousel-caption">
        <h3>TEEN GOJO</h3>
        <p>Honored1</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/u.jpg " alt="gojo" width="1100" height="500">
      <div class="carousel-caption">
        <h3>GOJO</h3>
        <p>Ghost of the Strongest</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


<section class="my-5">
  <div class="py-5">
    <h1 class="text-center" style="font-size: 70px;">Look Here👀👀</h1>
  </div>
  <div class="container-fluid">
    <div class="row">
       <div class="col-lg-4 col-mid-4 col-12">
       <div class="card" >
  <img class="card-img-top" src="image/nlloo.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">TOJI ZENIN</h4>
    <p class="card-text">Revived Toji Zenin During Shibuya Incident Arc Jujutsu Kaisen.</p>
    <a href="#" class="btn btn-success">More from JJK</a>
  </div>
</div>
        </div>
        <div class="col-lg-4 col-mid-4 col-12">
       <div class="card" >
  <img class="card-img-top" src="image/diio.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">DIO BRANDO</h4>
    <p class="card-text">Final Villain DIO from jojo Bizarre.</p>
    <a href="#" class="btn btn-success">More from jojo</a>
  </div>
</div>
        </div>
        <div class="col-lg-4 col-mid-4 col-12">
       <div class="card" >
  <img class="card-img-top" src="image/L.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">L</h4>
    <p class="card-text">Detective L from Death Note.</p>
    <a href="#" class="btn btn-success">More from Death Note</a>
  </div>
</div>
        </div>
    </div>
  </div>

</section>
<section class="my-5">
  <div class="py-5">
     <h2 class="text-center">Enjoy Anime World</h2>
  </div>

<div class="container-fluid">
   <div class="row">
     <div class="col-1g4 col-md-4 col-12">
            <img src="image/m.jpg" class="img-fluid pb-3">
     </div>
     <div class="col-1g4 col-md-4 col-12">
            <img src="image/tt.jpg" class="img-fluid pb-3">
     </div>
     <div class="col-1g4 col-md-4 col-12">
            <img src="image/iaa.jpg" class="img-fluid pb-3">
     </div>
     <div class="col-1g4 col-md-4 col-12">
            <img src="image/ve.jpg" class="img-fluid pb-3">
     </div>
     <div class="col-1g4 col-md-4 col-12">
            <img src="image/obi.jpg" class="img-fluid pb-3">
     </div>
     <div class="col-1g4 col-md-4 col-12">
            <img src="image/Makima.jpeg" class="img-fluid pb-3">
     </div>
     <div class="col-1g4 col-md-4 col-12">
            <img src="image/eer.jpg" class="img-fluid pb-3">
     </div>
     <div class="col-1g4 col-md-4 col-12">
            <img src="image/Rengoku Fanart.jpg" class="img-fluid pb-3">
     </div>
     <div class="col-1g4 col-md-4 col-12">
            <img src="image/ddd.jpg" class="img-fluid pb-3">
     </div>
     
  </div>
</div> 

</section>
<section class="my-5">
  <div class="py-5">
     <h2 class="text-center">Contact Us</h2>
  </div>
  <div class="w-50 m-auto">
  <form action="userinfo.php" method="post">
    <div class="form-group">
        <label>Username</label>
        <input type="text" name="user" autocomplete="off" class="form-control">
    </div>
    <div class="form-group">
        <label>Email Id</label>
        <input type="text" name="email" autocomplete="off" class="form-control">
    </div>
    <div class="form-group">
        <label>Mobile</label>
        <input type="text" name="mobile" autocomplete="off" class="form-control">
    </div>
    <div class="form-group">
        <label>Comments</label>
        <textarea class="form-control" name="comment"></textarea>
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
</form>

</div>
</section>
<footer>
  <p class="p-3 bg-dark text-white text-center" style="font-size: 50px;">@AnimysticTEAM</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
