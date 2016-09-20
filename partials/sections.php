
<?php
  foreach (range(0, 4) as &$valor) {?>

<div class="section">
  <div class="header">
    <div class="pull-left">
      <h2>Section <?php $valor?></h2>
      <a href="#">Ver todas</a>
    </div>
    <div class="pull-right">
      <span>Actualizado a las 02:35pm</span>
      <span>-</span>
      <a href="#">Actualizar ahora</a>
    </div>
    <div class="clearfix"></div>
  </div>
  <slick slides-to-show="3" slides-to-scroll="1" arrows="false" variable-width="true" class="section-container">

    <div class="section-item">
      <img src="http://placehold.it/470x215" alt="">
<!--      <div class="menu-container  text-right" ng-click="menuFocusNews = !menuFocusNews">-->
<!--        <span class="glyphicon glyphicon-option-horizontal"></span>-->
<!--        <ul  ng-init="menuFocusNews = false"  ng-show="menuFocusNews">-->
<!--          <li>menu-element</li>-->
<!--          <li>menu-element</li>-->
<!--        </ul>-->
<!--      </div>-->
      <div class="section-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </div>
      <div class="section-summary">
        Accusamus asperiores corporis earum eligendi enim explicabo id nulla quasi quis vel. At consequatur dolores et
        magnam, necessitatibus
      </div>
    </div>

    <div class="section-item">
      <img src="http://placehold.it/470x215" alt="">
      <div class="section-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </div>
      <div class="section-summary">
        Accusamus asperiores corporis earum eligendi enim explicabo id nulla quasi quis vel. At consequatur dolores et
        magnam, necessitatibus
      </div>
    </div>

    <div class="section-item advertisement" style="width: auto">
      <img src="http://placehold.it/295x250?text=Publicidad-295x250" alt="">
    </div>

    <div class="section-item">
      <img src="http://placehold.it/470x215" alt="">
      <div class="section-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </div>
      <div class="section-summary">
        Accusamus asperiores corporis earum eligendi enim explicabo id nulla quasi quis vel. At consequatur dolores et
        magnam, necessitatibus
      </div>
    </div>

    <div class="section-item advertisement" style="width: auto">
      <img src="http://placehold.it/295x250" alt="">
    </div>

    <div class="section-item">
      <img src="http://placehold.it/470x215" alt="">
      <div class="section-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </div>
      <div class="section-summary">
        Accusamus asperiores corporis earum eligendi enim explicabo id nulla quasi quis vel. At consequatur dolores et
        magnam, necessitatibus
      </div>
    </div>

  </slick>
</div>
<?php } ?>

<?php
  foreach (range(0, 1) as &$valor) {?>
<div class="section section-split">
  <div class="header">
    <div class="pull-left">
      <h2>Section splitted <?php $valor?></h2>
      <a href="#">Ver todas</a>
    </div>
    <div class="pull-right">
      <span>Actualizado a las 02:35pm</span>
      <span>-</span>
      <a href="#">Actualizar ahora</a>
    </div>
    <div class="clearfix"></div>
  </div>
  <div class="section-item">
    <div class="split"  >
      <img src="http://placehold.it/470x120" alt="">
      <div class="section-title">Lorem ipsum dolor sit amet</div>
      <div class="section-summary">
        <a href="">Accusamus asperiores corporis</a>
      </div>
    </div>
    <div class="split"  >
      <img src="http://placehold.it/470x120" alt="">
      <div class="section-title">Lorem ipsum dolor sit amet</div>
      <div class="section-summary">
        Accusamus asperiores corporis
      </div>
    </div>
  </div>

  <div class="section-item advertisement">
    <img src="http://placehold.it/295x250?text=Publicidad-295x250" alt="">
  </div>
  <div class="section-item">
    <div class="split"  >
      <img src="http://placehold.it/470x120" alt="">
      <div class="section-title">Lorem ipsum dolor sit amet </div>
      <div class="section-summary">
        Accusamus asperiores corporis
      </div>
    </div>
    <div class="split"  >
      <img src="http://placehold.it/470x120" alt="">
      <div class="section-title">Lorem ipsum dolor sit amet </div>
      <div class="section-summary">
        Accusamus asperiores corporis
      </div>
    </div>
  </div>
</div>
<?php } ?>
