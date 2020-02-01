<h1 align="center"> Change Password </h1>

<form action="" method="post">
  <div class="form-group">
    <label> Old Password: </label>
    <input type="text" name="old_password" class="form-control" required>
  </div>

  <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label> New Password: </label>
      <input type="text" name="new_password" class="form-control" required>
    </div>

    <form action="" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label> Confirm New Password: </label>
        <input type="text" name="conf_new_password" class="form-control" required>
      </div>


      <div class="text-center">
        <button type="submit" name="Submit" class="btn btn-primary">
          <i class="fa fa-user-md"> </i> Update Now
        </button>
      </div>
    </form>
