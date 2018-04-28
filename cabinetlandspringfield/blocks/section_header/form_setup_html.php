<?php 
	defined('C5_EXECUTE') or die(_("Access Denied."));
	$form = Loader::helper('form');
?>

<p><strong>Heading</strong></p>
<?php
	echo $form->text('heading', $heading);
?>