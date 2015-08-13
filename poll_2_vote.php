<?php

$vote = $_REQUEST['vote_opinion'];

//get content of textfile
$filename = "poll_result_2.txt";
$content = file($filename);

//put content in array
$array = explode("||", $content[0]);
$option1 = $array[0];
$option2 = $array[1];
$option3 = $array[2];

if($vote == 0){
	$option1 = $option1 + 1;
}
if($vote == 1){
	$option2 = $option2 + 1;
}

if($vote == 2){
	$option3 = $option3 + 1;
}


//insert votes to txt file
$insertvote = $option1."||".$option2."||".$option3;
$fp = fopen($filename, "w");
fputs($fp, $insertvote);
fclose($fp);
?>

<h2>Result:</h2>
<table class="table table-striped table-hover">
	<tr>
		<td>Yes</td>
			<td>
				<img src="img/poll.gif"
				width='<?php echo(100*round($option1/($option3+$option2+$option1),2)); ?>'
				height='20'>
				<?php echo(100*round($option1/($option3+$option2+$option1),2)); ?>%
			</td>
	</tr>
	<tr>
		<td>No</td>
			<td>
				<img src="img/poll.gif"
				width='<?php echo(100*round($option2/($option3+$option2+$option1),2)); ?>'
				height='20'>
				<?php echo(100*round($option2/($option3+$option2+$option1),2)); ?>%
			</td>
	</tr>
	<tr>
		<td>Somewhat</td>
			<td>
				<img src="img/poll.gif"
				width='<?php echo(100*round($option3/($option3+$option2+$option1),2)); ?>'
				height='20'>
				<?php echo(100*round($option3/($option3+$option2+$option1),2)); ?>%
			</td>
	</tr>
</table>
