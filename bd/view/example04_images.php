<?php



$html = '
<style>
table { border-collapse: collapse; margin-top: 0; text-align: center; }
td { padding: 0.5em; }
h1 { margin-bottom: 0; }z
</style>
<h1>mPDF Images</h1>

<table>
<tr>
<td>GIF</td>
<td>JPG</td>
<td>JPG (CMYK)</td>
<td>PNG</td>
<td>BMP</td>
<td>WMF</td>
<td>SVG</td>
</tr>
<tr>
<td><img style="vertical-align: top" src="tiger.gif" width="80" /></td>
<td><img style="vertical-align: top" src="tiger.jpg" width="80" /></td>
<td><img style="vertical-align: top" src="tigercmyk.jpg" width="80" /></td>
<td><img style="vertical-align: top" src="tiger.png" width="80" /></td>
<td><img style="vertical-align: top" src="tiger.bmp" width="80" /></td>
<td><img style="vertical-align: top" src="tiger2.wmf" width="80" /></td>
<td><img style="vertical-align: top" src="tiger.svg" width="80" /></td>
</tr>
</tr>
<tr>
<td colspan="7" style="text-align: left" ><h4>Opacity 50%</h4></td>
</tr>
<tr>
<tr>
<td><img style="vertical-align: top; opacity: 0.5" src="tiger.gif" width="80" /></td>
<td><img style="vertical-align: top; opacity: 0.5" src="tiger.jpg" width="80" /></td>
<td><img style="vertical-align: top; opacity: 0.5" src="tigercmyk.jpg" width="80" /></td>
<td><img style="vertical-align: top; opacity: 0.5" src="tiger.png" width="80" /></td>
<td><img style="vertical-align: top; opacity: 0.5" src="tiger.bmp" width="80" /></td>
<td><img style="vertical-align: top; opacity: 0.5" src="tiger2.wmf" width="80" /></td>
<td><img style="vertical-align: top; opacity: 0.5" src="tiger.svg" width="80" /></td>
</tr>
</table>

';
//==============================================================
//==============================================================
//==============================================================
include("../mpdf.php");

$mpdf=new mPDF('c'); 

$mpdf->WriteHTML($html);

$mpdf->Output();
exit;
//==============================================================
//==============================================================
//==============================================================
//==============================================================
//==============================================================


?>