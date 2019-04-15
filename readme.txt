=== DCO Shortcodes Menu ===
Contributors: denisco
Tags: shortcode, shortcodes menu, editor, tinymce, insert shortcode
Requires at least: 4.6
Tested up to: 4.9
Stable tag: 1.0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Allow you to add shortcodes menu to the editor

== Description ==
DCO Shortcodes Menu allow you to add all your shortcodes in menu to the editor using a visual interface.
If your shortcode has attributes or work only for certain post types you can set it on shortcode edit page.
Supported attributes: textbox, textarea, dropdown, color picker and custom text to shortcode insert form.

You can use `dco_sm_get_shortcodes_field` filter to change field params programmatically, e.g. for dynamically fill dropdown options.

= Usage =
After installation and activation, you can add and setup your shortcodes on Settings -> DCO Shortcodes Menu page.

== Installation ==
1. Upload `dco-shortcodes-menu` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Screenshots ==

1. Shortcodes admin page
2. Shortcode edit page
3. Add new/Edit field of shortcode
4. Shortcodes menu in the editor
5. Insert shortcode with attributes
6. Inserted shortcode

== Changelog ==

= 1.0.1 =
* Added filter `dco_sm_get_shortcodes_field` for customize field output.
* Corrected i18n

= 1.0 =
* Initial Release