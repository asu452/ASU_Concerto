<?php
//require 'connect.inc.php';

function download_feed($path) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,$path);
	curl_setopt($ch, CURLOPT_FAILONERROR,1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch, CURLOPT_TIMEOUT,15);
	$retValue = curl_exec($ch);
	curl_close($ch);
	return $retValue;
	
}

$sXML = download_feed('http://twitter.com/statuses/user_timeline/AthensStUniv.rss');
$oXML = new SimpleXMLElement($sXML);
foreach($oXML->channel->item as $oDocuments) {
	$title = $oDocuments->title;
	$url = $oDocuments->link;
	
	echo $title . "<br>" . $url . "<br><br>";
}
 
?>
