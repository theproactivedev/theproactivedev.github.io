<?php

	global $errors;
	$errors = array();

	function redirectTo($newLocation) {
		header("Location: " . $newLocation);
    exit;
	}

	function displayErrors() {
		global $errors;
		$output = "";

		if (!empty($errors)) {
			$output .= "<div class=\"errors\">";
			$output .= "<ul>";
			foreach ($errors as $key => $error) {
				 $output .= "<li>";
				 $output .= htmlentities($error);
				 $output.= "</li>";
			}
			$output .= "</ul></div>";
		}
		
		return $output;
	}

	function has_header_injection($str) {
		return preg_match("/[\r\n]/", $str);
	}

	function testInput($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	function isPresent($value) {
    return isset($value) && $value !== "";
  }

	function validatePresence($fields=array()) {
		global $errors;
		
		foreach($fields as $field) {
			$value = trim($_POST[$field]);
			if (!isPresent($value)) {
				$errors[$field] = ucfirst($field) . " is required.";
			}
		}
	}

	function isName($data) {
		global $errors;
		
		if (!preg_match("/^[a-zA-Z ]*$/", $data)) {  
			$errors["nameError"] = "Only letters and white space allowed."; 
		}
	}

	function isEmail($data) {
		global $errors;

		if (!filter_var($data, FILTER_VALIDATE_EMAIL)) {
			$errors["emailError"] = "Invalid email format."; 
		}
	}

	function addMailError() {
		global $errors;
		
		$errors["mailError"] = "There is an unexpected technical error. Please contact us through our social media. Sorry for the inconvenience. Thank you.";  
	}

	// PASSWORD ENCRYPTION
  function password_encrypt($password) {
    $hashFormat = "$2y$10$";
    $saltLength = 22;
    $salt = generateSalt($saltLength);
    $format_and_salt = $hashFormat . $salt;
    ///echo strlen($salt);
    $hashedPass = crypt($password, $format_and_salt);

    return $hashedPass;
  }

  function generateSalt($length) {
    //not 100% unique, not 100% random, but good enough for a salt
    // MD5 returns 32 characters
    
    $uniqueRandomString = md5(uniqid(mt_rand(), true));
    
    // valid characters for a salt are [a-zA-Z0-9./]
    $base64_string = base64_encode($uniqueRandomString);
    
    // but not '+' which is valid in base64 encoding
    $modified_base64_string = str_replace('+', '.', $base64_string);
    
    //truncate string to the correct length
    $salt = substr($modified_base64_string, 0, $length);
    
    return $salt;
  }
?>