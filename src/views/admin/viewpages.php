
<html><?php include "templates/include/header.php";?>
<div class="row">
<div class="col-3">
<a href="/dashboard">dashboard</a>
<a href="/newpage">new page</a>
<a href="/newpost">new post</a>
<a href="/viewpages">all pages</a>
<a href="/viewposts">all posts</a>
<a href="/media">media</a>
<a href="/templates">templates</a>
</div>
<div class =" col-9">
<?php echo $lists;?></div>
</div>
<div class="footer"><?php include "templates/include/footer.php";?></div>
</body>
</html>