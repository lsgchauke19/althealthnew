<?php 
require_once'fields.php';

$validate = new Add\Validate();
$fields = $validate->getFields();


$fields->addField('name');
$fields->addField('surname');
$fields->addField('email', 'Must be a valid email address.');
$fields->addField('address');
$fields->addField('city');
$fields->addField('province');
$fields->addField('postal code', 'Use 4 to 5 code.');
$fields->addField('phone', 'Use 999-999-9999 format.');
$fields->addField('birthdate', 'Use mm/dd/yyyy format.');


$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = 'reset';
} else {
    $action = strtolower($action);
}

switch ($action) {
    case 'reset':
        $email = '';
       
        $name = '';
        $surname = '';
        $address = '';
        $city = '';
        $province = '';
        $postal = '';
        $phone = '';
        $birthdate = '';
        
        
        include 'addclient.php';
        break;
    case 'addclient':
        // Copy form values to local variables
        $email = trim(filter_input(INPUT_POST, 'email'));
       
        $name = trim(filter_input(INPUT_POST, 'name'));
        $surname = trim(filter_input(INPUT_POST, 'surnamename'));
        $address = trim(filter_input(INPUT_POST, 'address'));
        $city = trim(filter_input(INPUT_POST, 'city'));
        $province = filter_input(INPUT_POST, 'province');
        $postal = filter_input(INPUT_POST, 'postal');
        $phone = filter_input(INPUT_POST, 'phone');
        $birthdate = filter_input(INPUT_POST, 'birthdate');
        

        // Validate form data
        $validate->email('email', $email);
        
        $validate->text('name', $name);
        $validate->text('surnamename', $surname);
        $validate->text('address', $address, false);
        $validate->text('city', $city, false);
        $validate->province('province', $province, false);
        $validate->postal('postal', $postal, false);
        $validate->phone('phone', $phone);
        $validate->birthdate('birthdate', $birthdate);
        

        // Load appropriate view based on hasErrors
        if ($fields->hasErrors()) {
            include 'addclient.php';
        } else {
            include 'success.php';
        }
        break;
}





























?>