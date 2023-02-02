<?php		
		// URL Automática
		$pastaEPagina = explode("/",$_SERVER['PHP_SELF']);
		$pastaDominio = "";

		for($i=0; $i < count($pastaEPagina); $i++){
			if(substr_count($pastaEPagina[$i], ".") == 0){
				$pastaDominio .= $pastaEPagina[$i]."/";
			}
		}

		$dominio = "https://".$_SERVER['HTTP_HOST'].$pastaDominio;

		// URLs
		$urlPagina           = explode("/", $_SERVER['PHP_SELF']); // com .php
		$urlPagina           = end($urlPagina);
		$urlGaleria           = str_replace( '.php', '', $urlPagina ); // sem .php

		// Pega o nome do arquivo/página atual
		if ( $urlPagina == 'index.php' || '') {
			$urlPagina = '';
			$urlCanonical = $dominio;
		} else {
			$urlCanonical = $dominio.$urlPagina;
		}

		if ( $urlPagina == 'index.php' || '') {
			$urlPagina = '';
			$urlCanonicalAmp = $dominio;
		} else {
			$urlCanonicalAmp = $dominio.$urlPagina;
		}