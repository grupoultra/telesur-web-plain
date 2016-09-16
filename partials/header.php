<header sticky ng-controller="HeaderCtrl as nav">
  <div class="container nav-container">
    <section class="header-info">
      <div class="logo text-center">
        <div class="logo-image text-center">
          <a href="/">
            <img src="images/tsur_logo_header.png" alt="">
          </a>
        </div>
        <div class="language-switch"><a href="#"> Cambiar a inglés </a></div>
      </div>

      <div class="time-weather text-center">
        <div class="time">
          <p>14 de junio</p>

        </div>
        <div class="weather">
          <span class="glyphicon glyphicon-cloud" aria-hidden="true"></span>
          <span>Caracas. 19 C</span>
        </div>
      </div>

      <div class="session-info text-center">
        <img src="http://placehold.it/30x30" class="img-circle" alt="">
        <p>Bienvenido(a),</p>
        <p>Visitante</p>
      </div>
    </section>

    <section class="header-nav" >
      <ul>
        <li><a href="./">Explore</a></li>
        <li><a href="./vea.php">Vea</a></li>
        <li><a href="./participe.php">Participe</a></li>
        <li><a href="./mitelesur.php">Mi teleSUR</a></li>
      </ul>
    </section>

    <section class="header-extra text-center">
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
          <form role="form">
            <div class="form-group">
              <i class="glyphicon glyphicon-search"></i>
              <input type="text" class="form-control" id="email" placeholder="Buscar en teleSUR">
            </div>
          </form>
        </div>
      </div>
      <div class="clearfix"></div>
    </section>
  </div>

  <div class="subnav">
    <div class="container">

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


  <div class="container">
    <div id="menu-container" class="subnav-container">
      <?php include_once 'partials/subfooter-menu.html'?>
      <?php include_once 'partials/footer-menu.php'?>
    </div>

    <div id="live-signal-container" class="subnav-container">
      <?php include_once  'partials/live-signal.html'?>
    </div>
  </div>

</header>

