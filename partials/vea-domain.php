<div class="domain-container vea-domain">
  <div class="main-container">
    <div class="comments">
      <div class="close-box">
        <span class="glyphicon glyphicon-remove-circle " onclick="openComments()"></span>
      </div>
    </div>
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
      <div class="share-section">
        <p>Comparta este video:</p>
        <div class="socials-container">
          <?php include 'partials/socials-container.php'?>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="video-container">
      <div class="video">
        <img src="http://placehold.it/645x460" alt="" class="img-responsive">
        <div class="video-caption">
          <p>teleSUR Noticias: Domingo 12/06/2016</p>
        </div>
      </div>
      <div class="video-footer">
        <span>Emitido: Domingo, 12 de junio de 2016, 11:30am - Publicado: Domingo, 12 de junio de 2016, 12:43am</span>
        <a class="pull-right" onclick="openComments()">18 comentarios</a>
      </div>
    </div>
    <div class="clearfix"></div>

    <div class="comments-container">
      <form role="form">
        <div class="form-group">
          <textarea type="text" class="form-control" placeholder="Deje su comentario"></textarea>
          <span>Para poder comentar, deberá iniciar su sesión en telesurtv.net</span>
        </div>
      </form>
    </div>
    <div class="advertisement text-center">
      <img class="hidden-sm hidden-xs" src="http://placehold.it/320x100?text=Publicidad-320x100" alt="">
      <img class="hidden-md hidden-lg hidden-xg" src="http://placehold.it/320x100?text=PublicidadMovil-320x100" alt="">
    </div>
    <div class="clearfix"></div>
  </div>
  <div class="right-sidebar">
    <div class="domain-title">Videos Relacionados:</div>
    <div class="related-videos">

      <?php
        foreach (range(0, 10) as &$valor) {?>
      <div class="related-video">
        <img src="http://placehold.it/120x120" alt="" class="img-responsive">
        <div class="info">
          <div class="category">Programa</div>
          <div class="title">Related video title lorem ipsum</div>
          <div class="metadata">
            <div class="date pull-left"> Domingo, 12/06/2016</div>
            <div class="duration pull-right">Duración: 23 min.</div>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
      <?php } ?>
    </div>
  </div>
  <div class="clearfix"></div>
</div>
