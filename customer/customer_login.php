<div class="box">
  <div class="box-header">
    <center>
      <h1> Login </h1>
      <p class="lead"> Already have an Account?</p>
      <p class="text-muted"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
      </center>
    </div>

    <form method="post" action="checkout.php" >
      <div class="form-group">
        <label> Email </label>
        <input name="c_email" type="text" class="form-control" required>
      </div>

      <div class="form-group">
        <label> Passsword </label>
        <input name="c_pass" type="password" class="form-control" required>
      </div>
      <div class="text-center">
        <button name="login" value="login" class="btn btn-primary">
          <i class="fa fa-sign-in"> </i> Login
        </button>
      </div>
    </form>

    <center>
      <a href="customer_register.php">
        <h3> Don't have an account? Register Here </h3>
      </a>

    </center>

  </div>
  <?php
  if(isset($_POST['login'])){
    $customer_email = $_POST ['c_email'];
    $customer_pass = $_POST['c_pass'];
    $select_customer = "select * from customers where customer_email='$customer_email' AND customer_pass='$customer_pass'";
    $run_customer = mysqli_query($con,$select_customer);
    $get_ip = getRealIpUser();
    $check_customer = mysqli_num_rows($run_customer);
    $select_cart = "select * from cart ip_add='$get_ip'";
    $run_cart = mysqli_query($con,$select_cart);
    $check_cart = mysqli_num_rows($run_cart);
    if($check_customer==0){
      echo "<script>alert('Your email or password is incorrect') </script>";
      exit();
    }
    if($check_customer==1 AND $check_cart==0){
      $_SESSION['customer_email'] = $customer_email;
      echo "<script>alert('You are logged in') </script>";
      echo "<script>window.open('customer/my_account.php?my_orders','_self') </script>";
    }else{
      $_SESSION['customer_email'] = $customer_email;
      echo "<script>alert('You are logged in') </script>";
      echo "<script>window.open('checkout.php','_self') </script>";
    }
  }
  ?>
