<?php
  	define('MVC_APP','APP');

    //muestra una pagina concreta
  	if (isset($_GET['action']) && $_GET['action'] == 'users') {
		require "app/controllers/ctl_users.php";
  		users_list();

    //Si no existe GET o POST -> muestra la pagina principal
	} else {
  		require "app/controllers/ctl_main.php";
  		start_app();
	}
