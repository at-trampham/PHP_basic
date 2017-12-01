<?php
include '../public/layout/header.php'; 
?>
 <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <?php 
              foreach ($post_data as $data) {
                $id=$data['id'];
                $title=$data['title'];
                $description=$data['description'];
                $detail_post=$data['detail_post'];
                $date_create=$data['date_create'];
                $id_users=$data['id_users'];
                $username=$data['username'];

          ?>
          <div class="post-preview">
            <a href="">
              <h2 class="post-title">
                <a href="/posts/detail/<?php echo $id ?>"><font face = Arial, size = 5><?php echo $title ?></font></a>
              </h2>
              <h3 class="post-subtitle">
               <font face = Arial, size = 3><?php echo $description ?></font>
              </h3>
            </a>
            <p class="post-meta"><font face = Arial, size = 3>Posted by
              <a href="#"><?php echo $username ?></a>
              on <?php echo $date_create ?></font></p>
          </div>
          <hr>
          <?php 
            }
          ?>
          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
          </div>
        </div>
      </div>
    </div>

    <hr>
    <?php
    include ('../public/layout/footer.php');
    ?>
