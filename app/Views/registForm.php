<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?= base_url('/public/assets/css/bootstrap.min.css'); ?>">

    <title>KoffieSoft | Register</title>
  </head>

  <body class="bg-secondary">
   <div class="container">
    <div class="row justify-content-center m-4">
        <div class="col-6 m-2">
            <div class="card p-2">
                <h3 class="text-center">Registration Form!</h3><br>
                <form action="<?= base_url('registration'); ?>" method="post">
                   <div class="form-row">
                        <div class="form-group col-md-8 offset-1">
                            <label for="name">Name</label>
                            <input type="text" autocomplete="off" required name="name" id="name" class="form-control" placeholder="">
                        </div>
                        <div class="form-group col-md-8 offset-1">
                            <label for="email">Email</label>
                            <input type="email" autocomplete="off" required name="email" id="email" class="form-control" placeholder="">
                        </div>
                        <div class="form-group col-md-8 offset-1">
                            <label for="password">Password</label>
                            <input type="password" autocomplete="off"  required name="password" id="password" class="form-control" placeholder="">
                        </div>
                        <div class="form-group col-md-8 offset-1">
                            <label for="akses">Access</label>
                            <select class="form-control" name="akses" id="akses">
                                <option value="1">Admin</option>
                                <option value="2">User</option>
                            </select>
                        </div>
                        <div class="form-group col-md-8 offset-1">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                        <div class="form-group col-md-8 offset-1">                        
                            <label for="" class="text-center"><a href="<?= site_url('/');?>">Sign In here</a></label>
                        </div>
                   </div> 
                    
                   
                    
                </form>
            </div>
            
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