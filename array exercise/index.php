<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	
		$HighestSalary=0;
		$LowestSalary=1000000;		
		$counterManager=0;
		$counterDeveloper=0;
		$counterMarketing=0;
		

		$data = [
		[
		'name'     => 'Viktor',
		'position' => 'Manager',
		'salary'   => 3500,
		'team'     => 'Rockies',
  		],
  		[
		'name'     => 'George',
		'position' => 'Developer',
		'salary'   => 2400,
		'team'     => 'Gods',
  		],
  		[
		'name'     => 'Martin',
		'position' => 'Marketing',
		'salary'   => 1800,
		'team'     => 'Rockies',
  		],
  		[
		'name'     => 'Ivelin',
		'position' => 'Developer',
		'salary'   => 2600,
		'team'     => 'Gods',
  		],
  		[
		'name'     => 'Atanas',
		'position' => 'Manager',
		'salary'   => 3900,
		'team'     => 'Bros',
  		],
  		[
		'name'     => 'Kaloyan',
		'position' => 'Developer',
		'salary'   => 3000,
		'team'     => 'Bros',
  		],  		
		];

		for ($i=0; $i <count($data) ; $i++) { 
			if($data[$i][salary]>$HighestSalary){
				$HighestSalary=$data[$i][salary];
			}
			else if($data[$i][salary]<$LowestSalary){
				$LowestSalary=$data[$i][salary];
			}
		}
		
		for ($i=0; $i <count($data) ; $i++) { 
			if($data[$i][position]=="Developer"){
				$counterDeveloper++;
			}
			if($data[$i][position]=="Marketing"){
				$counterMarketing++;
			}
			if($data[$i][position]=="Manager"){
				$counterManager++;
			}
		}

		$ArrayPositions=array('manager'=>$counterManager,'developer'=>$counterDeveloper,'marketing'=>$counterMarketing);

		echo "Highest salary is: ".$HighestSalary;
		echo"<br>";

		echo " Lowest salary is: ".$LowestSalary;
		echo"<br>";
		echo"<br>";

		echo "Positions:";
		echo"<br>";
		foreach ($ArrayPositions as $key => $value) {			
			echo $key." => ".$value;
			echo "<br>";
		}		
		echo"<br>";

		echo "Descendindg salaries:";
		echo "<br>";
		$salary=array_column($data,'salary');		
		array_multisort($salary,SORT_DESC,$data);
		for ($i=0; $i <count($salary) ; $i++) { 
			echo "<br>";
			echo $salary[$i]."=>".$data[$i][name];
		}
		
	?>
</body>
</html>