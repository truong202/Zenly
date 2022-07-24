<?php
session_start();
define('_DIR_ROOT', __DIR__);
if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
    $web_root = 'https://' . $_SERVER['HTTP_HOST'];
} else {
    $web_root = 'http://' . $_SERVER['HTTP_HOST'];
}
$folder = str_replace(strtolower($_SERVER['DOCUMENT_ROOT']), '', strtolower(_DIR_ROOT));
$web_root = trim($web_root . '/' . trim($folder, '\\'), '/');
define('_WEB_ROOT', $web_root);

require_once('mvc/Bridge.php');
new App();
