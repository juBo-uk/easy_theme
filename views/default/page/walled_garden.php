<?php
/**
 * Walled garden page shell
 *
 * Used for the walled garden index page
 */

// Set the content type
header("Content-type: text/html; charset=UTF-8");
$site = elgg_get_site_entity();
$title = $site->name;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php echo elgg_view('page/elements/head', $vars); ?>
</head>
<body>
<div style="background-color: #fff; height: 600px; border-bottom: 10px solid #ccc;">
<div class="elgg-page elgg-page-walledgarden">

	<div class="elgg-page-messages">
		<?php echo elgg_view('page/elements/messages', array('object' => $vars['sysmessages'])); ?>
	</div>




	
<br/><br/>



	<div class="elgg-body-walledgarden">
		<?php echo $vars['body']; ?>
	</div>
</div>
<?php echo elgg_view('page/elements/foot'); ?>
</div>
</body>
</html>
