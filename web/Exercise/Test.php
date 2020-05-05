<?php
namespace Exercise;
require (__DIR__.'\ValidateTest.php');

$validtest = new ValidateTest();
$validtest->simple_add_test();
$validtest->handle_newlines_test();
$validtest->custom_delimiter_test();
$validtest->number_larger_than_1000_test();
$validtest->arbitrary_length_delimiter_test();
$validtest->multiple_delimiter_test();
$validtest->arbitrary_length_multiple_delimiter_test();
echo "<br><input type='button' value='Back' onclick='history.go(-1)'>";
exit;