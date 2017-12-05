<?php
include ('../public/layout/header.php');
?>

<form action="" method="post" id='myForm' >
  <div class="imgcontainer">
    <img src="../../img/img_avatar2.png" alt="Avatar" class="avatar">
  </div>
  <?php 
    if(isset($error)){
  ?>
  <p class="alignCenter"><?php echo $error ?></p>
  <?php
    }
  ?>
  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id='confirmpwd' required>
    <label><b>Confirm Password</b></label>
    <input type="password" placeholder="Confirm Password" name="confirmpassword"  required>

    <button type="submit" name='submit'>Register</button>
  </div>
</form>
<script type="text/javascript">
      $(document).ready(function() {
        $("#myForm").validate({
            rules: {
                username: "required",
                password: "required",
                confirmpassword: {
                equalTo: "#confirmpwd",
                }
            },
            messages: {
                username: "Username is empty",
                password: "Password is empty",
                confirmpassword:"Password is empty",
            }
        });
    });
</script>
<?php
include('../public/layout/footer.php');
?>