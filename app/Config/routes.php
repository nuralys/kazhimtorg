<?php

	Router::connect('/admin/users/:action', array('controller' => 'users','admin' => true));
	Router::connect('/admin', array('controller' => 'pages', 'action' => 'index', 'admin' => true));
	Router::connect('/page/*', array('controller' => 'pages', 'action' => 'index'));
	Router::connect('/category', array('controller' => 'categories', 'action' => 'index'));
	Router::connect('/category/*', array('controller' => 'categories', 'action' => 'view'));
	Router::connect('/search/*', array('controller' => 'products', 'action' => 'search'));
	Router::connect('/news/view/*', array('controller' => 'news', 'action' => 'view'));
	Router::connect('/news/*', array('controller' => 'news', 'action' => 'index'));
	Router::connect('/', array('controller' => 'pages', 'action' => 'home'));
	Router::connect('/product/*', array('controller' => 'products', 'action' => 'view'));
/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
