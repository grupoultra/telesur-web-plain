<div class="domain-container vea-domain-search">
  <div class="main-container">
    <div class="left-sidebar">
      <div class="domain-title text-center">Videoteca teleSUR</div>
      <div class="section-selector">
        <div id="show-sections" class="show-sections">
          <p>
            Ver todas las categorias
            <span class="glyphicon glyphicon-triangle-bottom"></span>
          </p>
        </div>
        <ul id="video-sections-list">
          <li class="active">
            <a href="">Noticias</a>
            <ul>
              <li><a href="#">Subcategoria</a></li>
              <li><a href="#">Subcategoria</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Entrevistas</a>
            <ul>
              <li><a href="#">Subcategoria</a></li>
              <li><a href="#">Subcategoria</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Programas</a>
            <ul>
              <li><a href="#">Subcategoria</a></li>
              <li><a href="#">Subcategoria</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Reportajes</a>
            <ul>
              <li><a href="#">Subcategoria</a></li>
              <li><a href="#">Subcategoria</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Documentales</a>
            <ul>
              <li><a href="#">Subcategoria</a></li>
              <li><a href="#">Subcategoria</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Especiales Web</a>
            <ul>
              <li><a href="#">Subcategoria</a></li>
              <li><a href="#">Subcategoria</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Seriados</a>
            <ul>
              <li><a href="#">Subcategoria</a></li>
              <li><a href="#">Subcategoria</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Infografias</a>
            <ul>
              <li><a href="#">Subcategoria</a></li>
              <li><a href="#">Subcategoria</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Corresponsales</a>
            <ul>
              <li><a href="#">Subcategoria</a></li>
              <li><a href="#">Subcategoria</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="search-section">
        <form role="form" action="vea-search.php">
          <div class="form-group">
            <i class="glyphicon glyphicon-search"></i>
            <input class="form-control" name="search" placeholder="Buscar en la Vídeoteca">
          </div>
        </form>
      </div>
    </div>
    <div class="results-section">
      <div class="col-xs-12 domain-title text-center">Busqueda: <i>token</i></div>
        <?php foreach (range(0, 12) as &$valor) {?>
          <div class="col-md-4 col-xs-6">
            <div class="section-item ">
              <img src="http://placehold.it/350x250" alt="" class="img-responsive">
              <div class="section-title">
                <a href="">
                  Accusamus asperiores corporis earum eligendi enim explicabo id nulla quasi quis vel. At
                  consequatur dolores magnam, necessitatibus
                </a>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>

  </div>
  <div class="clearfix"></div>
</div>
