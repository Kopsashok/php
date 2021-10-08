<!DOCTYPE html>
<html>
<body>
<?php
echo "<q><mark style=background-color: yellow>Twinkle, Twinkle little Star.</mark></q>";
$txt1="Twinkle";
$txt2="Star";

echo "<br><q><mark style=background-color: yellow>" . $txt1 . "," . $txt1 . " little " . $txt2 . "</mark></q>";

class twinkleEx
{
	public $t1;
	public $t2;

	public function __construct($t1,$t2)
	{
		$this->t1=$t1;
		$this->t2=$t2;
	}

	public function message()
	{
		return "<br><q><mark style=background-color: yellow>" . $this->t1 . "," . $this->t1 . " little " . $this->t2 . "</mark></q>";
	}
}

$m1=new twinkleEx("Twingle","Star");
echo $m1 -> message();
 ?>
</body>
</html>