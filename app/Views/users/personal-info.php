<?php
include ('../public/layout/header.php');
?>
<div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
             <div class="post-preview">
              <h3>USER INFORMATION</h3>
              <p>Username: <font color="blue" size=3><?php echo $User['username']?></font></p>
              <h3>THE ARTICLES WERE POSTED:</h3>
            </div>
              <?php 
              if(isset($err)){
                echo "<p><font color='blue' size=4>$err</font></p>";
              }
              else{
                foreach ($data as $dt) {
                  $id=$dt['id'];
                  $title=$dt['title'];
                  $description=$dt['description'];
                  $detail_post=$dt['detail_post'];
                  $date_create=$dt['date_create'];
                  $id_users=$dt['id_users'];
                  $username=$dt['username'];

              ?>
              <div class="post-preview">
              <h4 class="post-title">
                <a href="/posts/detail/<?php echo $id ?>"><font face = Arial, size = 5><?php echo $title ?></font></a>
              </h4>
              <p class="post-meta"><font face = Arial, size = 3>Posted by
              <a href="#"><?php echo $username ?></a>
              on <?php echo $date_create ?></font></p>
              <form action="/posts/delete_post/<?php echo $id ?>" method="post">
                <input type="submit" name='delete' onClick="return confirm('Delete this post?')" value='Delete'>
              </form><br>
              <form action="/posts/edit_post/<?php echo $id ?>" method="post">
                <input type="submit" name='edit' value='Edit'>
              </form>
          </div>
          <hr>
            <?php 
                }
              }
            ?>
          <!-- Pager -->
          
        </div>
      </div>
    </div>

    <hr>
<?php
include('../public/layout/footer.php');
?>