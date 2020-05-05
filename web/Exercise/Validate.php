<?php
namespace Exercise;
use Exception;

class Validate
{
    public function Add(string $numbers):int
    {
		$sum = 0;
		$negative_numbers = '';
		try {
			if(isset($numbers) && !empty($numbers)){
				//Regular expression to validate input string patterns
				preg_match_all('!-?\d+!', $numbers, $matches);
				foreach($matches[0] as $number){
					if($number < 0){
						//Preparing collection of all negative numbers to display in exception
						$negative_numbers .= $number.'<br>';
					}else{
						//Condition for ignoring numbers larger than 1000
						if($number <= 1000){
							$sum += $number;
						}
					}
				}
				if($negative_numbers != ''){
					//Throwing an exception as negative numbers are not allowed
					throw new Exception('Negatives not allowed. Negative numbers in the string are as below:<br>'.$negative_numbers);
				}
			}
			//Returning sum as an integer type as per given scenarios in the exercise
			return $sum;
		}
        catch (Exception $e) {
			//Catching and displaying exception message
            echo "<br><strong>Caught Exception :</strong> ".$e->getMessage();
			echo "<input type='button' value='Back' onclick='history.go(-1)'>";
            exit;
        }
    }
}