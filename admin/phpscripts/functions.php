<?php

	function redirect_to($location) {
		if($location != NULL) {
			header("Location: {$location}");
			exit;
		}
	}

	function randomSetPassword($length,$count, $characters) {

// $length is the length of the passwords

// $count is the count on the amount of passwords

// $characters the type of characters used to create the passwords

// define variables used for the function and array
    $symbols = array();
    $passwords = array();
    $used_symbols = '';
    $pass = '';

// a bunch of different array and character types used for passwords
    $symbols["lower_case"] = 'abcdefghijklmnopqrstuvwxyz';
    $symbols["upper_case"] = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $symbols["numbers"] = '1234567890';
    $symbols["special_symbols"] = '!?~@#-_+<>[]{}';

    $characters = explode(",",$characters);
		 // gets the characters for the password to be used
    foreach ($characters as $key=>$value) {

        $used_symbols .= $symbols[$value];
				 // builds the characters for the password
    }
    $symbols_length = strlen($used_symbols) - 1;
		 //starts from 0 and will deduct to 1

    for ($p = 0; $p < $count; $p++) {
        $pass = '';

        for ($i = 0; $i < $length; $i++) {
            $n = rand(0, $symbols_length);
						 // get random letters and characters to be used in the string
            $pass .= $used_symbols[$n];
						// aads characters to the password string to be used
        }
        $passwords[] = $pass;
    }

    return $passwords; // return the generated password
}

$my_passwords = randomSetPassword(8,1,"lower_case,upper_case,numbers,special_symbols");

?>
