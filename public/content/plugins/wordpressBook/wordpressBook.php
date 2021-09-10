<?php
/**
 * Plugin Name: wordpressBook
 * Author: Pat
 * Description: Découverte des plugins wordpress
 */
use wordpressBook\Api;
use wordpressBook\Plugin;

require __DIR__ . '/vendor-wordpressBook/autoload.php';
$wordpressBook = new Plugin();
// DOC WP PLUGININ activation "hook" : https://developer.wordpress.org/reference/functions/register_activation_hook/
register_activation_hook(
    __FILE__,
    [$wordpressBook, 'activate'],
);
register_deactivation_hook(
    __FILE__,
    [$wordpressBook, 'deactivate'],
);
$api = new Api();
