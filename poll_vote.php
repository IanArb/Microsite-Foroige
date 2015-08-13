<?php

$vote = $_REQUEST['vote'];

//get content of textfile
$filename = "poll_result.txt";
$content = file($filename);

//put content in array
$array = explode("||", $content[0]);
$option1 = $array[0];
$option2 = $array[1];
$option3 = $array[2];
$option4 = $array[3];

if($vote == 0){
	$option1 = $option1 + 1;
}
if($vote == 1){
	$option2 = $option2 + 1;
}

if($vote == 2){
	$option3 = $option3 + 1;
}

if($vote == 3){
	$option4 = $option4 + 1;
}

//insert votes to txt file
$insertvote = $option1."||".$option2."||".$option3."||".$option4;
$fp = fopen($filename, "w");
fputs($fp, $insertvote);
fclose($fp);
?>

<h2>Result:</h2>
<table class="table table-striped table-hover">
	<tr>
		<td>Foroige Member</td>
			<td>
				<img src="img/poll.gif"
				width='<?php echo(100*round($option1/($option4+$option3+$option2+$option1),2)); ?>'
				height='20'>
				<?php echo(100*round($option1/($option4+$option3+$option2+$option1),2)); ?>%
			</td>
	</tr>
	<tr>
		<td>Parent</td>
			<td>
				<img src="img/poll.gif"
				width='<?php echo(100*round($option2/($option4+$option3+$option2+$option1),2)); ?>'
				height='20'>
				<?php echo(100*round($option2/($option4+$option3+$option2+$option1),2)); ?>%
			</td>
	</tr>
	<tr>
		<td>Volunteer</td>
			<td>
				<img src="img/poll.gif"
				width='<?php echo(100*round($option3/($option4+$option3+$option2+$option1),2)); ?>'
				height='20'>
				<?php echo(100*round($option3/($option4+$option3+$option2+$option1),2)); ?>%
			</td>
	</tr>
	<tr>
		<td>Not a member</td>
			<td>
				<img src="img/poll.gif"
				width='<?php echo(100*round($option4/($option4+$option3+$option2+$option1),2)); ?>'
				height='20'>
				<?php echo(100*round($option4/($option4+$option3+$option2+$option1),2)); ?>%
			</td>
	</tr>
</table>
