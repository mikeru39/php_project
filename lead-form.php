<?php
$fields = array('email', 'age_f', 'age_t', 'radio', 'select', 'area' );

if (isset($_POST)) {
    $arr = [];
    foreach ($fields as $field) {
        $arr[$field] = $_POST[$field];
    }
    print_r($arr);

}