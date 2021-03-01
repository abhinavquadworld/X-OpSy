<?php require_once 'app/init.php'; ?>

<?php echo View::make('header')->render() ?>
    
<div class="row">
	<div class="col-md-8">
		<h3 class="page-header">Comments</h3>

		<p>This page shows the comments feature. You can only post comments or leave replies if you are logged in. You can sort the comments by post date, edit or trash them if you have the permission.</p>

		<p>The comments also support <a href="https://unicode.org/emoji/charts/full-emoji-list.html">emoji</a>, link detection and some HTML tags. You also have the option to block users or restrict words. To change any of these (and many more) options edit <code>app/config/comments.php</code>.</p>
		
		<?php echo ajax_comments('1', 'My page'); ?>

		<!-- Embeded version with iframe -->
		<!--
		<div id="embed_comments"></div>
		<script src="<?php echo asset_url('js/embed-comments.js') ?>"></script>
		<script> embedComments('#embed_comments', '1', 'My Page'); </script>
		-->
	</div>
</div>

<?php echo View::make('footer')->render() ?>
