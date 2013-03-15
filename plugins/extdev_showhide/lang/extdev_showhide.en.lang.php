<?php
/**
 * Localization file for ExtDev Helper: Show/Hide
 * @author Andrey Matsovkin
 * @copyright Copyright (c) 2011-2013
 * @license Distributed under BSD license.
 */

defined('COT_CODE') or die('Wrong URL');

$L['plu_title'] = 'ExtDev Helper: Show/Hide'; // Title for stand alone

$L['info_desc'] ='Extension for developers that allows extend plugin configuration table with
dynamic parameters hides and shows depend on some selections.';

$L['cfg_track_mode'] = array('Tracking mode (demo/global)','in `Global` mode <strong>ExtDev</strong>
				tracks all plugins config pages for Show/Hide controls.');
$L['cfg_track_mode_params'] = array('Demo mode','Global mode');


$L['cfg_select_#sh'] =array('Test#1 main','select one of values you can see addition parameters related to your selection');
$L['cfg_select_#sh_params'] = array('mode 1','mode 2','mode 3');

$L['cfg_add1_sh_0'] =array('Addition param 1 (mode 1)');
$L['cfg_add2_sh_0'] =array('Addition param 2 (mode 1)');
$L['cfg_add3_sh_1'] =array('Addition param 1 (mode 2)');
$L['cfg_add4_sh_2'] =array('Addition param 1 (mode 3)');

$L['cfg_add5_sh1_1'] =array('Addition param 1 (always hidden)');
$L['cfg_add6_sh1_1'] =array('Addition param 1 (param 2 ON)');

$L['cfg_radio_#sh1'] =array('Test#2 main','Switch <strong>«Yes»</strong> for additional parameter');
$L['cfg_radio_#sh1_params'] =array('Off','On');



$L['edh_admin'] = '«Тестовые» параметры используются здесь просто в качестве демонстрации и не влияют на работу самого <strong>ExtDev</strong>.
Вы можете безбоязненно менять и сохранять их. При изменении значений пареметра «Test#1 главный» или «Test#2 главный» вы увидите изменение
набора дополнительных параметров.';

