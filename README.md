ExtDev_showhide
===============

Plugin for Cotonti CMF. Designed as helper for Cotonti Extension (plugin) developers.

Description
-----------

Extends standard interface for plugin configuration screen. 
Allows to setup some parameters to be shown/hidden depends on some parameters selection.

Developer can use it as whole plugin or just as JS script copy.

Features
--------

* Improve usability of Extension configuration screens
* Simple integration to existing plugins
* 2 ways to integrate (as supplymentary plugin or as JS script)

Demo page
---------

See it here: http://static.galaxyhost.org/cotonti/showhide.swf.html

### Comments

Plugin works out from the box. You can see new controls on plugin configuration page.


### How extension works

Hooks only on Extension's own configuration page (switch to `global` mode for tracking all Extensions 
in system). And preprocess plugin parameters to create show/hide controls.

To enable show/hide controls you must rename existing parameters of your Extension with this rule:

Control parameter must be named with «_#sh» suffix: param_name_#sh .
Controlling params must be named with «_sh_$» suffix, where $ sign changed for 
Control parameter value. As example: param_name_sh_value

For example (existing parameters):

    jqueryui=01:radio:0,1:1:Use jQueryUI
    jquery_path=02:string::./js/jqueryui.js:Path to jQueryUI lib

Modified parameters:

    jqueryui_#sh=01:radio:0,1:1:Use jQueryUI
    jquery_path_sh_1=02:string::./js/jqueryui.js:Path to jQueryUI lib

In this example second parameter «jquery_path_sh_1» will be shown only when we selected 
jqueryui__#sh as «Yes»

By default extension tracks controls only on own config (testing) page.
If you want to enable show/hide controls in you plugin - enables `Global` mode.


Install
-------

* Unpack, copy files to root folder of your site.
* Install via Admin → Extensions menu (`Administration panel → Extensions`)
* If you plan to use it as «supplementary» for your own plugins - select `global` mode in 
config (`Administration panel → Extensions → ExtDev_showhide → Configuration`)
and rename Config parameters in you plugin (see below).

### Comments

To use this Extension as helper for your own plug you must add (or rename existing ones) 
parameters of your Extension. See rules for naming in `How extension works` section.

Also you can not to install this plug and only use `extdev_showhide.js` in your plugin.

References
----------

* [Cotonti.com](http://Cotonti.com/) -- Home of Cotonti CMF


