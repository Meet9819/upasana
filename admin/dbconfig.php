<?php

	$DB_HOST = 'localhost';
	$DB_USER = 'upasahgv_ngo';
	$DB_PASS = 'loveyoudad9820102993';
	$DB_NAME = 'upasahgv_ngo';
	
	try{
		$DB_con = new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}",$DB_USER,$DB_PASS);
		$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
	 

