<pre>
<?
	$datetime1 = new DateTime('2009-10-11');
	$datetime2 = new DateTime('2009-10-13');
	$interval = $datetime1->diff($datetime2);
	echo $interval->format('%R%a días');
	$datetime3 = date_create('2009-10-11');
	$datetime4 = date_create('2009-10-13');
	$interval = date_diff($datetime3, $datetime4);
	echo $interval->format('%R%a días').'<br>';
?> 
</pre>
	