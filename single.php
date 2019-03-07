 <?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_header();
?>

      <section class="sessao-interna">
			<div class="container">
				<div class="row">
					<div class="col s12">
						<h1 class="titulos">Notícias</h1>

						<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
							<h4 class="not-mais"><span><?php echo get_the_date('d'); ?> de <?php echo get_the_date('F'); ?></span><?php echo strip_tags(get_the_title()); ?></h4>
							<div class="texto">

								 <?php the_content(); ?> 



								
							</div>

							 <p><a href="javascript:history.back()" class="blue darken-4 waves-effect waves-light btn">Voltar</a></p>
							<?php endwhile; endif; ?> 
         				<?php wp_reset_query(); ?>   
					</div>
				</div>
			</div>
		</section>

 <?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_footer();
?>