<?php

	function carrega_pagina(){
		(isset($_GET['p'])) ? $pagina = $_GET['p'] : $pagina = 'home';
		
		if (file_exists('page_'.$pagina.'.php')): 

			require_once('page_'.$pagina.'.php');			
		
		else:

			require_once('page_home.php');

		endif;
		
	}

