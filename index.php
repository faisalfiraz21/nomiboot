<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header.php'; ?>
</head>

<body id="bg-primary">

    <?php include 'menu.php';?>

    <?php include 'menu_list.php';?>
  <br>
    <?php include 'about.php' ?>

  <section class="bg-dark">
    <div class="container">

    </div>
  </section>

     <?php include'contact.php' ?>

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="email">Your Name</label>
              <input type="text" class="form-control" id="email" placeholder="Enter Name" style="height:45px;">
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email" style="height:45px;">
            </div>
            <div class="form-group">
              <label for="email">Comment</label>
              <textarea class="textarea" style="
              height: 100px;
              width: 500px;
              "></textarea>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
  <div id="modal11" class="modal fade">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h2 class="modal-title">Hover effect 11</h2>
        </div>
        <div class="modal-body">
          <p>Detail Nomi Delight</p>
          <pre> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </pre>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>  

  </body>
  <!-- 
    <script src="js/jquery.min.js"></script>
    <script src="owl-carousel/owl.carousel.js"></script>
    <script src="js/site.js"></script> -->

  <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>

    <!-- Demo -->
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>

    <script src="assets/js/google-code-prettify/prettify.js"></script>
    <script src="assets/js/application.js"></script>     

        <!-- jQuery -->
    <script src="dist/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <!-- <script src="dist/js/rbootstrap.min.js"></script>  -->
    <script src="dist/js/production.min.js"></script>


</html>
