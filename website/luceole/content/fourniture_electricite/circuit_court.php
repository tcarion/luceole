<!DOCTYPE html>
<html>
  <head>
    <title>Le Circuit Court</title>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/php_config.php";
    include_once($path);
    $path1 = get_headers(constant('ROOT_URL')."index.php?page=header&mode=php",1);
    include_once($path1['Location']);
    ?>
  </head>
  <body>
    <div class="container">
      <?php
      $path = get_headers(constant('ROOT_URL')."index.php?page=nav&mode=php",1);
      include_once($path['Location']);
      ?>
      <div class="row pages">
        <div class="col-lg-9 border-primary">
          <div class="row pages-title">
            <div class="pages-title">
              Le Circuit Court
            </div>
            <div class="pages-body">
              <p>
                COCITER (Comptoir Citoyen des Énergies) est le fournisseur coopératif d'électricité verte, locale et
                citoyenne qui a été créé par les coopératives afin de réaliser le circuit économique court de
                l'électricité.
              </p>
              <p>
                <img src="<?php echo constant('ROOT_URL'); ?>index.php?page=cociter_logo&mode=html" style="float:right; width:30%;padding-left:20px;">
                En très synthétique, les coopérateurs sont co-propriétaires des moyens de production via leur(s) part(s) dans les coopératives et se fournissent en électricité auprès de COCITER, fournisseur
                coopératif qui achète la production des coopératives de production.
              </p>
              <p>
                COCITER est en pleine croissance et compte près de 4.000 clients en Wallonie à ce jour (avril 2019).
                Lucéole est partenaire de COCITER.
              </p>
              <p>
                Devenez client COCITER pour donner un sens à votre électricité !
              </p>
              <p>
                Pour plus d’information ou devenir client, c'est par <a href="https://www.cociter.be/" target="_blank">ici</a>
              </p>
            </div>


          </div>
          <div class="row schema">
            <div class="col-lg-6 border-primary">
              <div class="schema-projet-habay pages-body" style="text-align:center;">

              </div>
            </div>
            <div class="col-lg-6 border-primary">
              <div class="schema-description pages-body">
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 border-primary">
          <?php
          $path = get_headers(constant('ROOT_URL')."index.php?page=right_banner&mode=php",1);
          include_once($path['Location']);
          ?>
        </div>
      </div>
      <?php
      $path = get_headers(constant('ROOT_URL')."index.php?page=footer&mode=php",1);
      include_once($path['Location']);
      ?>
    </div>
  </body>
</html>