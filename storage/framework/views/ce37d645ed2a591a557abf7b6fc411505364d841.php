<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title><?php echo $__env->yieldContent('title'); ?></title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
      <!-- style css -->
      <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
      <!-- Responsive-->
      <link rel="stylesheet" href="<?php echo e(asset('css/responsive.css')); ?>">
      <!-- fevicon -->
      <link rel="icon" href="<?php echo e(asset('images/fevicon.png')); ?>" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="<?php echo e(asset('css/jquery.mCustomScrollbar.min.css')); ?>">
      <!-- Tweaks for older IEs-->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="<?php echo $__env->yieldContent('body-class'); ?>">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="<?php echo e(asset('images/loading.gif')); ?>" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo"> <a href="<?php echo e(url('/')); ?>"><img src="images/logo.png" alt="#"></a> </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <div class="menu-area">
                        <div class="limit-box">
                           <nav class="main-menu">
                              <ul class="menu-area-main">
                                 <li> <a href="<?php echo e(url('/')); ?>">Home</a> </li>
                                 <li> <a href="<?php echo e(url('about')); ?>">About us</a> </li>
                                 <li><a href="<?php echo e(url('books')); ?>">Our Books</a></li>
                                 <li><a href="<?php echo e(url('library')); ?>">library</a></li>
                                 <li><a href="<?php echo e(url('contact')); ?>">Contact us</a></li>
                                 <li> <a href="#"><img src="<?php echo e(asset('images/search_icon.png')); ?>" alt="#" /></a> </li>

                                 <li>
                                    <a href="#"  onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><img src="<?php echo e(asset('images/top-icon.png')); ?>" alt="Login" title="Login" /></a>

                                    <div id="id01" class="modal">

                                      <form class="modal-content animate" action="/action_page.php" method="post">
                                        <div class="imgcontainer">
                                          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Login">&times;</span>
                                          <img src="<?php echo e(asset('images/avata-login.jpg')); ?>" alt="Avatar" class="avatar">
                                        </div>
                                        <br>
                                        <div class="container">
                                            <div class="form-group ">
                                                <input type="text" class="form-control border-primary " placeholder="Enter Username" name="uname" required>
                                                <br>

                                                <input type="password" class="form-control border-primary " placeholder="Enter Password" name="psw" required>
                                                <br>
                                                <button type="submit" class="btn btn-primary ">Login</button>
                                                <label style="padding-left: 10px">
                                                  <input type="checkbox" checked="checked" name="remember"> Remember me
                                                </label>
                                            </div>

                                        </div>

                                        <div class="container" style="background-color:#f1f1f1">
                                            <span class="psw"><a href="<?php echo e(url('register')); ?>">Register now</a></span>
                                            <span class="psw"><a href="#">Forgot password?</a></span>
                                        </div>
                                      </form>
                                    </div>
                                 </li>
                                 <li><a href="#" title="My-cart"><i class="fa fa-shopping-cart"></i></a></li>
                                 <li></li>
                                </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- end header inner -->
      </header>

      <?php echo $__env->yieldContent('main'); ?>
      <footer>
        <div class="footer">
           <div class="container">
              <div class="row pdn-top-30">
                 <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="Follow">
                       <h3>Follow Us</h3>
                    </div>
                    <ul class="location_icon">
                       <li> <a href="#"><img src="icon/facebook.png"></a></li>
                       <li> <a href="#"><img src="icon/Twitter.png"></a></li>
                       <li> <a href="#"><img src="icon/linkedin.png"></a></li>
                       <li> <a href="#"><img src="icon/instagram.png"></a></li>
                    </ul>
                 </div>
                 <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                    <div class="Follow">
                       <h3>Newsletter</h3>
                    </div>
                    <input class="Newsletter" placeholder="Enter your email" type="Enter your email">
                    <button class="Subscribe">Subscribe</button>
                 </div>
              </div>
           </div>
        </div>
        <div class="copyright">
           <div class="container">
              <p>Copyright 2019 All Right Reserved By <a href="https://html.design/">Free html Templates</a></p>
           </div>
        </div>
     </footer>
     <!-- end footer -->
     <!-- Javascript files-->
     <?php if(Session::has('login')): ?>
        <script>
            document.getElementById('id01').style.display="block";
        </script>
     <?php endif; ?>
     <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
     <script src="<?php echo e(asset('js/popper.min.js')); ?>"></script>
     <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
     <script src="<?php echo e(asset('js/jquery-3.0.0.min.js')); ?>"></script>
     <script src="<?php echo e(asset('js/plugin.js')); ?>"></script>
     <!-- sidebar -->
     <script src="<?php echo e(asset('js/jquery.mCustomScrollbar.concat.min.js')); ?>"></script>
     <script src="<?php echo e(asset('js/custom.js')); ?>"></script>
  </body>
</html>
<?php /**PATH D:\FPT\session2\Project\LibraryManagement\resources\views/layout/appIndex.blade.php ENDPATH**/ ?>