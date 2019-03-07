 <?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_header();
?>

      <section class="sessao-interna">
			<div class="container">
				<div class="row">
					<div class="col s12">
						<h1 class="titulos"><?php echo strip_tags(get_the_title()); ?></h1>

						<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
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