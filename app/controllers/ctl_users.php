<?php
	defined('MVC_APP') or die ('Permission denied');

	include_once "app/config/db.php";
	require "app/models/mdl_users.php";


	function users_list(){
		$info_guests=getAllGuests();
		include 'app/views/users/page.php';
	}

