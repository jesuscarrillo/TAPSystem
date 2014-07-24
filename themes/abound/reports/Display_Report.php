<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

include_once('class/tcpdf/tcpdf.php');
include_once("class/PHPJasperXML.inc.php");

include_once ('setting.php');

function Generar_Reporte($Reporte,$Parametro,$Visualizacion){
$xml =  simplexml_load_file($Reporte.".jrxml");

$PHPJasperXML = new PHPJasperXML("en","TCPDF");
$PHPJasperXML->debugsql=false;
$PHPJasperXML->arrayParameter=array("idtap"=>$Parametro);
$PHPJasperXML->xml_dismantle($xml);

$PHPJasperXML->transferDBtoArray("tapserver.local","tap3","Software2014","tap3");
$PHPJasperXML->outpage($Visualizacion);    //page output method I:standard output  D:Download file
}

?>
