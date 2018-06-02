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
/*Resolve a instalação e atualização de plugins */
define('FS_METHOD', 'direct');

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */

define('DB_NAME', 'recanto_db');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'recanto_site');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'Sh84632796');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'cvUI2s-!zq9]k31KIV#5:dB7zJ.^2*k`+sh[^_;9LG%NGp@ii@/(YK^5Wua)/l/[');
define('SECURE_AUTH_KEY',  '}v~<=`<?(Di,[C2j/@tcF.^F|JJY=Jj~w%V{gpSLLiu!c@~Kqj1~xb_1|Lm1q6!E');
define('LOGGED_IN_KEY',    'Lvj{M%r;-G;glJ{(Yo5=NK2,&<|/[:bl!..)4}^sZ_ yVOG<5{IYXT_H($WaUT4C');
define('NONCE_KEY',        'RLHpp;E=*s{j?ghmWCq;6P1g7F<)pO)|5sxkN1McaQNh3uY8^L<xnUd+{]0S*^C#');
define('AUTH_SALT',        'Cn)ua-RtiKjz3!.=w3}YoR=1ke8X^~7q7t/4#_AaEBXwc^ZA#fbfoU(WC1sZQt$|');
define('SECURE_AUTH_SALT', 'c!:^.wjxZf^c*rzT^Fv6qL:r0B^L5.QH#U0!p@2;l&aC(($uN`-# 7.)a$wDaPVr');
define('LOGGED_IN_SALT',   '1N)1$yZn<tMvI s;@Pz{I+Me!nY1i*E6`.83#ig:Qp$ps=G>l;o<-nIds-2O+VBW');
define('NONCE_SALT',       'Td]^g3#NvL,jyUExCcE:ly0ZFxftx0zs{.BPWK|[~b>~>vrCi_SR$7{t}sq`.Qoa');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
