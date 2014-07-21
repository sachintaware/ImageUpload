?php
/*
 * jQuery File Upload Plugin PHP Example 5.14
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2010, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */
ini_set('display_errors',0);
define('HTTP_SERVER', "http://".$_SERVER["HTTP_HOST"]); // eg, http://localhost - should not be empty for productive servers
define('HTTPS_SERVER', ''); // eg, https://localhost - should not be empty for productive servers
define('BASE_URL', HTTP_SERVER.'/');
 if(HTTP_SERVER == 'http://localhost'){
	define('DOCUMENT_SERVER', $_SERVER['DOCUMENT_ROOT'].'/abcd/');
}else{
	define('DOCUMENT_SERVER', $_SERVER['DOCUMENT_ROOT'].'/'); 
}
require(DOCUMENT_SERVER.'includes/applicationTop.php');

error_reporting(E_ALL | E_STRICT);
require('UploadHandler.php');
$upload_handler = new UploadHandler();

?>
