<?php get_header(); ?>
<main>
  <div id="inicio" class="parallax">
      <div class="content">
          <div class="logo-principal">
                <img src="<?php bloginfo('template_url'); ?>/images/logo-main.png" alt="" class="logo-main">
          </div>
      </div>
  </div><!-- inicio -->

  <div id="kenpo" class="parallax">
    <div class="content">
        <div class="titulo-inner">
            <h1 class="titulo-center">KENPO</h1>
            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum corporis perferendis ratione fugiat.</h3>
        </div>
        <div class="info-content">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa inventore voluptates mollitia, quasi fuga ipsum minima nemo quisquam amet in consequuntur minus nihil quas adipisci eligendi? Quasi eius at numquam?
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex modi doloremque, velit mollitia, fugit laudantium dolores repellendus sit, laboriosam illum voluptatem. Blanditiis tenetur esse fugit eum inventore dolore saepe quis!
            </p>
        </div>
    </div>
  </div><!-- kenpo -->

  <div id="team" class="parallax">
    <div class="content team-class">
        <div class="titulo">
            <h1>Conoce a los instructores.</h1>
        </div>
        <article>
            <img src="http://picsum.photos/370/230/" alt="">
            <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima, voluptatum quae quia sapiente itaque consectetur perspiciatis
                dolores temporibus saepe dolore eum hic cumque. Natus, nam error veritatis quis possimus tenetur.</p>
        </article>
        <article>
                <img src="http://picsum.photos/370/230/" alt="">
            <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima, voluptatum quae quia sapiente itaque consectetur perspiciatis
                dolores temporibus saepe dolore eum hic cumque. Natus, nam error veritatis quis possimus tenetur.</p>
        </article>
        <article>
            <img src="http://picsum.photos/370/230/" alt="">
            <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima, voluptatum quae quia sapiente itaque consectetur perspiciatis
                dolores temporibus saepe dolore eum hic cumque. Natus, nam error veritatis quis possimus tenetur.</p>
        </article>
        <article>
            <img src="http://picsum.photos/370/230/" alt="">
            <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima, voluptatum quae quia sapiente itaque consectetur perspiciatis
                dolores temporibus saepe dolore eum hic cumque. Natus, nam error veritatis quis possimus tenetur.</p>
        </article>
    </div>
  </div><!-- team -->

  <div id="events" class="parallax">
    <div class="content events-class">
        <div class="titulo">
            <h1>Eventos Pasados</h1>
        </div>
        <div class="gallery">
            <!-- The grid: four columns -->
            <div class="row-gallery">
                <div class="column-gallery">
                    <img src="<?php bloginfo('template_url'); ?>/images/marts1.jpg" alt="MARTS 1" onclick="openImg(this);">
                </div>
                <div class="column-gallery">
                    <img src="<?php bloginfo('template_url'); ?>/images/marts2.jpg" alt="MARTS 2" onclick="openImg(this);">
                </div>
                <div class="column-gallery">
                    <img src="<?php bloginfo('template_url'); ?>/images/marts3.jpg" alt="MARTS 3" onclick="openImg(this);">
                </div>
                <div class="column-gallery">
                    <img src="<?php bloginfo('template_url'); ?>/images/marts4.jpg" alt="MARTS 4" onclick="openImg(this);">
                </div>
            </div>

            <!-- The expanding image container -->
            <div class="container-gallery">
                <!-- Close the image -->
                <span onclick="this.parentElement.style.display='none'" class="closebtn-gallery">&times;</span>

                <!-- Expanded image -->
                <img id="expandedImg" class="expandedImg">

                <!-- Image text -->
                <div id="imgtext"></div>
            </div>
        </div>
    </div>
  </div><!-- events -->

  <div id="blog" class="parallax">
    <div class="content blog-class">


    </div>
  </div><!-- blog -->

  <div id="contact" class="parallax">
    <div class="content">
        <div class="contact-info">
           <div class="contact-horario">
               <h1>Ven a Visitarnos</h1>
               <h3>De Lunes a viernes:</h3><p>&nbsp;18hs a 22Hs </p>
               <p class="contact-correo">Correo: <a href="mailto:kenpo@correo.com">kenpo@correo.com</a></p>

               <p class="contact-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci laboriosam obcaecati harum consequuntur, earum praesentium facilis. Obcaecati consequuntur architecto sapiente magnam,
                    facere provident quibusdam dolorum doloribus animi sint dolores voluptatem?</p>
            </div>
        </div>
        <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3327.1579478624813!2d-70.65529568458349!3d-33.497267507303086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662dacee11c2a0f%3A0x8863690366f73279!2sLo+Vial!5e0!3m2!1ses-419!2sbr!4v1536784863516" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
  </div><!-- contact -->

</main><!-- Main -->
<?php get_footer(); ?>
