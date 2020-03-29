<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'hidroprint' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'v6JG%!(RydwV$g%kfpM!:xES~wg.W/-d%cy]Id:|HJ.yb_ZMbjxaSfe~eS+NS[E$' );
define( 'SECURE_AUTH_KEY',  '(b!;Smp0mI5CIP[RyiMWkUjHz_nXi|zSa/u5r,+ G;vRkKIC|gKXuaJKJ0T7Vy63' );
define( 'LOGGED_IN_KEY',    'Rt$T&Z&EFj/f<fgAR%}Om@ieq1cmnK;QBjYg,|bdt)|6jpqPOw1oIOAIF`b#6 cG' );
define( 'NONCE_KEY',        '2TMz[<p&v1!q_,R(n]muOXlm6qi=,(?E4P(5 tFVbl}]FRto90LZmT{DRg;@o^pQ' );
define( 'AUTH_SALT',        'e!Y[uZT~jcCoXi`&B!T^Ridiu(k+4C*Fm_8Es}xcuZ9J,a7ODcCN3r&vcLO ?[HT' );
define( 'SECURE_AUTH_SALT', ',1F@3x-WDJGQN^H*36+*v]^;yZ}x8(kyIdWB-RnI4{w}vx 8Pu?Qa,re4,VQoXS@' );
define( 'LOGGED_IN_SALT',   'I1}M>E+zy!Oh<+<@?Nz6DD<=aEPSdv~c2Y< 8~@A;Ml:NNe%?Abvm|F2@jbUOK$y' );
define( 'NONCE_SALT',       'Z@O$9#f,F+BZ&@m8pFDCEK+0R4(JgFho1Aw4E=6,8eB<XY@dUXj?uPmshbDt3Y[0' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'hp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
