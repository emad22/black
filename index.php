<?php include 'inc/header.php'; ?>

<?php 
/*  $query = $conn->prepare("SELECT * FROM posts");
  $query->execute();
  $posts = $query->fetchall();
  */
  $posts= getLatest('*','posts','post_id');
?>
        <?php foreach($posts as $post) {?>
        <div class="article">
          <h2><span><?php echo $post['post_title']; ?></span> <?php echo $post['post_slogn']; ?></h2>
          <p class="infopost">Posted on <span class="date"><?php echo $post['post_date'];  ?></span> by <a href="#">Admin</a> &nbsp;&nbsp;|&nbsp;&nbsp; Filed under <a href="#">templates</a>, <a href="#">internet</a> <a href="#" class="com">Comments <span>11</span></a></p>
          <div class="clr"></div>
          <div class="img"><img src="uploads/'.$item['Image'].?>" width="177" height="213" alt="" class="fl" /></div>
          <div class="post_content">
            <p>
              <?php echo $post['post_body']; ?>
            </p>
            <p class="spec"><a href="blog.php?postid=<?php echo $post['post_id'];?>" class="rm">Read more &raquo;</a></p>
          </div>
          <div class="clr"></div>
        </div>
        <?php } ?>
        <p class="pages"><small>Page 1 of 2</small> <span>1</span> <a href="#">2</a> <a href="#">&raquo;</a></p>
      </div>
      <?php include'inc/sidebar.php'; ?>
      <div class="clr"></div>
    </div>
  </div>
<?php include 'inc/footer.php'; ?>
