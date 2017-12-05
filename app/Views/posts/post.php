<?php
include('../public/layout/header.php'); 
?>
<div class="container">
  <form action="" method="post" id="myForm" >
    <div class="imgcontainer">
    <img src="../../img/img_avatar2.png" alt="Avatar" class="avatar">
    </div>
    <div class="form-group">
      <label for="usr">Title:</label>
      <input type="text" class="form-control" name='title' id="usr" required>
    </div>
    <div class="form-group">
      <label for="pwd">Description:</label> 
      <input type="text" class="form-control" name='description' id="pwd" required>
    </div>
    <div class="form-group">
      <label for="pwd">Detail Post:</label>
      <textarea cols="137" rows="7" name='detail' required></textarea>
    </div>
    <div class="form-group">
     <button type="submit" name='submit'>Submit</button>
    </div>
  </form>
</div>
<script type="text/javascript">
      $(document).ready(function() {
        $("#myForm").validate({
            rules: {
                title: "required",
                description: "required",
                detail: "required",
            },
            messages: {
                title: "Title is empty",
                description: "Description is empty",
                detail:"Detail is empty",
            }
        });
    });
</script>
<?php 
include('../public/layout/footer.php');
?>