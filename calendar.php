<?php
date_default_timezone_set('America/New_York');
$getTime = time();
$current_hour = getDisplayForTime($getTime);

?>
<!DOCTYPE html>
<html>
<head>
<title>Calendar</title> 
<link href="calendar.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container">
<h1>
	<span class="current">Todays Date: </span>
	<?php echo date("d/m/Y" , $getTime);?> 
	<span class="current">Time: </span>
	<?php echo date("h:i", $getTime); ?>
</h1>

<table id="event_table">
<tr>
	<th class='hr_td_'> &nbsp; </th>
	<th class='table_header'>Jenny</th>
	<th class='table_header'>Rachel</th>
	<th class='table_header'>Phil</th>
</tr>
 
<?php
function getDisplayForTime($getTime)
{
return date("g",$getTime) . ":00" . date("a", $getTime);
}
?>
 
<?php
$hours_to_show = 12;
for($i=1; $i <= $hours_to_show; $i++) {
	if($i%2 == 0)
	{ echo ("<tr class='even_row'> 
			 <td class='hr_td'>" . getDisplayForTime($getTime) . "</td> <td> </td> <td> </td> <td></td>
			 </tr>");
	$getTime += 3600;
	}
	else
	{ echo ("<tr class='odd_row'>
			 <td class='hr_td'>" . getDisplayForTime($getTime) .  "</td> <td> </td> <td> </td> <td> </td>
             </tr>");
			$getTime += 3600;
 
    }
}
?>
</div>
</body>
</html>