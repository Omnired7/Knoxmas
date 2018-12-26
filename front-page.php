<?php get_header(); ?>
<div id="primary" class="content-area">
		<main id="main" class="site-main">
        <div class='first-prlx'>
        Let us help you enjoy, your kno-x-mas<br/>
        by making it easy to transition <br/>
        between holidays.
        </div>
        <div class="mid-text">
            <h1>
                KNOXVILLE'S BEST
            </h1>
            <p>
                Our team is comprised of young professionals and students.<br/>
                We take the hassle out of lugging the huge <br/>
                messy tree at the end of the year.
            </p>
        </div>
        <div class='scnd-prlx'>
            <div class="first">
                <div>
                    PICK<br/>
                    UP
                </div>
                <div>
                    REMOVAL
                </div>
                <div>
                    DISPOSAL
                </div>
                <p>
                Contact us below to learn about how we can help you<br/>
                transition between holidays this year.
                </p>
            </div>
        </div>
        <style>
            /* XS */
            #main .first-prlx, #main .scnd-prlx{
                background: url("<?php echo get_template_directory_uri().'/img/parrallax_1_800x533.jpg'; ?>");
                background-attachment: fixed;
                background-size: cover;
                padding-right: .2em;
                padding-left: .2em;
            }
            /* SM */
            @media only screen and (min-width : 768px) {
                #main .first-prlx, #main .scnd-prlx{
                    height: 6em;
                }
                #main .scnd-prlx{
                height: 20em;
                }
            }
        </style>
        <?php
		if ( have_posts() ) :
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
			endwhile;
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>