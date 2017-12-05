<?php
include('../public/layout/header.php'); 
?>
<div class="container">
  <?php 
      $id=$data_post['id'];
      $title=$data_post['title'];
      $description=$data_post['description'];
      $detail_post=$data_post['detail_post'];
  ?>
  <form action="/posts/edit/<?php echo $id ?>" method="post" id='myForm' >
    <div class="imgcontainer">
    <img src="../../img/img_avatar2.png" alt="Avatar" class="avatar">
    </div>
    <div class="form-group">
      <label for="usr">Title:</label>
      <input type="text" class="form-control" name='title' id="usr" value="<?php echo $title ?>" required>
    </div>
    <div class="form-group">
      <label for="pwd">Description:</label>
      <input type="text" class="form-control" name='description' id="pwd" value="<?php echo $description ?>" required>
    </div>
    <div class="form-group">
      <label for="pwd">Detail Post:</label>
      <textarea cols="137" rows="7" name='detail' required ><?php echo $detail_post ?></textarea>
    </div>
    <div class="form-group">
     <button type="submit" name='submit'>Edit</button>
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