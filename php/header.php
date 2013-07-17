<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="Short description here..." />
<meta name="keywords" content="pigeontech, dead-simple-cms" />
<meta name="robots" content="all,follow" />
<link href="css/screen.css" type="text/css" rel="stylesheet" media="screen,projection" />
<link rel="stylesheet" type="text/css" href="style.css">
<title>Atomic Age Theater</title>
<script src="js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script src="js/header.js" type="text/javascript" charset="utf-8"></script>
<?php
// Where it says $_REQUEST['edit_mode'], replace edit_mode with a custom key that only you
// know about.  For example, $_REQUEST['lksjfdsfdlkjf'].  Then, to edit a page, append
// it to the end of URL, like http://example.com/page1&lksjfdsfdlkjf  .  Don't forget the & sign.
// It's not the most elegant system in the world, but it works, and it's simple.
// Also note that 'home' is specified as the default home page, so it'll load home.txt  Change
// that if you want.

$folder = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);
$url    = sprintf('http://%s%s', $_SERVER['SERVER_NAME'], $folder);
if (!isset($_GET['id'])) { $id = 'home'; } else { $id = basename($_GET['id']); }
isset($_REQUEST['aatedit']) ? require_once('edit_header.php') : require_once('view_header.php') ;
?>
</head>
<body>

<div id="header">
</div>