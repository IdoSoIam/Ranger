<?php
require('model/model.php');

class Redi
{
  public function __construct()
  {

  }

  public function home(){
    $select = new SELECTIMAGE();
    $display = $select->Selectionner();
    $affiche = new DISPLAYCOMMENT();
    $affichecom = $affiche->Displaycomment();
    ob_start();
    require('view/frontend/home.php');
    require('view/frontend/services.php');
    require('view/frontend/screenshots.php');
    require('view/frontend/tour.php');
    require('view/frontend/features.php');
    require('view/frontend/testimonial.php');
    require('view/frontend/pricing.php');
    $content = ob_get_clean();
    require('view/frontend/include/template.php');
  }
}
 ?>
