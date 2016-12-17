=== Plugin Name ===
Contributors: yamenshahin, eddielee394
Donate link: http://tutorialonline.net/
Tags: membermouse, wordpress, login
Requires at least: 3.0.1
Tested up to: 4.7
Stable tag: 4.7
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Displays custom login forms (Red, Blue, Default) for the Membermouse plugin. 

== Description ==

Using the following shortcodes, you can display membermouse login forms on any post or page.  

[mm-form-c]

Parameter:  
form

Values: 
"Red", "Blue"

Description:  
Determines the type of form to be rendered.  Default, Red custom form or Blue custom form. 

Examples: 
[mm-form-c] will output the default membermouse login form. 
[mm-form-c form="red"] will output the red custom login form.  
[mm-form-c form="blue"] will output the blue custom login form. 

Parameter:  
url

Value: 
Any webpage url.  Accepts both absolute & relative paths. 

Description: 
The url that you'd like the "sign up" link on the login form to direct to. 

Examples:  

[mm-form-c url="/join-us"]
[mm-form-c form="red" url="http://mysite.com/registration"]





== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload `mm-sc.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place `<?php do_action('plugin_name_hook'); ?>` in your templates

== Frequently Asked Questions ==

= Can I use this plugin alone?  =

No.  Membermouse is required to be installed on your site in order for this plugin to work. 

= I'm having a problem with the plugin, do you offer support? =

Currently no support is offered, but if you find a bug feel free to add it as an Issue on the github repo: https://github.com/eddielee394/mm-custom-login-form/issues
 

== Screenshots ==

1. Blue custom form screenshot-1.png. 
2. Red custom login form screenshot-2.png

== Changelog ==

= 1.1 =
* Responsive css fixes
* Read-me updated.  
* Screenshots Added. 

= 1.0 =
* Initial Commit




