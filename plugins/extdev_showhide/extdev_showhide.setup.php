<?php
/* ====================
[BEGIN_COT_EXT]
Code=extdev_showhide
Name=ExtDev Helper: Show/Hide
Description=Extension development helper to make additional options in plugin settings menu shows/hides depends on some selection
Version=1.0
Date=2012-Oct-03
Author=Andrey Matsovkin
Copyright=Copyright (c) 2011-2012, Andrey Matsovkin
Notes=If your enjoy my plugin please consider donating to help support future developments. Thanks! mailto:macik.spb@gmail.com
Auth_guests=R1
Lock_guests=W2345A
Auth_members=RW1
Lock_members=2345
[END_COT_EXT]

[BEGIN_COT_EXT_CONFIG]
track_mode=02:select:0,1:0:Tracking mode (demo/global)
sep1=05:separator:::Separator
select_#sh=11:select:0,1,2:0:Test#1 main param
sep2=15:separator:::Separator
add1_sh_0=21:string::TestValue1:Test#1 Additional param #1
add2_sh_0=22:string::TestValue2:Test#1 Additional param #2
add3_sh_1=23:radio:0,1:1:Test#1 Additional param #3
add4_sh_2=24:select:on,off:off:Test#1 Additional param #4
sep3=30:separator:::Separator
radio_#sh1=31:radio:0,1:1:Test#2 main param
sep4=32:separator:::Separator
add5_sh1_2=33:string::TestValue3:Never used
add6_sh1_1=34:string::TestValue:Test#2 Additional param #2
[END_COT_EXT_CONFIG]
==================== */

/**
 * ExtDev Helper: Show/Hide plugin for Cotonti CMF
 *
 * @package extdev_showhide
 * @version 1.0
 * @author Andrey Matsovkin
 * @copyright Copyright (c) 2011-2013
 * @license Distributed under BSD license.
Allowed Var types:
var1=11:select:0,1,2,3,4,5,6:3:Description
var2=12:radio:0,1:1:Enable this
var3=13:string::test:Test string
var4=14:callback:cot_get_editors():markitup:Simple callback
var5=15:separator:::Separator
var6=16:range:0,5:1:Range
var7=17:text:0,5:1,2:Text*/

if (!defined('COT_CODE')) { die('Wrong URL ('.array_pop(explode("\\",__FILE__)).').'); }

