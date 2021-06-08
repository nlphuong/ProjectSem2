<?php $__env->startSection('title','Books'); ?>
<?php $__env->startSection('body-class','Books-bg'); ?>
<?php $__env->startSection('main'); ?>
<div class="about-bg">
    <div class="container">
       <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
             <div class="abouttitle">
                <h2>Our Books</h2>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!--Books -->
 <div class="Books">
    <div class="container">
       <div class="row">
          <div class="col-md-10 offset-md-1">
             <div class="titlepage">
                <span>adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</span>
             </div>
          </div>
       </div>
       <div class="row box">
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
             <div class="book-box">
                <figure><img src="images/book-1.jpg" alt="img"/></figure>
             </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
             <div class="book-box">
                <figure><img src="images/book-2.jpg" alt="img"/></figure>
             </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
             <div class="book-box">
                <figure><img src="images/book-1.jpg" alt="img"/></figure>
             </div>
          </div>
          <div class="col-md-6 offset-md-3">
             <p>magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris</p>
          </div>
       </div>
       <div class="container">
          <div class="row">
             <div class="col-md-12">
                <div class="read-more">
                   <a href="#">Read More</a>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- end Books -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.appIndex', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FPT\session2\Project\LibraryManagement\resources\views/user/books.blade.php ENDPATH**/ ?>