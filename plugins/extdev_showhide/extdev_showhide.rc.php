<?PHP
/* ====================
[BEGIN_COT_EXT]
Hooks=rc
Order=50
[END_COT_EXT]
==================== */

/**
 * Header file for ExtDev Helper: Show/Hide plugin
 *
 * @package extdev_showhide
 * @author Andrey Matsovkin
 * @copyright Copyright (c) 2011-2012
 * @license Distributed under BSD license.
 */

if (!defined('COT_CODE') && !defined('COT_PLUG')) { die('Wrong URL ('.array_pop(explode("\\",__FILE__)).').'); }

$plug_name = 'extdev_showhide';

if (!defined('EXTDEV_OFF') // other plugins can switch off this extension
	&& defined('COT_ADMIN') && $_GET['n']=='edit' && $_GET['o']=='plug' && $_GET['m']=='config' // only on config page
	&& ($_GET['p']==$plug_name || $edh_cfg['track_mode']))
{

	define('EXTDEV_SHOWHIDE',true);

	global $edh_cfg;
	$edh_cfg = $cfg['plugin']['extdev_showhide'];
	// normalize suffixed param names
	$edh_cfg = array_combine(preg_replace("/_#?sh\d*(_.*)?/", '', array_keys($edh_cfg)), array_values($edh_cfg));

	if ($_GET['p']==$plug_name ) $adminhelp .= $L['edh_admin'];
	cot_rc_link_footer($cfg['plugins_dir'].'/'.$plug_name.'/js/'.$plug_name.'.js');
}

?>