<!doctype html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js <?php echo @$html_class; ?>" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js <?php echo @$html_class; ?>" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js <?php echo @$html_class; ?>" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js <?php echo @$html_class; ?>" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js <?php echo @$html_class; ?>" lang="en"><!--<![endif]-->

<head>
    <?php echo $this->renderLayout('common/head.php'); ?>
</head>

<body id="<?php echo @$bodyid ;?>">
	<!-- PAGE -->
	<div id="page">
		 <tmpl type="system.messages" />
    
          <tmpl type="view" />
		<!--/FOOTER -->
	</div>
	<!--/PAGE -->
	
<?php echo $this->renderLayout('common/footer.php'); ?>
</body>
</html>

