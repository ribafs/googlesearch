<?php
/**
* @module Percurso
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @author - Ribamar FS - 11/2018
*/

defined('_JEXEC') or die('Restricted access');
$domain = $params->get( 'domain' );
?>
<!-- https://www.clubedohardware.com.br/artigos/redes/colocando-um-mecanismo-de-busca-em-seu-site-r34327/ -->
<FORM class="form-inline" method="GET" action="http://www.google.com/search" target="_blank">
<div class="form-group">
<input type="hidden" name="sitesearch" value="<?=$domain?>">
<input style="height:20px" class="form-control" type="text" name="q" size="20" placeholder="Pesquisar...">
</div>
</FORM>

