<?php
//srms.php
class fb_hack
{
	public $base_url = 'http://localhost/tutorial';
	public $connect;
	public $query;
	public $statement;
	public $now;

	function __construct()
	{
		$this->connect = new PDO("mysql:host=localhost;dbname=tut", "root", "");

		session_start();

		$this->now = date("Y-m-d H:i:s",  STRTOTIME(date('h:i:sa')));
	}

	//DB Operations Function
	function execute($data = null)
	{
		$this->statement = $this->connect->prepare($this->query);
		if($data)
		{
			$this->statement->execute($data);
		}
		else
		{
			$this->statement->execute();
		}		
	}

	function row_count()
	{
		return $this->statement->rowCount();
	}

	function statement_result()
	{
		return $this->statement->fetchAll();
	}

	function get_result()
	{
		return $this->connect->query($this->query, PDO::FETCH_ASSOC);
	}
	//END DB Operations Function

	function clean_input($string)
	{
	  	$string = trim($string);
	  	$string = stripslashes($string);
	  	$string = htmlspecialchars($string);
	  	return $string;
	}

}

?>