<?php $__env->startSection('title','Contact'); ?>
<?php $__env->startSection('body-class','contact-page'); ?>
<?php $__env->startSection('main'); ?>
<div class="about-bg">
    <div class="container">
       <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
             <div class="abouttitle">
                <h2>Contact Us</h2>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- Contact -->
 <div class="Contact">
    <div class="container">
       <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
             <form>
                <div class="row">
                   <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                      <input class="form-control" placeholder="Name" name="name" type="text">
                   </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                      <input class="form-control" placeholder="Email" name="email" type="Email">
                   </div>
                   <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                      <input class="form-control" placeholder="Phone Number" name="phone_nu" type="text">
                   </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                      <input class="form-control" placeholder="Subject" name="subject" type="text">
                   </div>
                   <div class="col-sm-12">
                      <textarea class="textarea" name="message" placeholder="Message">Message</textarea>
                   </div>
                </div>
             </form>
          </div>
          <button class="send-btn">Send</button>
       </div>
    </div>
 </div>
 <!-- end Contact -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.appIndex', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FPT\session2\Project\LibraryManagement\resources\views/user/contact.blade.php ENDPATH**/ ?>