<footer id="footer">
	<div class="footer-columns center-wrap cf">
		<div class="column col-1">
			<h4 class="bold">Connect</h4>
			<!-- Begin Social Media Icons -->
			<?php			$socials = get_field('socials', 'option');			if(!empty($socials)){			?>
			<ul class="socials">				<?php foreach($socials as $soc){?>
				<li><a href="<?php echo $soc['link'];?>"><img src="<?php echo $soc['icon'];?>" height="40" width="40" alt=""></a></li>
				<?php } ?>
			</ul>
			<?php } ?>
			<!-- End Social Media Icons -->

				<?php if( have_rows('footer_logos') ): ?>
				<ul class="footer_logos">
					<?php while( have_rows('footer_logos') ): the_row();
					$image = get_sub_field('logo_image');
					$link = get_sub_field('logo_url');
				?>
				<li class="logo">
					<img src="<?php echo $image; ?>" alt=""/>
				</li>	
	<?php endwhile; ?>
<?php endif; ?>

</ul>

			<!-- ENd Footer Logos -->
			</div>
			<div class="column col-2">
				<h4><?php the_field('text_above_donate', 'option'); ?></h4>
			<a href="<?php the_field('donate_link', 'option'); ?>" class="btn-red"><?php the_field('donate_button_text', 'option'); ?></a>
			</div>
			<div class="column col-3">
				<h4><?php the_field('text_above_join', 'option'); ?></h4>
				<a href="<?php the_field('join_wfn', 'option'); ?>" class="btn-red"><?php the_field('join_button_text', 'option'); ?></a>
			</div>
		</div>
	<div class="footer-bottom">
		<div class="center-wrap cf">
			<a href="http://elefintdesigns.com" target="_blank" class="link-designed"><img src="<?php echo TDU; ?>/images/elefint-logo.png" alt="elefintdesigns"></a>
		</div>
	</div>
</footer>