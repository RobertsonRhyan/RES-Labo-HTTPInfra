<?php

$dynamic_app = getenv('DYNAMIC_APP');
$static_app = getenv('STATIC_APP');
?>

<VirtualHost *:80>
	ServerName res.labo.ch
	ProxyPass '/api/animals/' 'http://<?php echo "$dynamic_app"?>/'
	ProxyPassReverse '/api/animals/' 'http://<?php echo "$dynamic_app"?>/'

	ProxyPass '/' 'http://<?php echo "$static_app"?>/'
	ProxyPassReverse '/' 'http://<?php echo "$static_app"?>'
</VirtualHost>