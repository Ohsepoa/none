<?php
// Module Info
if( defined( 'FOR_XOOPS_LANG_CHECKER' ) ) $mydirname = 'd3none' ;
$constpref = '_MI_' . strtoupper( $mydirname ) ;

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( $constpref.'_LOADED' ) ) {

define( $constpref.'_LOADED' , 1 ) ;

// The name of this module
define($constpref."_NAME","Página em branco");

// A brief description of this module
define($constpref."_DESC","Mostra uma página em branco.");

}

?>
