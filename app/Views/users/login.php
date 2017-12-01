<?php
include ('../public/layout/header.php');
?>
<form action="" method="post">
  <div class="imgcontainer">
    <img src="../../img/img_avatar2.png" alt="Avatar" class="avatar">
  </div>
  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit" name='submit'>Login</button>
  </div>
</form>
<?php
include('../public/layout/footer.php');
?>