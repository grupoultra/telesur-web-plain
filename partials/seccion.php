<div class="section-full">
    <div class="header col-xs-12">
        <div class="pull-left">
            <h2>Categoria</h2>
        </div>
        <div class="clearfix"></div>
    </div>
    <?php foreach (range(0, 12) as &$valor) {?>
    <?if ($valor == 2) {?>
    <div class="section-item advertisement col-md-4 col-xs-6 visible-lg visible-md">
        <img src="http://placehold.it/300x250" alt="" class="img-responsive text-center">
    </div>
    <?}?>

    <div class="col-md-4 col-xs-6">
        <div class="section-item ">
            <a href="<nt:link/>" title="${imageDescription}" alt="${imageDescription}">
                <img itemprop="contentURL" class="img-responsive" src="http://placehold.it/470x215" width='470' height='235' alt="${imageDescription}" />
            </a>

            <div class="section-title">Titulo </div>
            <div class="section-summary">Subtitulo </div>
        </div>
    </div>
    <?}?>
    <div class="clearfix"></div>
</div>