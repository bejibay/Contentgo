<html>
<head>
<meta  name="description" content="<?php echo $results['article']->description;?>">
<meta  name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $results['article']->title;?></title>
</head>
<body>
<div class="header"><?php include "templates/include/header.php";?></div>
<div class="row">
<div class="column leftside">
<div>
 <?php echo $result['article']->content;?>
</div>
<div><script src="loadcomments.js">
</script>
<div><?php include "postcommentsform.php";?></div>
</div>
</div class="column rightside">put this column content here</div>
</div>

