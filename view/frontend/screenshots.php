<div id="fh5co-product-screenshots" data-section="screenshots">
  <div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeIn">
    <div class="col-md-12 section-heading text-center">
      <h2>App Screenshots</h2>
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h3>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="owl-carousel-center">
    <?php
    while($result = $display->fetch()) {
      echo '<div class="animate-box" data-animate-effect="fadeIn"><img src="'.$result['img'].'" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></div>';
    }
    ?>
  </div>
</div>
