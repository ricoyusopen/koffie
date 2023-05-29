<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?= base_url('/public/assets/css/bootstrap.min.css'); ?>">

    <title>KoffieSoft | Login</title>
  </head>

  <body class="bg-secondary">
   <div class="container">
    <div class="row justify-content-center m-5">
        <div class="col-6 m-5">
            <div class="card p-3">
                <h3 class="text-center">Sign In Please!</h3>
                <?php if(!empty(session()->getFlashdata('message'))): ?>
                <div class="alert alert-info">
                    <?= session()->getFlashdata('message');?>
                </div>
                <?php endif; ?>

                <?php if(!empty(session()->getFlashdata('invalid'))): ?>
                <div class="alert alert-warning">
                    <?= session()->getFlashdata('invalid');?>
                </div>
                <?php endif; ?>

                <?php if(!empty(session()->getFlashdata('wrong'))): ?>
                <div class="alert alert-danger">
                    <?= session()->getFlashdata('wrong');?>
                </div>
                <?php endif; ?>
                <form action="<?= base_url('signin'); ?>" method="post">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input required autocomplete="off" type="email" name="email" id="email" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input required autocomplete="off" type="password" name="password" id="password" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        <label for="" class="text-center">No have account? <a href="<?= site_url('regist');?> " >Registration Here</a></label>
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