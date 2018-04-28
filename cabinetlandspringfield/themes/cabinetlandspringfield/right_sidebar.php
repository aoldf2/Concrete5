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
		<div class="row">
			<div class="col-md-12">
				<?php
					$a = new Area('Top Content');
					$a->display($c);
				?>
			</div>
		</div>
	    <div class="row">
	        <div class="col-md-9">
	        	<?php
	        		$a = new Area('Main Content');
	        		$a->display($c);
	    		?>
			</div>
			<div class="col-md-3">
	            <?php
					$a = new Area('Right Content');
					$a->display($c);
				?>
	        </div>
	    </div>
	    <div class="row">
	    	<div class="col-md-12">
	    		<?php
	    			$a = new Area('Bottom Content');
	    			$a->display($c);
	    		?>
	    	</div>
	    </div>
	</div>
 </div>

 <?php $this->inc('elements/footer.php'); ?>