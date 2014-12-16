<?php require_once 'header.php';?>

<div class="container">
<h3>Data has been successfully inserted.</h3>

<p><?php 
$attrib = array(
		'class' => 'btn btn-default btn-lg'
);
echo anchor('domain', 'Try it again!', $attrib);?>
<br>
<br>
<?php 
$attrib2 = array(
		'class' => 'btn btn-info btn-lg'
);
echo anchor('domain/domainlist', 'View registered domains!', $attrib2)?>
</p>
</div>

<?php require_once 'footer.php';?>