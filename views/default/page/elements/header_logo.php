<?php
/**
 * Elgg header logo
 */

$site = elgg_get_site_entity();
$site_name = $site->name;
$site_url = elgg_get_site_url();

?>



<!-- LOGO HERE? -->
<!-- eg: 

<a href="http://yoursite.com/">

<img border="0" src="http://www.yoursite.com/mod/easytheme/graphics/logo.gif" /></a> 

-->


<h1>
	<a class="elgg-heading-site" href="<?php echo $site_url; ?>">
		<?php echo $site_name; ?>
	</a>
</h1>







