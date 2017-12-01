<?php
include('../public/layout/header.php'); 
?>
<div class="container">
  <form action="" method="post" >
    <div class="imgcontainer">
    <img src="../../img/img_avatar2.png" alt="Avatar" class="avatar">
    </div>
    <div class="form-group">
      <label for="usr">Title:</label>
      <input type="text" class="form-control" name='title' id="usr">
    </div>
    <div class="form-group">
      <label for="pwd">Description:</label>
      <input type="text" class="form-control" name='description' id="pwd">
    </div>
    <div class="form-group">
      <label for="pwd">Detail Post:</label>
      <textarea cols="137" rows="7" name='detail' ></textarea>
    </div>
    <div class="form-group">
     <button type="submit" name='submit'>Submit</button>
    </div>
  </form>
</div>
<?php 
include('../public/layout/footer.php');
?>