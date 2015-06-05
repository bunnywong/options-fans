
	<?php do_action('bunyad_post_main_content'); ?>




<?php if (is_active_sidebar('home-body-in-middle')): ?>
	<div class="row widget-body-middle hidden">
		<ul class="widgets row cf">
			<?php dynamic_sidebar('home-body-in-middle'); ?>
		</ul>
	</div>
	<script>
		jQuery('.widget-body-middle')
			.insertAfter('.home .highlights-box').eq(0)
			.removeClass('hidden');
	</script>
<?php endif; ?>


<?php if (is_active_sidebar('home-body-in-bottom')): ?>
	<div class="row widget-body-bottom hidden">
		<ul class="widgets row cf">
			<?php dynamic_sidebar('home-body-in-bottom'); ?>
		</ul>
	</div>
	<script>
		jQuery('.widget-body-bottom')
			.insertAfter('.home .news-focus')
			.removeClass('hidden');
	</script>
<?php endif; ?>


<style>.hidden {display: none!important;}</style>




	<footer class="main-footer">

	<?php if (!Bunyad::options()->disable_footer): ?>
		<div class="wrap">

		<?php if (is_active_sidebar('main-footer')): ?>
			<ul class="widgets row cf">
				<?php dynamic_sidebar('main-footer'); ?>
			</ul>
		<?php endif; ?>

		</div>

	<?php endif; ?>


	<?php if (!Bunyad::options()->disable_lower_footer): ?>
		<div class="lower-foot">
			<div class="wrap">

			<?php if (is_active_sidebar('lower-footer')): ?>

			<div class="widgets">
				<?php dynamic_sidebar('lower-footer'); ?>
			</div>

			<?php endif; ?>

			</div>
		</div>
	<?php endif; ?>

	</footer>

</div> <!-- .main-wrap -->

<?php wp_footer(); ?>
</body>
</html>