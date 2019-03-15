<?php
$domainuing = array('www.bosball.com', 'www.skytivi.com', 'www.suntivi.com', 'www.noztv.com', 'www.tvsakeena.com', 'www.tvkicks.com', 'www.bisatv.com', 'www.soniktv.com', 'www.tvjava.com', 'www.tvfifa.com', 'www.tvball7.com', 'www.tvball7.xyz', 'www.indiostv.com',  'www.livebal.com', 'www.tvanda.com', 'www.shootgol.net', 'www.boomingtv.com', 'www.tvronaldo.com', 'www.tvnasional.com', );
if (!isset($_SERVER['HTTP_REFERER']))
{
	header("Location: http://www.lenztv.com/");
die();
}
else if (isset($_SERVER['HTTP_REFERER']))
{
	$izinkan=parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST);
	if (!in_array($izinkan, $domainuing))
	{
		header("Location: http://www.lenztv.com/");
die();
	}
}
?>
