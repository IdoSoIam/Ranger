<div id="fh5co-testimonials" data-section="testimonial">
  <div class="container">
    <div class="row">
      <div class="col-md-12 section-heading text-center">
        <h2 class="animate-box" data-animate-effect="fadeIn">Happy Clients Says...</h2>
        <div class="row animate-box" data-animate-effect="fadeIn">
          <div class="col-md-8 col-md-offset-2 subtext">
            <h3>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="row">

      <?php
      while($afficher = $affichecom->fetch()) {

        echo '<div class="col-md-4">
        <div class="box-testimony animate-box" data-animate-effect="fadeIn">
        <blockquote>
        <span class="quote"><span><i class="icon-quote-left"></i></span></span>
        <p>"'.$afficher['commentaire'].'"</p>
        </blockquote>
        <p class="author">"'.$afficher['nom'].'", "'.$afficher['poste'].'" <br> <br> <a href="'.$afficher['site'].'" target="_blank">"'.$afficher['site'].'"</a> <span class="subtext"> <br> "'.$afficher['metier'].'"</span></p>
        </div>
        </div>';  }

      ?>

    </div>
  </div>
</div>
