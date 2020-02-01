<?php
$active='';
include("includes/header.php");
 ?>

<div id="content">
  <div class="container">
    <div class="col-md-12">

      <ul class="breadcrumb">
        <li>
          <a href="index.php"> Home </a>
        </li>
        <li>
          My Account
        </li>
      </ul>
    </div>

    <div class="col-md-3">
      <?php
      include("includes/sidebar.php")
      ?>

    </div>

  </div>
</div>

</div><!-- col-md-3 Finish -->

      <div class="col-md-9"><!-- col-md-9 Begin -->

          <div class="box"><!-- box Begin -->

              <?php

              if (isset($_GET['my_orders'])){
                  include("my_orders.php");
              }

              ?>

              <?php

              if (isset($_GET['edit_account'])){
                  include("edit_account.php");
              }

              ?>
              <?php

              if (isset($_GET['change_pass'])){
                  include("change_pass.php");
              }

              ?>

              <?php

              if (isset($_GET['delete_account'])){
                  include("delete_account.php");
              }

              ?>

              <?php

              if (isset($_GET['log_out'])){
                  include("logout.php");
              }

              ?>
          </div><!-- box Finish -->

      </div><!-- col-md-9 Finish -->

  </div><!-- container Finish -->
</div><!-- #content Finish -->

       <?php
       include("includes/footer.php")
       ?>

    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>


    </body>
    </html>
