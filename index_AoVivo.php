<?php

//URL

$url = 'http://198.7.59.204:6411/status.xsl';

//Pega todo o conteúdo

$dadosSite = file_get_contents($url);

$var1 = explode('Current Song:</td>',$dadosSite);
$title = explode("</tr>",$var1[1]);

?>


<style>
body {margin: 0px;background:#ffffff;}
.corfonte {color:#ffffff; font-size:10pt; display:block; margin-top:10px; font-size: 17px;}

    b {
        float: left;
        margin-top: -1px;
        margin-right: 5px;
        font-weight: bold;
        width: 100%;
    }
    
    #musica {
        color: #ffffff;
        margin-top: 0px;
        width: auto;
        display: block;
        margin-left: 7px;
        font-size: 17px;
    }



</style>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
<title>Status Piemonte Digital</title>

<div>
<div style="height: 40px; max-width:100%; width:auto; font-size: 10pt; font-family: arial; padding: 2px; _padding: 2px; background-color: #666666; border: 3px solid #fff; border-radius: 26px; margin: 0;">
<meta HTTP-EQUIV = "Refresh" CONTENT = "30">
<marquee><span class="corfonte"><b id="musica">Rádio Piemonte Digital - Tocando Agora: </b><?php echo $title[0]; ?></span></marquee>
                                                                   
</div>
</div>

