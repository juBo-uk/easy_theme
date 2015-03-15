<?php
/**
 * Custom Index CSS
 *
 */
$etmod = elgg_get_plugin_setting('etmod','easytheme');
?>

/*******************************
	Custom Index
********************************/

.custom-index {
	padding: 20px;
        padding-top: 10px;
}



.elgg-module-featured {
	border: 1px solid <?php echo $etmod; ?>;	
}

.elgg-module-featured  .elgg-head {
	padding: 5px;
	background-color: <?php echo $etmod; ?>;
}

.custom-index .elgg-content {
	width: 400px;

}

.et-module-message {	
	border: 1px solid <?php echo $etmod; ?>;
	padding: 15px;
	margin-bottom: 20px;
	min-height: 260px;
        height: auto !important; 
        height: 260px;
	-webkit-border-radius: 6px;
	-moz-border-radius: 6px;
	border-radius: 6px;
	
}

.et-module-message h3{
	margin-bottom: 15px;
}

.et-module-message h2{
	margin-bottom: 12px;
}

.custom-index .elgg-gallery{
	margin-top: 10px;
	margin-left: 8px;

}


.custom-index .elgg-form {
	padding-top: 30px;
	padding-left: 30px;
	width: 300px;
}

.elgg-module-featured > .elgg-body{
        padding: 0px;
        padding-bottom: 10px;       
       
}

.elgg-module-featured > .elgg-body h3{
	color: #fff;	
	}

.elgg-module-featured > .elgg-body h2 {
	padding: 10px;
	padding-bottom: 0px;
}

.custom-index .elgg-list {
	padding: 10px;
}
