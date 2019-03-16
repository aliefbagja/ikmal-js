<? php
echo '$domainuing = array('www.bosball.com', 'www.skytivi.com', 'www.suntivi.com', 'www.noztv.com', 'www.tvsakeena.com', 'www.tvkicks.com', 'www.bisatv.com', 'www.soniktv.com', 'www.tvjava.com', 'www.tvfifa.com', 'www.tvball7.com', 'www.tvball7.xyz', 'www.indiostv.com',  'www.livebal.com', 'www.tvanda.com', 'www.shootgol.net', 'www.boomingtv.com', 'www.tvronaldo.com', 'www.tvnasional.com', );';
echo 'if (!isset($_SERVER['HTTP_REFERER']))';
echo '{';
echo 'header("Location: http://www.lenzatv.com/");';
echo 'die();';
echo '}';
echo 'else if (isset($_SERVER['HTTP_REFERER']))';
echo '{';
echo '$izinkan=parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST);';
echo 'if (!in_array($izinkan, $domainuing))';
echo '{';
echo 'header("Location: http://www.lenzatv.com/");';
echo 'die();	}';
echo '}';
?>
