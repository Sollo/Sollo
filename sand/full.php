<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>

<div id="body">

	<div id="main-container">
		<div id="main" class="wrapper clearfix">

			<article style="margin-left:10%">
				<?php $a = new Area('Main'); $a->display($c); ?>
			</article>

		</div> <!-- #main -->
	</div> <!-- #main-container -->
	<div class="splash-bottom"></div>
</div>

<div class="clearfloat"></div>

<?php  $this->inc('elements/footer.php'); ?>