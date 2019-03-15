 <?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_header();
?>

      <section class="sessao-interna">
			<div class="container">
				<div class="row">
					<div class="col s12 m8">
						<h1 class="titulos"><?php echo strip_tags(get_the_title()); ?></h1>

						<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
							<div class="texto">

								 <?php the_content(); ?> 



								
							</div>

							 <p><a href="javascript:history.back()" class="blue darken-4 waves-effect waves-light btn">Voltar</a></p>
							<?php endwhile; endif; ?> 
         				<?php wp_reset_query(); ?>   
					</div>

					<div class="col s12 m4">
						<h2 class="titulos">FACEBOOK</h2>
						<div class="center fb-page" data-href="https://www.facebook.com/colegioprince/" data-tabs="timeline" data-width="500" data-height="600" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/colegioprince/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/colegioprince/">Colégio Prince</a></blockquote></div>
						<p class="center"><a class="waves-effect waves-light btn-large blue darken-4">venha curtir</a></p>
					</div>
				</div>
			</div>
		</section>

 <?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_footer();
?>