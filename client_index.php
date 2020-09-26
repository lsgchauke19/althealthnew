<?php 
	namespace Client {
			class Field {
				private $name;
				private $message = '';
				private $hasError = false;
				
				public function __construct($name, $message = ''){
					$this->name = $name;
					$this->message = $message;
				}
				
				public function getName()		{return $this->name;}
				public function getMessage()	{return $this->message;}
				public function hasError()		{return $this->hasError;}
				
				//setting error messages
				
				public function setErrorMessage($message) {
					
					$this->message = $message;
					$this->hasError = true;
				}
				
				public function clearErrorMessage() {
					
					$this->message = '';
					$this->hasError = false;
					
				}
				
				public function getHTML() {
					
					$message = htmlspecialchars($this->message);
					if()
					
				}
				





























	}
?>