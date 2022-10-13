<?php


define( 'DB_NAME', 'wordpress');

define( 'DB_USER', 'jkaczmar');


define( 'DB_PASSWORD', '4040');

define( 'DB_HOST', 'mariadb' );

define( 'DB_CHARSET', 'utf8');


define( 'DB_COLLATE', '');

define('AUTH_KEY',         'n|V=#2?N$t+s[}k1SaW.s;zY+dt($qMWl/[]8l8}rITm<nCj0-g[(HxoZA}-WQIO');
define('SECURE_AUTH_KEY',  '+(! YgF+7-S_do)=EXu+dY@G~#iEVhb6)=`1a7qJ^+Gw(9h8R`)mGa%myS_}t>jV');
define('LOGGED_IN_KEY',    'ELE5UX0M=7{AKflpXbwKmKm&B2@|6Fm+A(V4e-07>(DQh+sx*|% tNUil98/OzQO');
define('NONCE_KEY',        'XVMa_evzR-d&%7O!$tS{leKem.|+c`}|f,i%m,J->B&eXMeTmkFKZ= wi{V`qk,{');
define('AUTH_SALT',        'A(nHPx/eB];L.$gVQUh {g/5T+%>ZY-;:93_h=cM5a}&fdmk@QZGt3rihhK<f_7#');
define('SECURE_AUTH_SALT', 'LF`#l<0@-^,X[++^rurX5LtR +Xo&l.U|67YSpvLg!UJQi;zU?b/T!eJKY-;o7%h');
define('LOGGED_IN_SALT',   'MYUylRecSJ2>l[6z x<4g;Au&B:>/WA*nw>uqufqKwpW$mVx&QyEDjbq|~%QLizv');
define('NONCE_SALT',       '[Txjz{ZolOC/wdO!=ZtcSi(Asf{zn{UW+9Va4Udn^ETu{@4-+`{ eG^w24HZsHrF');

$table_prefix = 'wp_';

define( 'WP_DEBUG', false);

if ( !defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', '/var/www/html/wordpress' );
}

require_once ABSPATH . 'wp-settings.php';

?>
