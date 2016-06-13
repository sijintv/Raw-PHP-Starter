<?php
class Session{
	function __construct(){
		session_start();
	}
	
	function distroy(){
		session_unset();
		session_destroy();
	}
}