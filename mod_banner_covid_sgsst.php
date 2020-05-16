<?php

// no direct access
defined('_JEXEC') or die('Restricted access');

jimport( 'joomla.application.module.helper' );
jimport( 'joomla.html.parameter' );

$arl_banner_covid_sgsst_title = $params->get('arl_banner_covid_sgsst_title', '');
$arl_banner_covid_sgsst_text = $params->get('arl_banner_covid_sgsst_text', '');

require(JModuleHelper::getLayoutPath('mod_banner_covid_sgsst'));

?>