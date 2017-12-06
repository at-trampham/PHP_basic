<?php
include('../public/layout/header.php'); 
?>
<div class="container">
  <form action="" method="post" id="myForm" onsubmit="return validateForm()">
    <div class="imgcontainer">
    <img src="../../img/img_avatar2.png" alt="Avatar" class="avatar">
    </div>
    <div class="form-group">
      <label for="usr">Title:</label>
      <input type="text" class="form-control" name='title' id="usr">
    </div>
    <div class="form-group">
      <label for="pwd">Description:</label> 
      <input type="text" class="form-control" name='description' id="pwd" >
    </div>
    <div class="form-group">
      <label for="pwd">Detail Post:</label>
      <textarea cols="137" rows="7" name='detail' id="detail"></textarea>
    </div>
    <div class="form-group">
     <button type="submit" name='submit'>Submit</button>
    </div>
  </form>
</div>
<script>
function validateForm() {
    var title = document.forms["myForm"]["usr"].value;
    var description = document.forms["myForm"]["pwd"].value;
    var detail = document.forms["myForm"]["detail"].value;
    if (title == "") {
        alert("Title must be filled out");
        return false;
    }
    if (description == "") {
        alert("Description must be filled out");
        return false;
    }
    if (detail == "") {
        alert("Detail must be filled out");
        return false;
    }
    return true;
}
</script>
<?php 
include('../public/layout/footer.php');
?>