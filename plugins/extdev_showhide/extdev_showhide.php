<?PHP
/* ====================
[BEGIN_COT_EXT]
Hooks=standalone
Tags=example.tpl:
[END_COT_EXT]
==================== */

/**
 * ExtDev Helper: Show/Hide
 *
 * @package extdev_showhide
 * @author Andrey Matsovkin
 * @copyright Copyright (c) 2011-2012
 * @license Distributed under BSD license.
 */

if (!defined('COT_CODE') && !defined('COT_PLUG')) { die('Wrong URL ('.array_pop(explode("\\",__FILE__)).').'); }
$plug_name = 'extdev_showhide';
$base_path = $cfg['plugins_dir']."/$plug_name";
//$inc_path  = "$base_path/inc";
//$js_path   = "$base_path/js";
//$tpl_path  = "$base_path/tpl";
//$ajax_link = "plug.php?r=$plug_name";
//$pl_cfg = $cfg['plugin'][$plug_name];

//require cot_incfile('extdev_showhide', 'plug', 'common');
//$t = new XTemplate(cot_tplfile('extdev_showhide', 'plug'));
//$t = new XTemplate(cot_tplfile('extdev_showhide.edit', 'plug'));


$plugin_body .= 'Plugin installed (file extdev_showhide).<br/>';


?>