<?php
//don't close the php delimiter unless you need to ?>

<?= 'these are the echo tags<br>'?>
<?php echo 'same as echo tags<br>'; ?>


<?php 
$variableNameInCamelCase = null;
$x = 4;
$y = 4.5;
//literal string (include everything in the string)
$txt = 'Tarzan loves Jane $x times more than Cheeta';
echo $txt;
//string that get parsed (can add variables)
$txt2 = "<br>Tarzan loves Jane $x times more than Cheeta<br>";
echo $txt2;

//arrays
$values = array(4, 5, 4.5, $x, $y, $txt);
$values2 = ['some content here', 4, $values];

echo '<pre>';
var_dump($values); //good for debugging
echo '<\pre>';

echo '<pre>';
print_r($values2); //good for debugging
echo '<\pre>';

//if elseif else
echo '<br>I F   E L S E I F   E L S E<br>';
$score = 80;
if($score < 60){
	$score = 'F';
}elseif($score < 70){
	$score = 'D';
}elseif($score < 80){
	$score = 'C';
}elseif($score < 90){
	$score = 'B';
}else
	$score = 'A';
echo "$score<br>";

echo '<br><br>S W I T C H   C A S E S<br>';
//switch cases
switch($score){
	case 'A':
	case 'B':
		echo 'you pass! <br>';
		break;
	case 'C':
	case 'D':
		echo 'you pass but you can do better!<br>';
		break;

	default:
		echo 'you fail!<br>';
		break;
}

//looping
echo '<br>L O O P S<br>';

//while loop
echo '<br>W H I L E  L O O P <br>';
$i = 0;
while($i < count($values)){
	echo $i, '=>', $values[$i], '<br>';
	$i++;
}

//for loop
echo '<br>F O R  L O O P <br>';
for($i = 0; $i < count($values); $i++){
	echo $i, '=>', $values[$i], '<br>';
}

//foreach loop
echo '<br>F O R E A C H  L O O P <br>';
foreach ($values as $i => $value) {
	echo $i, '=>', $values[$i], '<br>';
}

//associates arrats are dictionaries in PHP
$associateArray = ['key1'=>'value1', 'key2'=>'value2', 'score'=>$score, 'valuesArray'=>$values];
foreach ($associateArray as $key => $value) {
	if(is_array($value))
	{
		echo $key, '=>';
		echo '<pre>';
		print_r($value); //good for debugging
		echo '<\pre>';
		echo '<br>';
	} 
	else 
	{
		echo $key, '=>', $value, '<br>';
	}
}

//functions
echo '<br>F U N C T I O N S<br>';
function recursiveEcho($stuff)
{
	if(!is_array($stuff))
	{
		echo '<br>';
		echo $stuff;
		return;
	}

	echo '[';
	foreach ($stuff as $key => $value) 
	{
		if(is_array($value))
		{
			echo $key, '=>';
			recursiveEcho($value);
		}
		else
		{
			echo $key, '=>', $value, '<br>';		
		}
	}
	echo ']';
}
recursiveEcho($associateArray);
recursiveEcho($score);

?>