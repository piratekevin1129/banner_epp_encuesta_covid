<?php

// no direct access
defined('_JEXEC') or die;

// get membership
$user = JFactory::getUser();

//Inicializamos las variables de sesion
$session = JFactory::getSession();

$tipo = 3;
?>
<link href="/modules/mod_banner_covid_sgsst/assets/styles.css" rel="stylesheet" type="text/css" />

<?php if($tipo==1){ ?>
    <!--Banner entrega de EPP-->
    <div id="banner-entregas-epp-covid-content">
        <a href="/index.php/entrega-de-epp-covid19">
            <div id="banner-entregas-epp-covid">
                <div id="banner-entregas-epp-covid-texto">
                    <h6>infórmese sobre el proceso de</h6>
                    <h1>ENTREGA DE ELEMENTOS</h1>
                    <h1>DE PROTECCIÓN PERSONAL</h1>
                    <h6>decreto 488 del año 2020</h6>
                    <button class="ver-entregas-banner-btn">VER ENTREGAS</button>
                </div>
                <div id="banner-entregas-epp-covid-img"></div>
            </div>
        </a>
    </div> 
<?php }else if($tipo==2){?>
    <!--Banner encuesta-->
    <div id="banner-encuesta-covid-content">
        <a href="/">
            <div id="banner-encuesta-covid">
                <div id="banner-encuesta-covid-texto">
                    <h6>Encuesta</h6>
                    <h1>EXPOSICIÓN A RIESGO DE</h1>
                    <h1>CONTAGIO SARS COV-2</h1>
                    <h6>(COVID-19)</h6>
                    <button class="ver-encuesta-banner-btn">LLENAR ENCUESTA</button>
                </div>
                <div id="banner-encuesta-covid-img"></div>
            </div>
        </a>
    </div> 
<?php }else if($tipo==3){?>
    <!--Banner entrega de EPP y encuesta-->
    <div id="banner-encuesta-y-epp-covid-content">
        <a href="/">
            <div id="banner-encuesta-covid-2">
                <div id="banner-encuesta-covid-texto-2">
                    <h6>Encuesta</h6>
                    <h1>EXPOSICIÓN A RIESGO DE</h1>
                    <h1>CONTAGIO SARS COV-2</h1>
                    <h6>(COVID-19)</h6>
                    <button class="ver-encuesta-banner-btn">LLENAR ENCUESTA</button>
                </div>
            </div>
        </a>
        <a href="/index.php/entrega-de-epp-covid19">
            <div id="banner-entregas-epp-covid-2">
                <div id="banner-entregas-epp-covid-texto-2">
                    <h6>infórmese sobre el proceso de</h6>
                    <h1>ENTREGA DE ELEMENTOS</h1>
                    <h1>DE PROTECCIÓN PERSONAL</h1>
                    <h6>decreto 488 del año 2020</h6>
                    <button class="ver-entregas-banner-btn">VER ENTREGAS</button>
                </div>
            </div>
        </a>
    </div> 
<?php } ?>

