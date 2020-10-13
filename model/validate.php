<?php
namespace Register {
    class Validate {
        private $fields;

        public function __construct() {
            $this->fields = new Fields();
        }

        public function getFields() {
            return $this->fields;
        }

        // Validate a generic text field
        public function text($name, $value,
                $required = true, $min = 1, $max = 255) {

            // Get Field object
            $field = $this->fields->getField($name);

            // If field is not required and empty, remove errors and exit
            if (!$required && empty($value)) {
                $field->clearErrorMessage();
                return;
            }

            // Check field and set or clear error message
            if ($required && empty($value)) {
                $field->setErrorMessage('Required.');
            } else if (strlen($value) < $min) {
                $field->setErrorMessage('Too short.');
            } else if (strlen($value) > $max) {
                $field->setErrorMessage('Too long.');
            } else {
                $field->clearErrorMessage();
            }
        }

        // Validate a field with a generic pattern
        public function pattern($name, $value, $pattern, $message,
                $required = true) {

            // Get Field object
            $field = $this->fields->getField($name);

            // If field is not required and empty, remove errors and exit
            if (!$required && empty($value)) {
                $field->clearErrorMessage();
                return;
            }

            // Check field and set or clear error message
            $match = preg_match($pattern, $value);
            if ($match === false) {
                $field->setErrorMessage('Error testing field.');
            } else if ($match != 1) {
                $field->setErrorMessage($message);
            } else {
                $field->clearErrorMessage();
            }
        }
		
		 public function id($name, $value, $required = true) {
            $field = $this->fields->getField($name);
            $this->text($name, $value, $required);
            if ($field->hasError()) { return; }

            
            $message = 'Invalid ID.';
           
        }
		
		public function hometelephone($name, $value, $required = false) {
            $field = $this->fields->getField($name);

            // Call the text method and exit if it yields an error
            $this->text($name, $value, $required);
            if ($field->hasError()) { return; }

            // Call the pattern method to validate a phone number
            $pattern = '/^\d{3}-\d{3}-\d{4}$/';
            $message = 'Invalid Home telephone.';
            $this->pattern($name, $value, $pattern, $message, $required);
        }
		
		public function worktelephone($name, $value, $required = false) {
            $field = $this->fields->getField($name);

            // Call the text method and exit if it yields an error
            $this->text($name, $value, $required);
            if ($field->hasError()) { return; }

            // Call the pattern method to validate a phone number
            $pattern = '/^\d{3}-\d{3}-\d{4}$/';
            $message = 'Invalid Work telephone.';
            $this->pattern($name, $value, $pattern, $message, $required);
        }




        public function mobile($name, $value, $required = false) {
            $field = $this->fields->getField($name);

            // Call the text method and exit if it yields an error
            $this->text($name, $value, $required);
            if ($field->hasError()) { return; }

            // Call the pattern method to validate a phone number
            $pattern = '/^\d{3}-\d{3}-\d{4}$/';
            $message = 'Invalid mobile number.';
            $this->pattern($name, $value, $pattern, $message, $required);
        }

       

        public function email($name, $value, $required = true) {
            $field = $this->fields->getField($name);

            // If field is not required and empty, remove errors and exit
            if (!$required && empty($value)) {
                $field->clearErrorMessage();
                return;
            }

            // Use filter_var method to validate the email address
            $email = filter_var($value, FILTER_VALIDATE_EMAIL);
            
            // If email address is not valid, set error message and exit
            if ($email === false) {
                $field->setErrorMessage("Invalid email address");
            } else {
                $field->clearErrorMessage();                
            }
        }

       
        public function code($name, $value, $required = true) {
            $field = $this->fields->getField($name);
            $this->text($name, $value, $required);
            if ($field->hasError()) { return; }

            $pattern = '/^\d{5}(-\d{4})?$/';
            $message = 'Invalid postal code.';
            $this->pattern($name, $value, $pattern, $message, $required);
        }

        public function selectType($name, $value) {
            $field = $this->fields->getField($name);
            if (empty($value)) {
                $field->setErrorMessage('Please select a reference.');
                return;
            }
            $types = array();
            $types[] = 'website';
            $types[] = 'wordbymouth';
            $types[] = 'friend';
            $types[] = 'facebook';
			$types[] = 'myself';
			$types[] = 'other';
            $types = implode('|', $types);
            $pattern = '/^(' . $types . ')$/';
            $this->pattern($name, $value, $pattern, 'Invalid selection.');
        }

        


    }
}
?>