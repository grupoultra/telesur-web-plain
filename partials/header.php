<header>
  <div class="nav-container">
    <section class="header-info no-gutter">
      <div class="col-xs-4 logo text-center">
        <div class="logo-image text-center">
          <a href="./">
            <img src="images/tsur_logo_header.png" alt="">
          </a>
        </div>
        <div class="language-switch"><a href="#"> Cambiar a inglés </a></div>
      </div>

      <div class="col-xs-4 time-weather text-center">
        <div class="time">
          <p>14 de junio</p>
        </div>
        <div id="weather" class="weather">
        </div>
      </div>

      <div class="col-xs-4 session-info text-center">
        <div class="dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="http://placehold.it/30x30" class="img-circle" alt="">
          <p>Bienvenido(a),</p>
          <p>Visitante</p>
        </div>

        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </div>
    </section>

    <section class="header-nav" >
      <div id="sections-button" class="sections-button">
        Explore <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span>

      </div>
      <ul id="nav-list" class="no-gutter ">
        <li class="col-xs-3"><a class="active" href="./">Explore</a><div class="clearfix"></div></li>
        <li class="col-xs-3"><a href="./vea.php">Vea</a><div class="clearfix"></div></li>
        <li class="col-xs-3"><a href="./participe.php">Participe</a><div class="clearfix"></div></li>
        <li class="col-xs-3"><a href="./mitelesur.php">Mi teleSUR</a><div class="clearfix"></div></li>
        <div class="clearfix"></div>

      </ul>
<!--      <div class="clearfix"></div>-->

    </section>

    <section class="header-extra pull-right text-center">
      <div id="live-signal-trigger" class="live-signal" ng-click="toggleLiveSignal()">
        <p>Señal en vivo</p>
        <p>En el aire: Conexión Global</p>
      </div>

      <div class="menu-principal">
        <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
        <span>Menú Principal</span>
      </div>

      <div class="social-search">
        <div class="socials-container">
          <?php include 'partials/socials-container.php'?>
        </div>

        <div class="search">
          <div class="mobile-search">
            <a id="mobile-search-trigger">
              <i class="glyphicon glyphicon-search"></i>
            </a>
          </div>
          <div class="menu-principal">
            <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
          </div>
          <form role="form" action="buscar.php" method="post">
            <div class="form-group">
              <i class="glyphicon glyphicon-search"></i>
              <input type="text" class="form-control" name="search_form" placeholder="Buscar en teleSUR">
            </div>
          </form>
          <div class="clearfix"></div>
        </div>
      </div>
    </section>

  </div>

  <div class="clearfix"></div>

  <div class="subnav">
    <div class="col-xs-12">

    <div class="breadcrumbs pull-left">
      <p>Explorando: Página Inicial > Notícias en destaque</p>
    </div>
    <div class="menu-principal pull-right">
      <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
      <span>Menú Principal</span>
    </div>
    <div class="clearfix"></div>
    </div>

  </div>

  <div id="mobile-search-area">
    <form role="form" action="buscar.php" method="post">
      <div class="form-group">
        <input type="text" class="form-control" name="search_form" placeholder="Buscar en teleSUR">
      </div>
    </form>
  </div>

  <div class="clearfix"></div>

  <div>
    <div id="menu-container" class="subnav-container">
      <?php

        $footer_id = "";
        $subfooter_id = "";
        include 'partials/subfooter.php';
        include 'partials/footer.php';
      ?>
    </div>

    <div id="live-signal-container" class="subnav-container">
      <?php include_once  'partials/live-signal.html'?>
    </div>
  </div>
  <div class="clearfix"></div>

</header>
<div class="clearfix"></div>
