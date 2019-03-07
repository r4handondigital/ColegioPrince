 <?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_header();
?>

        <section>
        	<div class="container">
				<div class="row">
					<div class="col s12">
						<h1 class="titulos">ACONTECE NO PRINCE</h1>
					</div>
				</div>
<!-- 630 x 340 -->
				<div class="row">
				<?php query_posts(array( 'showposts' => '3' )); ?>
          			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

					<div class="col s12 m4">
						<a href=""><img src="<?php the_field('imagem_da_capa'); ?>" class="responsive-img">
						<h4 class="not-mais"><span><?php echo get_the_date('d'); ?> de <?php echo get_the_date('F'); ?></span><?php echo strip_tags(get_the_title()); ?></h4>	</a>
					</div>
					<?php endwhile; endif; ?> 
	         	<?php wp_reset_query(); ?>

					

				</div>
        	</div>
        </section>


        <section class="sessao-midia grey lighten-3">
        	<div class="container">
				<div class="row">
					<div class="col s12 m12 l6">
						<h2 class="titulos">TV PRINCE</h2>
						<iframe width="100%" height="340" src="https://www.youtube.com/embed/Z5gaJoiMHPo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						<p class="center"><a class="waves-effect waves-light btn-large red darken-4">mais vídeos</a></p>
					</div>

					<div class="col s12 m12 l6">
						<h2 class="titulos">FACEBOOK</h2>
						<div class="center fb-page" data-href="https://www.facebook.com/colegioprince/" data-tabs="timeline" data-width="500" data-height="340" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/colegioprince/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/colegioprince/">Colégio Prince</a></blockquote></div>
						<p class="center"><a class="waves-effect waves-light btn-large blue darken-4">venha curtir</a></p>
					</div>
				</div>
        	</div>
        </section>

        <section class="sessao-instagram">
        	<div class="container">
				<div class="row">
					<div class="col s12">
						<h2 class="titulos">INSTAGRAM</h2>
					</div>
				</div>
        	</div>
<!-- InstaWidget -->
<div class="center">
<a href="https://instawidget.net/v/user/colegioprince" id="link-281857b708ad5d51545ed50ff1053961440126d7ff028362b4f3c756c86f5be7">@colegioprince</a>
<script src="https://instawidget.net/js/instawidget.js?u=281857b708ad5d51545ed50ff1053961440126d7ff028362b4f3c756c86f5be7&width=100%"></script></div>
        </section>


 <?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_footer();
?>