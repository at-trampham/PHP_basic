<?php
include ('../public/layout/header.php');
?>
<article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <h3><?php echo $detail_post['title'] ?></h3>
            <p><?php echo $detail_post['detail_post'] ?></p>
          </div>
        </div>
      </div>
    </article>

    <hr>
<?php
include('../public/layout/footer.php');
?>