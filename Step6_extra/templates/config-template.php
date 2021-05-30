<?php
$dynamic_app_1 = getenv('DYNAMIC_APP_1');
$dynamic_app_2 = getenv('DYNAMIC_APP_2');
$dynamic_app_3 = getenv('DYNAMIC_APP_3');
$static_app_1 = getenv('STATIC_APP_1');
$static_app_2 = getenv('STATIC_APP_2');
$static_app_3 = getenv('STATIC_APP_3');
?>

<VirtualHost *:80>
	ServerName res.labo.ch

	<Proxy "balancer://dynamic">
		BalancerMember 'http://<?php echo "$dynamic_app_1"?>'
        BalancerMember 'http://<?php echo "$dynamic_app_2"?>'
		BalancerMember 'http://<?php echo "$dynamic_app_3"?>'
	</Proxy>

	ProxyPass '/api/animals/' 'balancer://dynamic/'
	ProxyPassReverse '/api/animals/' 'balancer://dynamic/'

	<Proxy "balancer://static">
		BalancerMember 'http://<?php echo "$static_app_1"?>'
        BalancerMember 'http://<?php echo "$static_app_2"?>'
		BalancerMember 'http://<?php echo "$static_app_3"?>'
	</Proxy>

	ProxyPass '/' 'balancer://static/'
	ProxyPassReverse '/' 'balancer://static/'

</VirtualHost>
