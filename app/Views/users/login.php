<?php
include ('../public/layout/header.php');
?>
<form action="" method="post" id='myForm' onsubmit="return validateForm()">
  <div class="imgcontainer">
    <img src="../../img/img_avatar2.png" alt="Avatar" class="avatar">
  </div>
  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" id="username">

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password">

    <button type="submit" name='submit'>Login</button>
  </div>
</form>
<script>
function validateForm() {
    var username = document.forms["myForm"]["username"].value;
    var password = document.forms["myForm"]["password"].value;
    if (username == "") {
        alert("Username must be filled out");
        return false;
    }
    if (password == "") {
        alert("Password must be filled out");
        return false;
    }
    return true;
}
</script>
<?php
include('../public/layout/footer.php');
?>