<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Untitled</title>
</head>

<body>

<?php

//scope

class person
{
	public $name = "Bryan";
	protected $age = 38;
	private $id = 12;
	
	function ShowName()
	{
		$name = "Heather";
		echo $this->name . "<br>";
		echo $name . "<br>";
	}
	
	protected function internalonly()
	{
		
	}

}

//visibility
class employee extends person
{
	function Test()
	{
		echo $this->age . "<br>";
		
	}
}


$me = new person();
$me->ShowName();

$myemp = new employee();


?>

</body>
</html>
