<?php 

$validate = new Register\Validate();
$fields = $validate->getField();
$fields->addField('name');
$fields->addField('surname');
$fields->addField('phone');


include 'appointment.php';










?>