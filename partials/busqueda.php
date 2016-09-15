<div class="section-full">
    <div class="filter col-xs-12">
        <form role="form" action="buscar.php" method="post">
            <div class="form-group col-md-4">
                <input type="text" class="form-control" name="search_form" placeholder="Buscar en teleSUR">
            </div>
            <div class="form-group col-md-2">
                <select class="form-control" id="filter">
                    <option value="" >Todas las categorías</option>
                    <option value="latinaamerica" >Latina América</option>
                    <option value="world" >Vuelta al mundo</option>
                    <option value="sport" >Deportes</option>
                    <option value="culture" >Cultura</option>
                    <option value="webspecial" >Especiales Web</option>
                    <option value="infographics" >Infografías</option>
                    <option value="games" >Juegos</option>
                    <option value="galleries" >Galerías</option>
                    <option value="articles" >Notas</option>
                    <option value="interviews" >Encuestas</option>
                    <option value="context" >Foros</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <select class="form-control" id="published">
                    <option value="" >Todas las fechas</option>
                    <option value="7d" >Última semana</option>
                    <option value="30d" >Último mes</option>
                    <option value="1y" >Último año</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <select class="form-control" id="section">
                    <option value="" >Todas las secciones</option>
                    <option value="soyreportero" >Soy Reportero</option>
                    <option value="news" >Noticias</option>
                    <option value="videos" >Vídeos</option>
                    <option value="multimedia" >Multimedia</option>
                    <option value="opinion" >Opinión</option>
                    <option value="blog" >Blogs</option>
                    <option value="joinus" >Únete</option>
                    <option value="shows" >Shows</option>
                    <option value="telesur_agenda" >teleSUR Agenda</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <button type="submit">Buscar</button>
            </div>

            <div class="col-md-2 col-md-offset-10">
                <a class="advanced-search" href="">Búsqueda avanzada</a>
            </div>
            <div class="clearfix"></div>
        </form>
    </div>

    <div class="header col-xs-12">
        <div class="pull-left">
            <h2>Resultado de la búsqueda</h2>
        </div>
        <div class="clearfix"></div>
    </div>

    <?php
    foreach (range(0, 12) as &$valor) {?>

        <? if($valor != 2){?>
            <div class="col-md-4 col-xs-6">
                <div class="section-item ">
                    <img src="http://placehold.it/470x235" alt="" class="img-responsive">
                    <div class="section-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </div>
                    <div class="section-summary">
                        Accusamus asperiores corporis earum eligendi enim explicabo id nulla quasi quis vel. At consequatur dolores et
                        magnam, necessitatibus
                    </div>
                </div>
            </div>
        <? } else {?>
            <div class="section-item advertisement col-md-4 col-xs-6 visible-lg visible-md">
                <img src="http://placehold.it/295x250" alt="" class="img-responsive text-center">
            </div>
        <? }?>

    <?php } ?>
    <div class="clearfix"></div>
</div>