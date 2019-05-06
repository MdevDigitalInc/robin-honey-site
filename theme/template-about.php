<?php /* Template Name: About */?>

<?php get_header(); ?>

<main class="rhd-main">

  <section>

  <div class="rhd-container">

    <!-- <h1><?php the_title(); ?></h1> -->

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

      <!-- article -->
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="rhd-row flex flex-row flex-wrap flex-hor-center rhd-section-light-grey">

            <div class="rhd-main-photo">

              <img src="<?php echo bloginfo('template_url'); ?>/img/robin-honey-portrait.png" alt="">

            </div>

            <div class="rhd-about-content">

              <h1>About Robin </h1>

              <p>Robin is skilled at finding the client’s core purpose through her investigative process and interpreting that into new visual and verbal expressions. Called the ‘Brand Queen’ she has worked with and invented hundreds of brands over her 30-year career, including for national corporations like Labatt Brewing and Chrysler, international consumer brands like Jolly Jumper and 3M, and entrepreneurial start-ups. Over the past few years she has amassed a specialist expertise in craft beer having branded Forked River, Cowbell Brewing, Equals Brewing and rebranded Big Rock Brewery.</p>

              <a href="" class="rhd-base-btn rhd-main-btn" title="">View Work</a>

              <?php //the_content(); ?>

            </div>

        </div>
        <div class="rhd-bio">

          <h1>Bio</h1>

          <p>A former entrepreneur, Robin founded the brand boutique Honey Design in 1989. In 2014, she merged with Arcane Digital and helped to build a creative team that integrated brand with digital practices. Robin has evolved to the next stage of her career, helping creative agencies and clients alike, as an independent brand and creative consultant.</p>

          <p>Robin&apos;s work has been featured in international publications and has been awarded local, national and international recognition for excellence in design and strategy. Robin is an author of a primer on branding for business –The Beebrand Manifesto, A Quest for Authenticity and many articles on branding.</p>

          <p>A graduate of the Richard Ivey School of Business’s Strategic Marketing Program, and Sheridan College’s advertising program, Robin is a frequent speaker on branding and has appeared at Design Thinkers and various RGD events for students and practitioners alike, as well as client- focused events throughout Canada and the U.S.</p>

        </div>


        <?php edit_post_link(); ?>

      </article>
      <!-- /article -->

    <?php endwhile; ?>

    <?php else: ?>

      <!-- article -->
      <article>

        <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

      </article>
      <!-- /article -->

    <?php endif; ?>

  </div>

  </section>


  <section class="rhd-section-light-grey">

    <div class="rhd-container">

      <div class="rhd-row flex flex-row flex-wrap flex-hor-center ">
        <aside class="rhd-aside">
          <h1>Contact</h1>

          <p><span class="text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span></p> 

          <ul class="rhd-list">
            <li><a href="mailto:info@robinhoney.com" title="">info@robinhoney.com</a></li>
            <li><strong>LinkedIn – </strong><a href="" title="">Robin Honey</a></li>
            <li><strong>witter –  </strong><a href="" title="">@honeylondon </a></li>
            <li><strong>Instagram – </strong><a href="" title="">Robin Honey </a></li>
            <li><strong>Pinterest – </strong><a href="" title="">Robin Honey</a></li>
          </ul>

        </aside>



        <div class="rhd-content-right">

          <h1>writing</h1>

          <p><span class="text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tristique diam volutpat nulla lacinia vestibulum.</span></p>

          <ul class="rhd-list rhd-bullets">

            <li>Brand Naming – Why you need a one-two punch.</li>

            <li>Brand Naming – Coin something new. </li>

            <li>What’s Your Logo Saying?</li>

            <li>A House of Brands or a Branded House?</li>

            <li>The BeeBrand Manifesto, available on Amazon.</li>

          </ul>

          <h1>speaking</h1>

          <p><span class="text-light">Robin’s speaking engagements focus on the process of branding with case studies tailored to the audience along with practical advice.</span></p>

          <ul class="rhd-list rhd-bullets">

            <li>MLX Conference, Atlanta, 2018 – The Value of Brand of Brand Consistency</li>

            <li>Creative Direction 2017, Toronto – What Creative Directors Know</li>

            <li>RGD Moderator 2017, Webinar, Feminism in Design</li>

            <li>RGD Design Thinkers 2017, Toronto – The Art & Science of Brand Naming</li>

            <li>MacKay CEO Forums 2017 – The Authenticity   Gap; How to manage your brand in a digital world.</li>

            <li>MaxLiving Conference 2017 Florida, U.S. – Brand Launch</li>

            <li>Master Pools Conference North Carolina, U.S. – Brand Launch</li>

          </ul>

          <h1>workshops</h1>

          <p><span class="text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tristique diam volutpat nulla lacinia vestibulum.</span></p>

          <ul class="rhd-list rhd-bullets">

          <li>Brand workshops ‘Find Your Brand Position’ for a variety of industries from insurance, B2B professional services, consumer products, etc.</li>


          </ul>



          </div>

      </div>

    </div>

  </section>


  <?php include 'contact.php'; ?>

</main>

<?php get_footer(); ?>

