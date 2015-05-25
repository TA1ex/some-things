<?php 

function mersenne_generator($n)
{
	for ($i = 1; $i <= $n; $i++)
	{
		yield 2*$i-1 . ' ';
	}
	
}

foreach (mersenne_generator(10) as $value) {
	echo $value;
}