<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?= base_url('/public/assets/css/bootstrap.min.css'); ?>">
  
    <link rel="shortcut icon" type="image/jpg" href="<?= base_url('/public/assets/img/koffie.jpg'); ?>"/>

    <title>KoffieSoft | Dashboard</title>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img class="img-thumbnail" src="<?= base_url('/public/assets/img/logo.svg'); ?>" alt="koffiesoft" width="80%" > </a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">PoS</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                Data
                </a>
                <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Food</a>
                <a class="dropdown-item" href="#">Apparel</a>
                <a class="dropdown-item" href="#">Cosmetic</a>
                <a class="dropdown-item" href="#">Suplier</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Anothers</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Sell</a>
            </li>
            <?php if(session('user')->akses ==1){?>
            <li class="nav-item">
                <a class="nav-link" href="#">Report</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Setting</a>
            </li>
            <?php }?>
            <li class="nav-item">
              <a href="<?= site_url('signout'); ?>" class="nav-link">LogOut</a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row bg-secondary text-light">
            <div class="col-8">
            <label>Welcome,<b> <?php if(session('user')!=""){ echo session('user')->name;}else{};?></b></label>
            </div>            
            <div class="col-1">
            <label> <b class="bg-warning"><?php if(session('user')->akses ==1){ echo "Admin";}else{echo "User";};?></b></label>
            </div>
            <div class="col-3 bg-danger">
            <?= date("l, Y-m-d H:i:s");?>  
            </div>
        
        </div>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="<?= base_url('/public/assets/js/bootstrap.bundle.min.js'); ?>" ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>