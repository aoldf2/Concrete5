<?php     defined('C5_EXECUTE') or die("Access Denied.");
	
$c = Page::getCurrentPage();

if($c instanceof Page) {
	$cID = $c->getCollectionID();
}

$files = $controller->getFileSet();
?>	


<?php   if ($displaySetTitle && $filesetname = $controller->getFileSetName()) { ?>
<h3><?php   echo $filesetname; ?></h3>
<?php   } ?>
	
<?php   if (!empty($files)) { ?>
			<div id="awards-block-slider" class="owl-carousel owl-theme">
				<?php
				foreach($files as $f) {
					$fv = $f->getApprovedVersion();
				?>
					<div class="item">
                        <div class="awards-logo">
                        	<a href="<?php echo $fv->getDescription(); ?>" target="_blank">
                        		<img src="<?php echo $fv->getRelativePath(); ?>" alt="<?php echo $fv->getTitle(); ?>" />
                    		</a>
                        </div>
                    </div>

			<?php   }	?>
			</div>
<?php   }	?>

<?php   if (empty($files) && $noFilesMessage) { ?>
<p><?php   echo $noFilesMessage; ?></p>
<?php   } ?>
</script>