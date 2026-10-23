<?php
error_reporting(E_ALL | E_NOTICE);
date_default_timezone_set("America/New_York");
define('GRAPH_FONT', dirname(__FILE__) . '/VeraBd.ttf');
define('SVG_FONT', 'Verdana');
define('DEFAULT_COLORSCHEME', 'dark');
define('SVG_DEPTH_SCALING', 1);
$locale = 'en_US.UTF-8';
$language = 'en';
$iface_list = array('mynetworkdevice');
$iface_title['mynetworkdevice'] = ' External';
$vnstat_bin = '/usr/bin/vnstat';
$data_dir = '/var/lib/vnstat';
$_source_format = 'json';
$graph_format = 'svg';
$byte_notation = null;
$_graph_list = array('large', 'small', 'none');
?>
