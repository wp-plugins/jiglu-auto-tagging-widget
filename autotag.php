<?php
/*
Plugin Name: Jiglu Autotag widget
Plugin URI: http://www.jiglu.com
Description: Jiglu Autotag widget
Author: Jiglu.com
Version: 1.0
License: See http://www.jiglu.com for details.
Author URI: http://www.jiglu.com
Last modified: 2007-07-17 18:00pm GMT
*/
function widget_jiglu_autotag_init() {
function widget_jiglu_autotag($args) {
extract($args);
echo $before_widget.$before_title . '' . $after_title; ?>
**** REPLACE THIS LINE WITH JIGLU SCRIPT CODE - SHOULD LOOK LIKE THIS <script type="text/javascript" src="http://nigel-tagging.jiglu.com/widgets/autotag/d8504df01528cbda0115374c09f43b5d"></script>*****
<? echo $after_widget;
}
register_sidebar_widget('Jiglu Autotag widget', 'widget_jiglu_autotag');}
add_action('plugins_loaded', 'widget_jiglu_autotag_init');
?>
