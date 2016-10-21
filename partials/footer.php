<div class="container">
  <footer id="<? echo $footer_id?>">
    <section class="hidden-xs col-sm-1 logo text-center">
      <div class="logo-image">
        <a href="./">
          <img src="images/tsur_logo_header.png" alt="">
        </a>
      </div>
    </section>
    <section class="col-xs-6 col-sm-3 footer-links">
      <h5>Sobre teleSUR</h5>
      <ul>
        <li><a href="#">Acerca de teleSUR</a></li>
        <li><a href="#">Contactos</a></li>
        <li><a href="#">Equipo</a></li>
        <li><a href="#">Empleos</a></li>
        <li><a href="#">Terminos de uso</a></li>
        <li><a href="#">Aplicaciones</a></li>
        <li><a href="#">Cobertura satelital</a></li>
        <li><a href="#">RSS</a></li>
        <li><a href="#">Contratación pública</a></li>
      </ul>
    </section>
    <section class="col-xs-6 col-sm-3 footer-links">
      <h5>Servicios</h5>
      <ul>
        <li><a href="#">Catálogo de servicios</a></li>
        <li><a href="#">Multimedia</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Videos</a></li>
        <li><a href="#">TV en vivo</a></li>
      </ul>
      <h5 class="language-switch">teleSUR en inglés</h5>
    </section>
    <section class="col-xs-12 col-sm-2"></section>
    <section class="col-xs-12 col-sm-3 suscription-socials">
      <h5>Suscribirse a nuestro Boletín de Noticias</h5>
      <div class="search">
        <form name="Principal" id="footerSuscriptionForm" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <input id="email" class="form-control" type="text" placeholder="Correo electrónico" name="email" size="30" maxlength="255" />
          </div>

          <div id="RegistroFooter"></div>

          <span class="suscribe-cta pull-right">Suscribirse</span>
          <div class="clearfix"></div>
        </form>
      </div>

      <h5>Nuestra presencia en las Redes Sociales</h5>

      <div class="socials-container">
        <?php include 'partials/socials-container.php'?>
      </div>

      <div class="rss-apps">
        <div class="rss">
          <img src="images/rss.png" alt="" width="20px" height="20px">
          <h5>RSS</h5>
        </div>
        <div class="apps">
          <img src="images/apps.png" alt="" width="20px" height="20px">
          <h5>Apps</h5>
        </div>
      </div>

      <div class="clearfix"></div>
      <div class="legal-info">
        <p>La nueva Televisión del Sur C.A. (TVSUR)</p>
        <p>RIF: G-20004500-0</p>
      </div>
    </section>

    <div class="clearfix"></div>
  </footer>
</div>
<!---->
<!--<form name="Footer" id="Footer" method="post" enctype="multipart/form-data" onsubmit="return ValidarFooter();">-->
<!--  <input id="email" class="inputbox" type="text" placeholder="Correo electrónico" name="email" size="30" maxlength="255" />-->
<!--  <input id="subscribe2" type="submit" value="Suscríbete" name="boton2" />-->
<!--</form>-->

<div id="RegistroFooter" class="validarForm msjerrorFooter" style="display: none; clear:both;">
  <script type="text/javascript">
    $(function () {

      jQuery.fn.reset = function () {
        $(this).each(function () {
          this.reset();
        });
      };
      $("#subscribe2").click(function () {

        console.log("Envio function");
        
        var String = $('#Footer').serialize();
        if (email == "") { }
        else  {
          var url = "/system/modules/com.tfsla.diario.telesur/templates/TS_DMDS.jsp"; // El script a dónde se realizará la petición.
          $.ajax({
            type: "POST",
            url: url,
            data: String, // datos serializados
            async: false,
            success: function (data){
              $("#RegistroFooter").css("display", "block");
              var n = data.search("111");
              if(n==-1){
                var y = data.search("0 relaciones nuevas");
                if(y==-1){
                  $("#RegistroFooter").html("Su correo ha sido registrado exitosamente");
                }
                else{
                  $("#RegistroFooter").html("Esta dirección de correo ya se encuentra registrada");
                }
              }
              else if (n>-1){
                $("#RegistroFooter").html("El correo que ha ingesado es incorrecto");
              }

              $("#Footer").reset();
            }
          });
        }
        return false;
      });
    });

  </script>

  <script LANGUAGE="JavaScript">
    function ValidarHeader(){
      console.log("Validation function");


      var RegEmail = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
      validar = true;
      if(document.Principal.email.value.length == 0){
        document.getElementById('diverrorHeader').style.display = "block";
        document.Principal.email.focus();
        return false;
      }
      if(document.Principal.email.value.match(RegEmail)){
        $('.OKheader').fadeIn('fast');
        $('.ocultarBulletinHeader').fadeOut('fast');
        document.getElementById('diverrorHeader').style.display = "none";
        return validar;
      } else {
        document.getElementById('diverrorHeader').style.display = "block";
        document.Principal.email.focus();
        return false;
      }
    }
    function ValidarFooter(){
      var RegEmail = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
      validar = true;

      console.log("Validate footer");
      return false;

//      $(document.Footer).submit(function(e){
//        console.log("Prueba");
//        e.preventDefault();
//      });
//
//
//
//
      if(document.Footer.email.value.length == 0){
        console.log("Email is not long enough");

        document.getElementById('diverrorFooter').style.display = "block";
        document.Footer.email.focus();
        return false;
      }

      return false;

//      if(document.Footer.email.value.match(RegEmail)){
//        $('.OKfooter').fadeIn('fast');
//        $('.ocultarBulletinFooter').fadeOut('fast');
//        document.getElementById('diverrorFooter').style.display = "none";
//        return validar;
//      } else {
//        document.getElementById('diverrorFooter').style.display = "block";
//        document.Principal.email.focus();
//        return false;
//      }
    }
    function ValidarBloque(){
      var RegEmail = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
      validar = true;
      if(document.Bloque.correo.value.length == 0){
        document.getElementById('diverror').style.display = "block";
        document.Bloque.correo.focus();
        return false;
      }
      if(document.Bloque.correo.value.match(RegEmail)){
        $('.OK').fadeIn('fast');
        $('.ocultarBulletin').fadeOut('fast');
        document.getElementById('diverror').style.display = "none";
        return validar;
      } else {
        document.getElementById('diverror').style.display = "block";
        document.Bloque.correo.focus();
        return false;
      }
    }
  </script>
</div>