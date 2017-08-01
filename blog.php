<?php
$pageTitle ='All Blogs';
 include 'inc/header.php';
 	$postid = isset($_GET['postid']) && is_numeric($_GET['postid']) ? intval($_GET['postid']) : 0;
// Select All Data Depend On This ID
	$stmt = $conn->prepare("SELECT * FROM posts WHERE post_id = ?	");
	// Execute Query
	$stmt->execute(array($postid));
	$count = $stmt->rowCount();

	if ($count > 0) {
	// Fetch The Data
	$post = $stmt->fetch();
?>
        <div class="article">
                <h2><span><?php echo $post['post_title']; ?></span> <?php echo $post['post_slogn']; ?></h2>
                <div class="clr"></div>
                <p>Posted by <a href="#">Admin</a> <span>&nbsp;&bull;&nbsp;</span> Filed under <a href="#">templates</a>, <a href="#">internet</a></p>
                <p><?php echo $post['post_body']; ?> </p>
                <p>Tagged: <a href="#">orci</a>, <a href="#">lectus</a>, <a href="#">varius</a>, <a href="#">turpis</a></p>
                <p><a href="#"><strong>Comments (3)</strong></a> <span>&nbsp;&bull;&nbsp;</span> May 27, 2010 <span>&nbsp;&bull;&nbsp;</span> <a href="#"><strong>Edit</strong></a></p>
         </div>
         <?php }?>
         </div>
      <?php include'inc/sidebar.php'; ?>
      <div class="clr"></div>
    </div>
  </div>
<?php include 'inc/footer.php'; ?>

