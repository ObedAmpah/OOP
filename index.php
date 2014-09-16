
<?php  
	
	require('person.php');
		
	$person = new Person('Obed', 29);

	echo $person->sentence();

