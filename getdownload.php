<?php
include("common.php");
include("dbparser.php");

if(isset($_GET["id"])) {
		
	$csv = get_csv_entry($_GET["id"]);
if(strpos($csv[DOWNLOAD_URL],"vitadb.rinnegatamante.it") !== false )//workaround rinne being a cunt	
		$download = "https://vitadb.069420.xyz/".$csv[DOWNLOAD_URL];
	else
		$download = get_download($csv);
	echo("<a href=\"".$download."\">Redirecting.</a>");
	header("Referrer-Policy: no-referrer"); /*Bypass rin firewall*/
	header("Location: ".$download);
}

?>