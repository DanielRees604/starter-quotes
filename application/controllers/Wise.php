<?php
	class Wise extends Application {
		function __construct() {
			parent::__construct();
		}
		//last link loll
		function bingo() {
			$this->data['pagebody'] = 'justone';
			$record  = $this->quotes->get(6);
			$this->data = array_merge($this->data, $record);
			$this->render();
		}
	}
?>