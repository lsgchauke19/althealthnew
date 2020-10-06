<?php
require_once('model/fields.php');
require_once('model/validate.php');

$validate = new Register\Validate();
$fields = $validate->getFields();
$fields->addField('id', '13 digits');
$fields->addField('name');
$fields->addField('surname');
$fields->addField('address');
$fields->addField('code', 'Use 5 code.');

$fields->addField('hometelephone', 'Use 000-000-0000.');
$fields->addField('worktelephone', 'Use 000-000-0000.');
$fields->addField('mobile', 'Use 000-000-0000.');
$fields->addField('email', 'Please use valid email address.');
$fields->addField('select_type');


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
        
        $code = '';
        $hometelephone = '';
        $worktelephone = '';
        $selectType = '';
        $cardNumber = '';
        $cardDigits = '';
        $expDate = '';
        
        include 'view/register.php';
        break;
    case 'register':
        // Copy form values to local variables
        $email = trim(filter_input(INPUT_POST, 'email'));
        $password = filter_input(INPUT_POST, 'password');
        $verify = filter_input(INPUT_POST, 'verify');
        $firstName = trim(filter_input(INPUT_POST, 'first_name'));
        $lastName = trim(filter_input(INPUT_POST, 'last_name'));
        $address = trim(filter_input(INPUT_POST, 'address'));
        $city = trim(filter_input(INPUT_POST, 'city'));
        $state = filter_input(INPUT_POST, 'state');
        $zip = filter_input(INPUT_POST, 'zip');
        $phone = filter_input(INPUT_POST, 'phone');
        $birthdate = filter_input(INPUT_POST, 'birthdate');
        $cardType = filter_input(INPUT_POST, 'card_type');
        $cardNumber = filter_input(INPUT_POST, 'card_number');
        $cardDigits = preg_replace('/[^[:digit:]]/', '', $cardNumber);
        $expDate = filter_input(INPUT_POST, 'exp_date');

        // Validate form data
        $validate->email('email', $email);
        $validate->password('password', $password);
        $validate->verify('verify', $password, $verify);
        $validate->text('first_name', $firstName);
        $validate->text('last_name', $lastName);
        $validate->text('address', $address, false);
        $validate->text('city', $city, false);
        $validate->state('state', $state, false);
        $validate->zip('zip', $zip, false);
        $validate->phone('phone', $phone);
        $validate->birthdate('birthdate', $birthdate);
        $validate->cardType('card_type', $cardType);
        $validate->cardNumber('card_number', $cardDigits, $cardType);
        $validate->expDate('exp_date', $expDate);

        // Load appropriate view based on hasErrors
        if ($fields->hasErrors()) {
            include 'view/register.php';
        } else {
            include 'view/success.php';
        }
        break;
}
?>