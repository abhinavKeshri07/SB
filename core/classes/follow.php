<?php
	class Follow extends User {
		protected $connect;
		function __construct($connect){
			$this->connect = $connect;
		}


	}
?>
