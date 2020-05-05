<?php
namespace Exercise;
require (__DIR__.'\Validate.php');

class ValidateTest
{
    public function simple_add_test()
    {
		$question = '1,2,5';
		$answer = 8;
        $validate = new Validate();
		$returnedvalue = $validate->Add($question);
		if(!strcmp($returnedvalue,$answer)){
		    echo 'Simple Add test passed successfully!<br>';
        }else{
            echo 'Simple Add test failed!<br>';
        }
    }
	
	public function handle_newlines_test()
    {
        $question = '1\n,2,3';
        $answer = 6;
        $validate = new Validate();
		$returnedvalue = $validate->Add($question);
        if(!strcmp($returnedvalue,$answer)){
            echo 'Handle New lines test passed successfully!<br>';
        }else{
            echo 'Handle New lines test failed!<br>';
        }
    }
	
	public function custom_delimiter_test()
    {
        $question = '//;\n1;3;4';
        $answer = 8;
        $validate = new Validate();
		$returnedvalue = $validate->Add($question);
        if(!strcmp($returnedvalue,$answer)){
            echo 'Custom Delimiter test passed successfully!<br>';
        }else{
            echo 'Custom Delimiter test failed!<br>';
        }
    }
	
	public function number_larger_than_1000_test()
    {
        $question = '2,1001';
        $answer = 2;
        $validate = new Validate();
		$returnedvalue = $validate->Add($question);
        if(!strcmp($returnedvalue,$answer)){
            echo 'Number larger than 1000 test passed successfully!<br>';
        }else{
            echo 'Number larger than 1000 test failed!<br>';
        }
    }
	
	public function arbitrary_length_delimiter_test()
    {
        $question = '//***\n1***2***3';
        $answer = 6;
        $validate = new Validate();
		$returnedvalue = $validate->Add($question);
        if(!strcmp($returnedvalue,$answer)){
            echo 'Arbitrary Length Delimiter test passed successfully!<br>';
        }else{
            echo 'Arbitrary Length Delimiter test failed!<br>';
        }
    }
	
	public function multiple_delimiter_test()
    {
        $question = '//$,@\n1$2@3';
        $answer = 6;
        $validate = new Validate();
		$returnedvalue = $validate->Add($question);
        if(!strcmp($returnedvalue,$answer)){
            echo 'Multiple Delimiter test passed successfully!<br>';
        }else{
            echo 'Multiple Delimiter test failed!<br>';
        }
    }
	
	public function arbitrary_length_multiple_delimiter_test()
    {
        $question = '//$,@\n1$2%&7@@4@@9@*5**3';
        $answer = 31;
        $validate = new Validate();
		$returnedvalue = $validate->Add($question);
        if(!strcmp($returnedvalue,$answer)){
            echo 'Arbitrary Length Multiple Delimiter test passed successfully!<br>';
        }else{
            echo 'Arbitrary Length Multiple Delimiter test failed!<br>';
        }
    }
}
?>