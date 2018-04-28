<?php 
	defined("C5_EXECUTE") or die(_("Access Denied")); 
	$this->inc('elements/header.php');
?>

<div class="page-title">
	<div class="title-box">
		<?php $page = Page::getCurrentPage(); ?>
		<h1><?php echo $page->getCollectionName(); ?></h1>
	</div>
</div>

<div class="basic-block">
	<div class="container">
		<div class="col-sm-12">
			<?php print $innerContent; ?>
		</div>
	</div>
 </div>

 <?php $this->inc('elements/footer.php'); ?>