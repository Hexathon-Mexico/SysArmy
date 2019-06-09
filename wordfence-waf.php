<?php
// Before removing this file, please verify the PHP ini setting `auto_prepend_file` does not point to this.

// This file was the current value of auto_prepend_file during the Wordfence WAF installation (Wed, 17 Oct 2018 17:42:39 +0000)
if (file_exists('/var/www/aulasistemas/wordfence-waf.php')) {
	include_once '/var/www/aulasistemas/wordfence-waf.php';
}
if (file_exists('/var/www/aulasistemas/wp-content/plugins/wordfence/waf/bootstrap.php')) {
	define("WFWAF_LOG_PATH", '/var/www/aulasistemas/wp-content/wflogs/');
	include_once '/var/www/aulasistemas/wp-content/plugins/wordfence/waf/bootstrap.php';
}
?>