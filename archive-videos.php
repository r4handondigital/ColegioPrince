 <?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_header();
?>

      <section class="sessao-interna">
			<div class="container">
				<div class="row">
					<div class="col s12">
						<h1 class="titulos">vídeos</h1>

						<div class="row">
							
			          			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

								<div class="col s12 m4">
									<a href="<?php the_permalink(); ?>"><img src="<?php the_field('imagem_do_video'); ?>" class="responsive-img">
									<h4 class="not-mais"><span><?php echo get_the_date('d'); ?> de <?php echo get_the_date('F'); ?></span><?php echo strip_tags(get_the_title()); ?></h4>	</a>
								</div>
								<?php endwhile; endif; ?> 
				         	<?php wp_reset_query(); ?>

						</div><!--.row-->  

						<div class="row">
							<div class="col s12">
								<div class="navigation">
								    <?php if (function_exists('pagination_funtion')) pagination_funtion(); ?>
								</div>  
							</div>
						</div>

				
					</div>
				</div>
			</div>
		</section>

 <?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_footer();
?>