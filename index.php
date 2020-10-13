<?php
require_once('model/fields.php');
require_once('model/validate.php');

$validate = new Register\Validate();
$fields = $validate->getFields();
$fields->addField('id', '13 digits');
$fields->addField('name');
$fields->addField('surname');
$fields->addField('address', 'Separated by comma in between');
$fields->addField('code', 'Use 4 or 5 code.');
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
        
        $id = '';
        $name = '';
        $surname = '';
        $address = ''; 
        $code = '';
        $hometelephone = '';
        $worktelephone = '';
		$mobile = '';
		$email = '';
        $selectType = '';
        
        include 'view/register.php';
        break;
    case 'register':
        // Copy form values to local variables
        $id = trim(filter_input(INPUT_POST, 'id'));
        $name = trim(filter_input(INPUT_POST, 'name'));
        $surname = trim(filter_input(INPUT_POST, 'surname'));
        $address = trim(filter_input(INPUT_POST, 'address'));
		$code = filter_input(INPUT_POST, 'code');
        $hometelephone = trim(filter_input(INPUT_POST, 'hometelephone'));
        $worktelephone = filter_input(INPUT_POST, 'worktelephone');
        $mobile = filter_input(INPUT_POST, 'mobile');
		$email = trim(filter_input(INPUT_POST, 'email'));
        $selectType = filter_input(INPUT_POST, 'select_type');

        // Validate form data
        $validate->id('id', $id);
        $validate->text('name', $name);
        $validate->text('surname', $surname);
        $validate->text('address', $address, false);
		$validate->code('code', $code, false);
        $validate->hometelephone('hometelephone', $hometelephone);
        $validate->worktelephone('worktelephone', $worktelephone);
        $validate->mobile('mobile', $mobile);
		$validate->email('email', $email);
        $validate->selectType('select_type', $selectType);

        // Load appropriate view based on hasErrors
        if ($fields->hasErrors()) {
            include 'view/register.php';
        } else {
            include 'view/success.php';
        }
        break;
}
?>