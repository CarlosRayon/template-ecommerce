<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
 */
defined('SHOW_DEBUG_BACKTRACE') or define('SHOW_DEBUG_BACKTRACE', true);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
 */
defined('FILE_READ_MODE') or define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') or define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE') or define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE') or define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
 */
defined('FOPEN_READ') or define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE') or define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE') or define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE') or define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE') or define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE') or define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT') or define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT') or define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
 */
defined('EXIT_SUCCESS') or define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR') or define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG') or define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE') or define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS') or define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') or define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT') or define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE') or define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN') or define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX') or define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code

//OWN CONSTANTS

defined('OWN_ENVIRONMENT') or define('OWN_ENVIRONMENT', 'developing'); // developing   or  production

//URLS
defined('OWN_BASEURL_DEV') or define('OWN_BASEURL_DEV', 'http://localhost/template-ecommerce/');
defined('OWN_BASEURL_PDT') or define('OWN_BASEURL_PDT', '');

//DEVELOPING DATABASE
defined('OWN_DBDRIVER') or define('OWN_DBDRIVER', 'mysqli');

defined('OWN_HOSTNAME_DEV') or define('OWN_HOSTNAME_DEV', 'localhost');
defined('OWN_USERNAME_DEV') or define('OWN_USERNAME_DEV', 'root');
defined('OWN_PASSWORD_DEV') or define('OWN_PASSWORD_DEV', '');
defined('OWN_DATABASE_DEV') or define('OWN_DATABASE_DEV', 'template_ecommerce');

//PRODUCTION DATABASE

defined('OWN_HOSTNAME_PDT') or define('OWN_HOSTNAME_PDT', 'localhost');
defined('OWN_USERNAME_PDT') or define('OWN_USERNAME_PDT', 'root');
defined('OWN_PASSWORD_PDT') or define('OWN_PASSWORD_PDT', '');
defined('OWN_DATABASE_PDT') or define('OWN_DATABASE_PDT', 'template_ecommerce');

//METAS
defined('OWN_METAS_DESCRIPTION') or define('OWN_METAS_DESCRIPTION', 'template-eccomerce');
defined('OWN_METAS_AUTOR') or define('OWN_METAS_AUTOR', 'Carlos Rayon ALvarez');
defined('OWN_METAS_TITLE') or define('OWN_METAS_TITLE', 'Template Ecommerce');

//ASSETS LINKS
defined('OWN_ASSETS_LINKS_BOOTSTRAP') or define('OWN_ASSETS_LINKS_BOOTSTRAP', 'assets/node_modules/bootstrap/dist/css/bootstrap.min.css');
defined('OWN_ASSETS_LINKS_MAIN') or define('OWN_ASSETS_LINKS_MAIN', 'assets/css/main.css');
defined('OWN_ASSETS_LINKS_SWEETALERT2') or define('OWN_ASSETS_LINKS_SWEETALERT2', 'assets/node_modules/sweetalert2/dist/sweetalert2.min.css');
defined('OWN_ASSETS_LINKS_ANIMATE') or define('OWN_ASSETS_LINKS_ANIMATE', 'assets/node_modules/animate.css/animate.min.css');
defined('OWN_ASSETS_LINKS_OWLCAROUSEL') or define('OWN_ASSETS_LINKS_OWLCAROUSEL', 'assets/node_modules/owl.carousel/dist/assets/owl.carousel.min.css');
defined('OWN_ASSETS_LINKS_OWLCAROUSELTHEME') or define('OWN_ASSETS_LINKS_OWLCAROUSELTHEME', 'assets/node_modules/owl.carousel/dist/assets/owl.theme.default.min.css');

//ASSETS SCRIPS
defined('OWN_ASSETS_SCRIPS_BOOTSTRAP') or define('OWN_ASSETS_SCRIPS_BOOTSTRAP', 'assets/node_modules/bootstrap/dist/js/bootstrap.min.js');
defined('OWN_ASSETS_SCRIPS_JQUERY') or define('OWN_ASSETS_SCRIPS_JQUERY', 'assets/node_modules/jquery/dist/jquery.min.js');
defined('OWN_ASSETS_SCRIPS_PROPPER') or define('OWN_ASSETS_SCRIPS_PROPPER', 'assets/node_modules/popper/dist/popper.min.js');
defined('OWN_ASSETS_SCRIPS_SWEETALERT2') or define('OWN_ASSETS_SCRIPS_SWEETALERT2', 'assets/node_modules/sweetalert2/dist/sweetalert2.all.min.js');
defined('OWN_ASSETS_SCRIPS_OWLCAROUSEL') or define('OWN_ASSETS_SCRIPS_OWLCAROUSEL', 'assets/node_modules/owl.carousel/dist/owl.carousel.min.js');
defined('OWN_ASSETS_SCRIPSMAIN') or define('OWN_ASSETS_SCRIPS_MAIN', 'assets/js/main.js');

//MODO MANTENIMIENTO
defined('OWN_MAINTENANCE_MODE') or define('OWN_MAINTENANCE_MODE', FALSE);
