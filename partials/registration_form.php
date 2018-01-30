<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2-rc.1/css/select2.min.css" rel="stylesheet" />
<div class="cont1">
    <h3>Regístrate</h3>
    <div class="form_reg">

        <form class="reg-form" id="registration" name="registration" method="post" action="/usuarios/registracion.html" style="margin-bottom: 15px">

            <input type="hidden" name="registracion" value="true" />
            <div class="form-group">
                <input class="form-control" type="text" name="firstname" id="firstname" data-forms="message-register" data-tooltips="flecha-left" data-invalid="¿Cual es su nombre?"  required placeholder="*Nombre" value=""  />
            </div>
            <div class="anote"></div>

            <div class="form-group">
                <input class="form-control" type="text" name="lastname" id="lastname"  data-forms="message-register" data-tooltips="flecha-left" data-invalid="¿ Cuál es su apellido?" required  placeholder="*Apellido" value=""  />

            </div>
            <div class="anote"></div>

            <div class="form-group">
                <input class="form-control" type="text" name="nickname" id="nickname"  data-forms="message-register" data-tooltips="flecha-left" minlength="2" maxlength="20"  pattern=".{2,20}" data-invalid="Ingrese el usuario que te identificará en teleSUR, debe tener entre 2 y 20 dígitos y contener números y letras." required placeholder="*Usuario" value="" />

            </div>
            <div class="anote"></div>



            <div class="clear" style="height:55px">
                <div class="form-group">














                    <select class="selreg form-control" id="select" required name="pais" style="margin-bottom:0;margin-top:20px">

                        <option class="opt" value="">*Seleccione</option>

                        <option class="opt" value="/system/categories/usuarios/region/Afganistan/" title="Afganistán"  > Afganistán</option>

                        <option class="opt" value="/system/categories/usuarios/region/Akrotiri/" title="Akrotiri"  > Akrotiri</option>

                        <option class="opt" value="/system/categories/usuarios/region/Albania/" title="Albania"  > Albania</option>

                        <option class="opt" value="/system/categories/usuarios/region/Alemania/" title="Alemania"  > Alemania</option>

                        <option class="opt" value="/system/categories/usuarios/region/Andorra/" title="Andorra"  > Andorra</option>

                        <option class="opt" value="/system/categories/usuarios/region/Angola/" title="Angola"  > Angola</option>

                        <option class="opt" value="/system/categories/usuarios/region/Anguila/" title="Anguila"  > Anguila</option>

                        <option class="opt" value="/system/categories/usuarios/region/Antartida/" title="Antártida"  > Antártida</option>

                        <option class="opt" value="/system/categories/usuarios/region/AntiguayBarbuda/" title="Antigua y Barbuda "  > Antigua y Barbuda </option>

                        <option class="opt" value="/system/categories/usuarios/region/AntillasNeerlandesas/" title="Antillas Neerlandesas "  > Antillas Neerlandesas </option>

                        <option class="opt" value="/system/categories/usuarios/region/ArabiaSaudi/" title="Arabia Saudí "  > Arabia Saudí </option>

                        <option class="opt" value="/system/categories/usuarios/region/ArcticOcean/" title="Arctic Ocean "  > Arctic Ocean </option>

                        <option class="opt" value="/system/categories/usuarios/region/Argelia/" title="Argelia"  > Argelia</option>

                        <option class="opt" value="/system/categories/usuarios/region/Argentina/" title="Argentina"  > Argentina</option>

                        <option class="opt" value="/system/categories/usuarios/region/Armenia/" title="Armenia"  > Armenia</option>

                        <option class="opt" value="/system/categories/usuarios/region/Aruba/" title="Aruba"  > Aruba</option>

                        <option class="opt" value="/system/categories/usuarios/region/AshmoreandCartierIslands/" title="Ashmore andCartier Islands "  > Ashmore andCartier Islands </option>

                        <option class="opt" value="/system/categories/usuarios/region/AtlanticOcean/" title="Atlantic Ocean "  > Atlantic Ocean </option>

                        <option class="opt" value="/system/categories/usuarios/region/Australia/" title="Australia"  > Australia</option>

                        <option class="opt" value="/system/categories/usuarios/region/Austria/" title="Austria"  > Austria</option>

                        <option class="opt" value="/system/categories/usuarios/region/Azerbaiyan/" title="Azerbaiyán"  > Azerbaiyán</option>

                        <option class="opt" value="/system/categories/usuarios/region/Bahamas/" title="Bahamas"  > Bahamas</option>

                        <option class="opt" value="/system/categories/usuarios/region/Bahrain/" title="Bahráin"  > Bahráin</option>

                        <option class="opt" value="/system/categories/usuarios/region/Bangladesh/" title="Bangladesh"  > Bangladesh</option>

                        <option class="opt" value="/system/categories/usuarios/region/Barbados/" title="Barbados"  > Barbados</option>

                        <option class="opt" value="/system/categories/usuarios/region/Belgica/" title="Bélgica"  > Bélgica</option>

                        <option class="opt" value="/system/categories/usuarios/region/Belice/" title="Belice"  > Belice</option>

                        <option class="opt" value="/system/categories/usuarios/region/Benin/" title="Benín"  > Benín</option>

                        <option class="opt" value="/system/categories/usuarios/region/Bermudas/" title="Bermudas"  > Bermudas</option>

                        <option class="opt" value="/system/categories/usuarios/region/Bielorrusia/" title="Bielorrusia"  > Bielorrusia</option>

                        <option class="opt" value="/system/categories/usuarios/region/BirmaniaMyanmar/" title="Birmania Myanmar "  > Birmania Myanmar </option>

                        <option class="opt" value="/system/categories/usuarios/region/Bolivia/" title="Bolivia"  > Bolivia</option>

                        <option class="opt" value="/system/categories/usuarios/region/BosniayHercegovina/" title="Bosnia y Hercegovina "  > Bosnia y Hercegovina </option>

                        <option class="opt" value="/system/categories/usuarios/region/Botsuana/" title="Botsuana"  > Botsuana</option>

                        <option class="opt" value="/system/categories/usuarios/region/Brasil/" title="Brasil"  > Brasil</option>

                        <option class="opt" value="/system/categories/usuarios/region/Brunei/" title="Brunéi"  > Brunéi</option>

                        <option class="opt" value="/system/categories/usuarios/region/Bulgaria/" title="Bulgaria"  > Bulgaria</option>

                        <option class="opt" value="/system/categories/usuarios/region/BurkinaFaso/" title="Burkina Faso "  > Burkina Faso </option>

                        <option class="opt" value="/system/categories/usuarios/region/Burundi/" title="Burundi"  > Burundi</option>

                        <option class="opt" value="/system/categories/usuarios/region/Butan/" title="Bután"  > Bután</option>

                        <option class="opt" value="/system/categories/usuarios/region/CaboVerde/" title="Cabo Verde "  > Cabo Verde </option>

                        <option class="opt" value="/system/categories/usuarios/region/Camboya/" title="Camboya"  > Camboya</option>

                        <option class="opt" value="/system/categories/usuarios/region/Camerun/" title="Camerún"  > Camerún</option>

                        <option class="opt" value="/system/categories/usuarios/region/Canada/" title="Canadá"  > Canadá</option>

                        <option class="opt" value="/system/categories/usuarios/region/Chad/" title="Chad"  > Chad</option>

                        <option class="opt" value="/system/categories/usuarios/region/Chile/" title="Chile"  > Chile</option>

                        <option class="opt" value="/system/categories/usuarios/region/China/" title="China"  > China</option>

                        <option class="opt" value="/system/categories/usuarios/region/Chipre/" title="Chipre"  > Chipre</option>

                        <option class="opt" value="/system/categories/usuarios/region/ClippertonIsland/" title="Clipperton Island "  > Clipperton Island </option>

                        <option class="opt" value="/system/categories/usuarios/region/Colombia/" title="Colombia"  > Colombia</option>

                        <option class="opt" value="/system/categories/usuarios/region/Comoras/" title="Comoras"  > Comoras</option>

                        <option class="opt" value="/system/categories/usuarios/region/Congo/" title="Congo"  > Congo</option>

                        <option class="opt" value="/system/categories/usuarios/region/CoralSeaIslands/" title="Coral Sea Islands "  > Coral Sea Islands </option>

                        <option class="opt" value="/system/categories/usuarios/region/CoreadelNorte/" title="Corea del Norte "  > Corea del Norte </option>

                        <option class="opt" value="/system/categories/usuarios/region/CoreadelSur/" title="Corea del Sur "  > Corea del Sur </option>

                        <option class="opt" value="/system/categories/usuarios/region/CostaRica/" title="Costa Rica "  > Costa Rica </option>

                        <option class="opt" value="/system/categories/usuarios/region/CostadeMarfil/" title="Costa de Marfil "  > Costa de Marfil </option>

                        <option class="opt" value="/system/categories/usuarios/region/Croacia/" title="Croacia"  > Croacia</option>

                        <option class="opt" value="/system/categories/usuarios/region/Cuba/" title="Cuba"  > Cuba</option>

                        <option class="opt" value="/system/categories/usuarios/region/Dhekelia/" title="Dhekelia"  > Dhekelia</option>

                        <option class="opt" value="/system/categories/usuarios/region/Dinamarca/" title="Dinamarca"  > Dinamarca</option>

                        <option class="opt" value="/system/categories/usuarios/region/Dominica/" title="Dominica"  > Dominica</option>

                        <option class="opt" value="/system/categories/usuarios/region/Ecuador/" title="Ecuador"  > Ecuador</option>

                        <option class="opt" value="/system/categories/usuarios/region/Egipto/" title="Egipto"  > Egipto</option>

                        <option class="opt" value="/system/categories/usuarios/region/ElSalvador/" title="El Salvador "  > El Salvador </option>

                        <option class="opt" value="/system/categories/usuarios/region/ElVaticano/" title="El Vaticano "  > El Vaticano </option>

                        <option class="opt" value="/system/categories/usuarios/region/EmiratosArabesUnidos/" title="Emiratos Árabes Unidos "  > Emiratos Árabes Unidos </option>

                        <option class="opt" value="/system/categories/usuarios/region/Eritrea/" title="Eritrea"  > Eritrea</option>

                        <option class="opt" value="/system/categories/usuarios/region/Eslovaquia/" title="Eslovaquia"  > Eslovaquia</option>

                        <option class="opt" value="/system/categories/usuarios/region/Eslovenia/" title="Eslovenia"  > Eslovenia</option>

                        <option class="opt" value="/system/categories/usuarios/region/Espana/" title="España"  > España</option>

                        <option class="opt" value="/system/categories/usuarios/region/EstadosUnidos/" title="Estados Unidos "  > Estados Unidos </option>

                        <option class="opt" value="/system/categories/usuarios/region/Estonia/" title="Estonia"  > Estonia</option>

                        <option class="opt" value="/system/categories/usuarios/region/Etiopia/" title="Etiopía"  > Etiopía</option>

                        <option class="opt" value="/system/categories/usuarios/region/Filipinas/" title="Filipinas"  > Filipinas</option>

                        <option class="opt" value="/system/categories/usuarios/region/Finlandia/" title="Finlandia"  > Finlandia</option>

                        <option class="opt" value="/system/categories/usuarios/region/Fiyi/" title="Fiyi"  > Fiyi</option>

                        <option class="opt" value="/system/categories/usuarios/region/Francia/" title="Francia"  > Francia</option>

                        <option class="opt" value="/system/categories/usuarios/region/Gabon/" title="Gabón"  > Gabón</option>

                        <option class="opt" value="/system/categories/usuarios/region/Gambia/" title="Gambia"  > Gambia</option>

                        <option class="opt" value="/system/categories/usuarios/region/GazaStrip/" title="Gaza Strip "  > Gaza Strip </option>

                        <option class="opt" value="/system/categories/usuarios/region/Georgia/" title="Georgia"  > Georgia</option>

                        <option class="opt" value="/system/categories/usuarios/region/Ghana/" title="Ghana"  > Ghana</option>

                        <option class="opt" value="/system/categories/usuarios/region/Gibraltar/" title="Gibraltar"  > Gibraltar</option>

                        <option class="opt" value="/system/categories/usuarios/region/Granada/" title="Granada"  > Granada</option>

                        <option class="opt" value="/system/categories/usuarios/region/Grecia/" title="Grecia"  > Grecia</option>

                        <option class="opt" value="/system/categories/usuarios/region/Groenlandia/" title="Groenlandia"  > Groenlandia</option>

                        <option class="opt" value="/system/categories/usuarios/region/Guam/" title="Guam"  > Guam</option>

                        <option class="opt" value="/system/categories/usuarios/region/Guatemala/" title="Guatemala"  > Guatemala</option>

                        <option class="opt" value="/system/categories/usuarios/region/Guernsey/" title="Guernsey"  > Guernsey</option>

                        <option class="opt" value="/system/categories/usuarios/region/Guinea/" title="Guinea"  > Guinea</option>

                        <option class="opt" value="/system/categories/usuarios/region/GuineaBissau/" title="Guinea-Bissau "  > Guinea-Bissau </option>

                        <option class="opt" value="/system/categories/usuarios/region/GuineaEcuatorial/" title="Guinea Ecuatorial "  > Guinea Ecuatorial </option>

                        <option class="opt" value="/system/categories/usuarios/region/Guyana/" title="Guyana"  > Guyana</option>

                        <option class="opt" value="/system/categories/usuarios/region/Haiti/" title="Haití"  > Haití</option>

                        <option class="opt" value="/system/categories/usuarios/region/Honduras/" title="Honduras"  > Honduras</option>

                        <option class="opt" value="/system/categories/usuarios/region/HongKong/" title="Hong Kong "  > Hong Kong </option>

                        <option class="opt" value="/system/categories/usuarios/region/Hungria/" title="Hungría"  > Hungría</option>

                        <option class="opt" value="/system/categories/usuarios/region/India/" title="India"  > India</option>

                        <option class="opt" value="/system/categories/usuarios/region/IndianOcean/" title="Indian Ocean "  > Indian Ocean </option>

                        <option class="opt" value="/system/categories/usuarios/region/Indonesia/" title="Indonesia"  > Indonesia</option>

                        <option class="opt" value="/system/categories/usuarios/region/Iran/" title="Irán"  > Irán</option>

                        <option class="opt" value="/system/categories/usuarios/region/Iraq/" title="Iraq"  > Iraq</option>

                        <option class="opt" value="/system/categories/usuarios/region/Irlanda/" title="Irlanda"  > Irlanda</option>

                        <option class="opt" value="/system/categories/usuarios/region/IslaBouvet/" title="Isla Bouvet "  > Isla Bouvet </option>

                        <option class="opt" value="/system/categories/usuarios/region/IslaChristmas/" title="Isla Christmas "  > Isla Christmas </option>

                        <option class="opt" value="/system/categories/usuarios/region/IslaNorfolk/" title="Isla Norfolk "  > Isla Norfolk </option>

                        <option class="opt" value="/system/categories/usuarios/region/Islandia/" title="Islandia"  > Islandia</option>

                        <option class="opt" value="/system/categories/usuarios/region/IslasCaiman/" title="Islas Caimán "  > Islas Caimán </option>

                        <option class="opt" value="/system/categories/usuarios/region/IslasCocos/" title="Islas Cocos "  > Islas Cocos </option>

                        <option class="opt" value="/system/categories/usuarios/region/IslasCook/" title="Islas Cook "  > Islas Cook </option>

                        <option class="opt" value="/system/categories/usuarios/region/IslasFeroe/" title="Islas Feroe "  > Islas Feroe </option>

                        <option class="opt" value="/system/categories/usuarios/region/IslasGeorgiadelSurySandwichdelSur/" title="Islas Georgia del Sur y Sandwich del Sur "  > Islas Georgia del Sur y Sandwich del Sur </option>

                        <option class="opt" value="/system/categories/usuarios/region/IslasHeardyMcDonald/" title="Islas Heard y McDonald "  > Islas Heard y McDonald </option>

                        <option class="opt" value="/system/categories/usuarios/region/IslasMalvinas/" title="Islas Malvinas "  > Islas Malvinas </option>

                        <option class="opt" value="/system/categories/usuarios/region/IslasMarianasdelNorte/" title="Islas Marianas del Norte "  > Islas Marianas del Norte </option>

                        <option class="opt" value="/system/categories/usuarios/region/IslasMarshall/" title="IslasMarshall"  > IslasMarshall</option>

                        <option class="opt" value="/system/categories/usuarios/region/IslasPitcairn/" title="Islas Pitcairn "  > Islas Pitcairn </option>

                        <option class="opt" value="/system/categories/usuarios/region/IslasSalomon/" title="Islas Salomón "  > Islas Salomón </option>

                        <option class="opt" value="/system/categories/usuarios/region/IslasTurcasyCaicos/" title="Islas Turcas y Caicos "  > Islas Turcas y Caicos </option>

                        <option class="opt" value="/system/categories/usuarios/region/IslasVirgenesBritanicas/" title="Islas Vírgenes Británicas "  > Islas Vírgenes Británicas </option>

                        <option class="opt" value="/system/categories/usuarios/region/Israel/" title="Israel"  > Israel</option>

                        <option class="opt" value="/system/categories/usuarios/region/Italia/" title="Italia"  > Italia</option>

                        <option class="opt" value="/system/categories/usuarios/region/Jamaica/" title="Jamaica"  > Jamaica</option>

                        <option class="opt" value="/system/categories/usuarios/region/JanMayen/" title="Jan Mayen "  > Jan Mayen </option>

                        <option class="opt" value="/system/categories/usuarios/region/Japon/" title="Japón"  > Japón</option>

                        <option class="opt" value="/system/categories/usuarios/region/Jersey/" title="Jersey"  > Jersey</option>

                        <option class="opt" value="/system/categories/usuarios/region/Jordania/" title="Jordania"  > Jordania</option>

                        <option class="opt" value="/system/categories/usuarios/region/Kazajistan/" title="Kazajistán"  > Kazajistán</option>

                        <option class="opt" value="/system/categories/usuarios/region/Kenia/" title="Kenia"  > Kenia</option>

                        <option class="opt" value="/system/categories/usuarios/region/Kirguizistan/" title="Kirguizistán"  > Kirguizistán</option>

                        <option class="opt" value="/system/categories/usuarios/region/Kiribati/" title="Kiribati"  > Kiribati</option>

                        <option class="opt" value="/system/categories/usuarios/region/Kuwait/" title="Kuwait"  > Kuwait</option>

                        <option class="opt" value="/system/categories/usuarios/region/Laos/" title="Laos"  > Laos</option>

                        <option class="opt" value="/system/categories/usuarios/region/Lesoto/" title="Lesoto"  > Lesoto</option>

                        <option class="opt" value="/system/categories/usuarios/region/Letonia/" title="Letonia"  > Letonia</option>

                        <option class="opt" value="/system/categories/usuarios/region/Libano/" title="Líbano"  > Líbano</option>

                        <option class="opt" value="/system/categories/usuarios/region/Liberia/" title="Liberia"  > Liberia</option>

                        <option class="opt" value="/system/categories/usuarios/region/Libia/" title="Libia"  > Libia</option>

                        <option class="opt" value="/system/categories/usuarios/region/Liechtenstein/" title="Liechtenstein"  > Liechtenstein</option>

                        <option class="opt" value="/system/categories/usuarios/region/Lituania/" title="Lituania"  > Lituania</option>

                        <option class="opt" value="/system/categories/usuarios/region/Luxemburgo/" title="Luxemburgo"  > Luxemburgo</option>

                        <option class="opt" value="/system/categories/usuarios/region/Macao/" title="Macao"  > Macao</option>

                        <option class="opt" value="/system/categories/usuarios/region/Macedonia/" title="Madagascar"  > Madagascar</option>

                        <option class="opt" value="/system/categories/usuarios/region/Malasia/" title="Malasia"  > Malasia</option>

                        <option class="opt" value="/system/categories/usuarios/region/Malaui/" title="Malaui"  > Malaui</option>

                        <option class="opt" value="/system/categories/usuarios/region/Maldivas/" title="Maldivas"  > Maldivas</option>

                        <option class="opt" value="/system/categories/usuarios/region/Mali/" title="Malí"  > Malí</option>

                        <option class="opt" value="/system/categories/usuarios/region/Malta/" title="Malta"  > Malta</option>

                        <option class="opt" value="/system/categories/usuarios/region/ManIsleof/" title="Man, Isle of "  > Man, Isle of </option>

                        <option class="opt" value="/system/categories/usuarios/region/Marruecos/" title="Marruecos"  > Marruecos</option>

                        <option class="opt" value="/system/categories/usuarios/region/Mauricio/" title="Mauricio"  > Mauricio</option>

                        <option class="opt" value="/system/categories/usuarios/region/Mauritania/" title="Mauritania"  > Mauritania</option>

                        <option class="opt" value="/system/categories/usuarios/region/Mayotte/" title="Mayotte"  > Mayotte</option>

                        <option class="opt" value="/system/categories/usuarios/region/Mexico/" title="México"  > México</option>

                        <option class="opt" value="/system/categories/usuarios/region/Micronesia/" title="Micronesia"  > Micronesia</option>

                        <option class="opt" value="/system/categories/usuarios/region/Moldavia/" title="Moldavia"  > Moldavia</option>

                        <option class="opt" value="/system/categories/usuarios/region/Monaco/" title="Mónaco"  > Mónaco</option>

                        <option class="opt" value="/system/categories/usuarios/region/Mongolia/" title="Mongolia"  > Mongolia</option>

                        <option class="opt" value="/system/categories/usuarios/region/Montserrat/" title="Montserrat"  > Montserrat</option>

                        <option class="opt" value="/system/categories/usuarios/region/Mozambique/" title="Mozambique"  > Mozambique</option>

                        <option class="opt" value="/system/categories/usuarios/region/Namibia/" title="Namibia"  > Namibia</option>

                        <option class="opt" value="/system/categories/usuarios/region/Nauru/" title="Nauru"  > Nauru</option>

                        <option class="opt" value="/system/categories/usuarios/region/NavassaIsland/" title="Navassa Island "  > Navassa Island </option>

                        <option class="opt" value="/system/categories/usuarios/region/Nepal/" title="Nepal"  > Nepal</option>

                        <option class="opt" value="/system/categories/usuarios/region/Nicaragua/" title="Nicaragua"  > Nicaragua</option>

                        <option class="opt" value="/system/categories/usuarios/region/Niger/" title="Níger"  > Níger</option>

                        <option class="opt" value="/system/categories/usuarios/region/Nigeria/" title="Nigeria"  > Nigeria</option>

                        <option class="opt" value="/system/categories/usuarios/region/Niue/" title="Niue"  > Niue</option>

                        <option class="opt" value="/system/categories/usuarios/region/Noruega/" title="Noruega"  > Noruega</option>

                        <option class="opt" value="/system/categories/usuarios/region/NuevaCaledonia/" title="Nueva Caledonia "  > Nueva Caledonia </option>

                        <option class="opt" value="/system/categories/usuarios/region/NuevaZelanda/" title="Nueva Zelanda "  > Nueva Zelanda </option>

                        <option class="opt" value="/system/categories/usuarios/region/Oman/" title="Omán"  > Omán</option>

                        <option class="opt" value="/system/categories/usuarios/region/PacificOcean/" title="Pacific Ocean "  > Pacific Ocean </option>

                        <option class="opt" value="/system/categories/usuarios/region/PaisesBajos/" title="Países Bajos "  > Países Bajos </option>

                        <option class="opt" value="/system/categories/usuarios/region/Pakistan/" title="Pakistán"  > Pakistán</option>

                        <option class="opt" value="/system/categories/usuarios/region/Palaos/" title="Palaos"  > Palaos</option>

                        <option class="opt" value="/system/categories/usuarios/region/Panama/" title="Panamá"  > Panamá</option>

                        <option class="opt" value="/system/categories/usuarios/region/PapuaNuevaGuinea/" title="Papúa-Nueva Guinea "  > Papúa-Nueva Guinea </option>

                        <option class="opt" value="/system/categories/usuarios/region/ParacelIslands/" title="Paracel Islands "  > Paracel Islands </option>

                        <option class="opt" value="/system/categories/usuarios/region/Paraguay/" title="Paraguay"  > Paraguay</option>

                        <option class="opt" value="/system/categories/usuarios/region/Peru/" title="Perú"  > Perú</option>

                        <option class="opt" value="/system/categories/usuarios/region/PolinesiaFrancesa/" title="Polinesia Francesa "  > Polinesia Francesa </option>

                        <option class="opt" value="/system/categories/usuarios/region/Polonia/" title="Polonia"  > Polonia</option>

                        <option class="opt" value="/system/categories/usuarios/region/Portugal/" title="Portugal"  > Portugal</option>

                        <option class="opt" value="/system/categories/usuarios/region/PuertoRico/" title="Puerto Rico "  > Puerto Rico </option>

                        <option class="opt" value="/system/categories/usuarios/region/Qatar/" title="Qatar"  > Qatar</option>

                        <option class="opt" value="/system/categories/usuarios/region/ReinoUnido/" title="Reino Unido "  > Reino Unido </option>

                        <option class="opt" value="/system/categories/usuarios/region/RepublicaCentroafricana/" title="República Centroafricana "  > República Centroafricana </option>

                        <option class="opt" value="/system/categories/usuarios/region/RepublicaCheca/" title="República Checa "  > República Checa </option>

                        <option class="opt" value="/system/categories/usuarios/region/RepublicaDemocraticadelCongo/" title="República Democrática del Congo "  > República Democrática del Congo </option>

                        <option class="opt" value="/system/categories/usuarios/region/RepublicaDominicana/" title="República Dominicana "  > República Dominicana </option>

                        <option class="opt" value="/system/categories/usuarios/region/Ruanda/" title="Ruanda"  > Ruanda</option>

                        <option class="opt" value="/system/categories/usuarios/region/Rumania/" title="Rumania"  > Rumania</option>

                        <option class="opt" value="/system/categories/usuarios/region/Rusia/" title="Rusia"  > Rusia</option>

                        <option class="opt" value="/system/categories/usuarios/region/SaharaOccidental/" title="Sáhara Occidental "  > Sáhara Occidental </option>

                        <option class="opt" value="/system/categories/usuarios/region/Samoa/" title="Samoa"  > Samoa</option>

                        <option class="opt" value="/system/categories/usuarios/region/SamoaAmericana/" title="Samoa Americana "  > Samoa Americana </option>

                        <option class="opt" value="/system/categories/usuarios/region/SanCristobalyNieves/" title="San Cristóbal y Nieves "  > San Cristóbal y Nieves </option>

                        <option class="opt" value="/system/categories/usuarios/region/SanMarino/" title="San Marino "  > San Marino </option>

                        <option class="opt" value="/system/categories/usuarios/region/SanPedroyMiquelon/" title="San Pedro y Miquelón "  > San Pedro y Miquelón </option>

                        <option class="opt" value="/system/categories/usuarios/region/SanVicenteylasGranadinas/" title="San Vicente y las Granadinas "  > San Vicente y las Granadinas </option>

                        <option class="opt" value="/system/categories/usuarios/region/SantaHelena/" title="Santa Helena "  > Santa Helena </option>

                        <option class="opt" value="/system/categories/usuarios/region/SantaLucia/" title="Santa Lucía "  > Santa Lucía </option>

                        <option class="opt" value="/system/categories/usuarios/region/SantoTomeyPrincipe/" title="Santo Tomé y Príncipe "  > Santo Tomé y Príncipe </option>

                        <option class="opt" value="/system/categories/usuarios/region/Senegal/" title="Senegal"  > Senegal</option>

                        <option class="opt" value="/system/categories/usuarios/region/Seychelles/" title="Seychelles"  > Seychelles</option>

                        <option class="opt" value="/system/categories/usuarios/region/SierraLeona/" title="Sierra Leona "  > Sierra Leona </option>

                        <option class="opt" value="/system/categories/usuarios/region/Singapur/" title="Singapur"  > Singapur</option>

                        <option class="opt" value="/system/categories/usuarios/region/Siria/" title="Siria"  > Siria</option>

                        <option class="opt" value="/system/categories/usuarios/region/Somalia/" title="Somalia"  > Somalia</option>

                        <option class="opt" value="/system/categories/usuarios/region/SouthernOcean/" title="Southern Ocean "  > Southern Ocean </option>

                        <option class="opt" value="/system/categories/usuarios/region/SpratlyIslands/" title="Spratly Islands "  > Spratly Islands </option>

                        <option class="opt" value="/system/categories/usuarios/region/SriLanka/" title="Sri Lanka "  > Sri Lanka </option>

                        <option class="opt" value="/system/categories/usuarios/region/Suazilandia/" title="Suazilandia"  > Suazilandia</option>

                        <option class="opt" value="/system/categories/usuarios/region/Sudafrica/" title="Sudáfrica"  > Sudáfrica</option>

                        <option class="opt" value="/system/categories/usuarios/region/Sudan/" title="Sudán"  > Sudán</option>

                        <option class="opt" value="/system/categories/usuarios/region/Suecia/" title="Suecia"  > Suecia</option>

                        <option class="opt" value="/system/categories/usuarios/region/Suiza/" title="Suiza"  > Suiza</option>

                        <option class="opt" value="/system/categories/usuarios/region/Surinam/" title="Surinam"  > Surinam</option>

                        <option class="opt" value="/system/categories/usuarios/region/SvalbardyJanMayen/" title="Svalbard y Jan Mayen "  > Svalbard y Jan Mayen </option>

                        <option class="opt" value="/system/categories/usuarios/region/Tailandia/" title="Tailandia"  > Tailandia</option>

                        <option class="opt" value="/system/categories/usuarios/region/Taiwan/" title="Taiwán"  > Taiwán</option>

                        <option class="opt" value="/system/categories/usuarios/region/Tanzania/" title="Tanzania"  > Tanzania</option>

                        <option class="opt" value="/system/categories/usuarios/region/Tayikistan/" title="Tayikistán"  > Tayikistán</option>

                        <option class="opt" value="/system/categories/usuarios/region/TerritorioBritanicodelOceanoIndico/" title="TerritorioBritánicodel Océano Indico "  > TerritorioBritánicodel Océano Indico </option>

                        <option class="opt" value="/system/categories/usuarios/region/TerritoriosAustralesFranceses/" title="Territorios Australes Franceses "  > Territorios Australes Franceses </option>

                        <option class="opt" value="/system/categories/usuarios/region/TimorOriental/" title="Timor Oriental "  > Timor Oriental </option>

                        <option class="opt" value="/system/categories/usuarios/region/Togo/" title="Togo"  > Togo</option>

                        <option class="opt" value="/system/categories/usuarios/region/Tokelau/" title="Tokelau"  > Tokelau</option>

                        <option class="opt" value="/system/categories/usuarios/region/Tonga/" title="Tonga"  > Tonga</option>

                        <option class="opt" value="/system/categories/usuarios/region/TrinidadyTobago/" title="Trinidad y Tobago "  > Trinidad y Tobago </option>

                        <option class="opt" value="/system/categories/usuarios/region/Tunez/" title="Túnez"  > Túnez</option>

                        <option class="opt" value="/system/categories/usuarios/region/Turkmenistan/" title="Turkmenistán"  > Turkmenistán</option>

                        <option class="opt" value="/system/categories/usuarios/region/Turquia/" title="Turquía"  > Turquía</option>

                        <option class="opt" value="/system/categories/usuarios/region/Tuvalu/" title="Tuvalu"  > Tuvalu</option>

                        <option class="opt" value="/system/categories/usuarios/region/Ucrania/" title="Ucrania"  > Ucrania</option>

                        <option class="opt" value="/system/categories/usuarios/region/Uganda/" title="Uganda"  > Uganda</option>

                        <option class="opt" value="/system/categories/usuarios/region/UnionEuropea/" title="Unión Europea"  > Unión Europea</option>

                        <option class="opt" value="/system/categories/usuarios/region/Uruguay/" title="Uruguay"  > Uruguay</option>

                        <option class="opt" value="/system/categories/usuarios/region/Uzbekistan/" title="Uzbekistán"  > Uzbekistán</option>

                        <option class="opt" value="/system/categories/usuarios/region/Vanuatu/" title="Vanuatu"  > Vanuatu</option>

                        <option class="opt" value="/system/categories/usuarios/region/Venezuela/" title="Venezuela"  > Venezuela</option>

                        <option class="opt" value="/system/categories/usuarios/region/Vietnam/" title="Vietnam"  > Vietnam</option>

                        <option class="opt" value="/system/categories/usuarios/region/WakeIsland/" title="Wake Island "  > Wake Island </option>

                        <option class="opt" value="/system/categories/usuarios/region/WallisyFutuna/" title="Wallis y Futuna "  > Wallis y Futuna </option>

                        <option class="opt" value="/system/categories/usuarios/region/WestBank/" title="West Bank "  > West Bank </option>

                        <option class="opt" value="/system/categories/usuarios/region/World/" title="World"  > World</option>

                        <option class="opt" value="/system/categories/usuarios/region/Yemen/" title="Yemen"  > Yemen</option>

                        <option class="opt" value="/system/categories/usuarios/region/Yibuti/" title="Yibuti"  > Yibuti</option>

                        <option class="opt" value="/system/categories/usuarios/region/Zambia/" title="Zambia"  > Zambia</option>

                        <option class="opt" value="/system/categories/usuarios/region/Zimbabue/" title="Zimbabue"  > Zimbabue</option>

                        <option class="opt" value="/system/categories/usuarios/region/argentina/" title="Argentina"  > Argentina</option>

                        <option class="opt" value="/system/categories/usuarios/region/brasil/" title="Brasil"  > Brasil</option>

                        <option class="opt" value="/system/categories/usuarios/region/mexico/" title="Mexico"  > Mexico</option>

                        <option class="opt" value="/system/categories/usuarios/region/uruguay/" title="Uruguay"  > Uruguay</option>

                    </select>


                </div>
            </div>

            <div class="form-group">
                <input class="form-control" type="email" name="email" id="email" data-forms="message-register" data-tooltips="flecha-left" data-invalid="Ingrese el correo que te identificará en teleSUR" data-invalid-confirm="El correo no tiene el formato adecuado" pattern="^([a-zA-Z0-9_-.]+)@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.)|(([a-zA-Z0-9-]+.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(]?)$" required placeholder="*Correo" value="" />


            </div>
            <div class="anote"></div>



            <div class="form-group">
                <input class="form-control" type="email" name="email_confirm"  id="email_confirm" data-forms="message-register" data-tooltips="flecha-left" data-invalid="Repita el correo ingresado" role="confirm" data-confirm="#email" data-invalid-confirm="El correo no coincide" pattern="^([a-zA-Z0-9_-.]+)@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.)|(([a-zA-Z0-9-]+.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(]?)$" required placeholder="*Repita el Correo" value="" />

            </div>
            <div class="anote"></div>

            <div class="form-group">
                <input class="form-control" type="password" name="password" id="password" data-forms="message-register" data-tooltips="flecha-left" minlength="8" pattern=".{8,}" data-invalid="Ingrese la contraseña, debe ser mayor de 7 dígitos."  required placeholder="*Contraseña" >


            </div>
            <div class="anote"></div>



            <div class="form-group">
                <input class="form-control" type="password" name="password_confirm" required id="password_confirm"  data-forms="message-register" data-tooltips="flecha-left" minlength="8" pattern=".{8,}" data-invalid="Repita la contraseñas ingresada" role="confirm" data-confirm="#password" data-invalid-confirm="La clave no coincide " placeholder="*Repita la Contraseña"  >

            </div>

            <div class="anote text-right" style="font-size: .9em; margin-top:8px;">* Los campos obligatorios.</div>


            <div class="anote"></div>



            <div class="checkline" style="margin-top:20px" >
                <div class="squaredThree">
                    <label for="termsAcepted" id="terminos">
                        <input type="checkbox" value="" required id="termsAcepted" name="termsAcepted"  />
                        Estoy de acuerdo con los Términos y Condiciones de teleSUR.
                    </label>
                    <a id="terms" style="margin-left:7px;cursor:pointer;"> Leer </a>
                </div>

            </div>
            <div class="anote"></div>
            <div class="checkline">
                <div class="squaredThree">
                    <label for="boletinteleSUR">
                        <input type="checkbox" value="yes" id="boletinteleSUR" name="boletinteleSUR"  />
                        Me gustaría recibir los boletines de teleSUR.
                    </label>
                </div>
            </div>
            <div class="anote"></div>
            <div class="form-group">
                <div class="g-recaptcha" data-sitekey="6Lc4XhETAAAAAG9nIq-sHY0DsagC8py_zNDoW4xr" ></div>
                <p class="alertReg" id="capcha" style="display: none;"></p>
            </div>

            <div ></div>
            <div ></div>
            <div ></div>
            <div class="clear"></div>
            <input type="submit"  value="registrarme" id="registro">
            <input type="submit"  onclick="" value="registrarme1" id="registro1" style="display: none; clear:both">
            <button class="btn btn-danger" href="/index.html" class="cancelForm">Cancelar</button>
        </form>




    </div>
</div>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2-rc.1/js/select2.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        //$(select).select2();
        $('#registration').telesurValidation({
            rule:function(){
                if(grecaptcha.getResponse() == '') {
                    document.getElementById("capcha").innerHTML = "* Debe selecionar el capcha";
                    $("#capcha").show(1000).delay(1500).fadeOut(5000);
                    if($(input).val().length < 0){
                        $(this).parent().find('.flecha-left').remove();
                        $(this).parent().find('.message').remove();
                        $(this).addClass('mas');
                    }
                    return false;
                } else {
                    document.getElementById("capcha").innerHTML = "";
                    return true;
                }
            }
        });
    });
</script>