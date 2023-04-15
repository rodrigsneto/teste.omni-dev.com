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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'frodri91_wp361' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'frodri91' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'GdW$67sF%' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'Hupr4XIfp2u$`wXd5e]92w!@&{9?4QVZtP-r>/7N;Kah<vOpLMO[&Sq?sw1[(HhK' );
define( 'SECURE_AUTH_KEY',  '>p*Z!u1~BrgUj.2!(D:B3mj19]NMdP-yB]6|~%<P]kztB)!-/)W<L/7)7C37a9lD' );
define( 'LOGGED_IN_KEY',    '!Jbp7!E)o)3d]R;y^#l1~X(9vfrN*.SMZ{$> v]9]Q9W4+U,UG_)zQ_V^jj%kj%e' );
define( 'NONCE_KEY',        '1f(W#Q/7B#e=hx8$kP-?V]S|+i~Eg_/n6A_K*,?<d#J@1j5~f$UdQr+Z}qylh[t1' );
define( 'AUTH_SALT',        '=@@fl}UQ_9P&W<](RP#YNlXpvysl7lT~*MQp<W?Lx9|jv]*#}ayuOu5/cE-3|X6X' );
define( 'SECURE_AUTH_SALT', 'sb_nKOzcW/U3)C-%#Mu!~2nX>_-;MYX0l/OH):mvA&tx_?N9dw&M+bD)O6s67Bvf' );
define( 'LOGGED_IN_SALT',   'W*y61M5v0jf @mMN|^2!z i:pJ4:;DSUeSd2ka=y?(M}o/A{FV3v#Ls#IW#-fZHM' );
define( 'NONCE_SALT',       '%#7&?clPT@X <8z#q/M_l/Gt:D4W%tkUdG>=HL!Q1v-97J1Z@:^]caTb|g@~}@nj' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wpjn_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
