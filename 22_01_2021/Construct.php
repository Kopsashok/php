<!DOCTYPE html>
<html>
<body>
<?php 
	class car
	{
		public $color;
		public $model;
		public function __construct($color,$model)
		{
			$this->color1=$color;
			$this->model1=$model;
		}

		public function message()
		{
			return "My car is " . $this->color1 . " " . $this->model1;
		}
	}

	$mycar=new car("black","volvo");
	echo $mycar -> message();
	echo "<br>";

	$mycar=new car("red","toyato");
	echo $mycar -> message();
	echo "<br>";
 ?>
</body>
</html>