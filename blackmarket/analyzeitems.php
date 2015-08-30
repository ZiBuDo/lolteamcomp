<?php
ini_set('display_errors', 1);

//creates directories as records for teamcomps with restrictions on inodes
$cont = true;
while($cont){
	$result = file_get_contents('http://www.lolteamcomp.com/php/champions.txt'); //this is created by current
	$champs = json_decode($result);
	if(isset($champs)){ //get champs and stop loop if successful
		$cont = false; 
	}
	
}
$myfile = fopen(__DIR__ . "/mysql.txt", "r");
$json = fread($myfile,filesize(__DIR__ . "/mysql.txt")); //open a file containing user info for security purposes it is not hard coded
$json = json_decode($json);
fclose($myfile);

$servername = "localhost";
$username = $json[0];
$password = $json[1];
$dbname = "spooldze_blackmarket_teams";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//.>. losing to a rug
$regions = array("na","br","tr","euw","eune","kr","oce","las","lan","ru"); //10 regions for looping purposes

for($i = 0; $i < 10; $i++){ //loop through each region of data files we have aggregated
	$path = __DIR__ ."/$regions[$i]/";
	$dir = opendir($path); 
	$list = array();  //sort in ascending order or oldest matches first to be deleted
	while($dir && ($file = readdir($dir)) !== false) {
		$list[] = $file;
	}
	sort($list); //create list of files of matches that were parsed for this region
	foreach($list as $file){ //now we want to analyze all 500 matches in each of these files
		$myfile = fopen($path . $file, "r");
		$json = fread($myfile,filesize($path . $file)); //open a file containing parsed info 1 by 1 of 20 matches each containg 500 matches to equal 10k each
		$json = json_decode($json);
		fclose($myfile);
		
		echo "File: " . $path . $file . PHP_EOL;
		
		foreach($json as $match){			//each json is an array of arrays which hold data listed below
			echo $regions[$i] . PHP_EOL;
			$names1 = array($match[0],$match[2],$match[4],$match[6],$match[8]);
			sort($names1); //ascending order
			
			$names2 = array($match[10],$match[12],$match[14],$match[16],$match[18]);
			sort($names2); //ascending order
			$bwin = false;
			$rwin = false;
			if($match[22] == 1){ //get winner of watch, blue is team 1 and red is team 2 for reference
				$bwin = true;
			}else{
				$rwin = true;
			}
			$itemsb = $match[20];
			$itemsr = $match[21]; //get new items for both teams
			if(count($itemsb) > 1){
				$newb = array(); //empty array to hold all comp names on blue team for items
				for($a = 0; $a < count($itemsb); $a++){
					for($b = $a + 1; $b < count($itemsb); $b++){
						if(!in_array(array($itemsb[$a],$itemsb[$b]), $newb)){ //check to see if there are no overlaps in items to prevent double counting
							$newb[] = array($itemsb[$a],$itemsb[$b]);
						}
					}
				}
			}
			if(count($itemsr) > 1){
				$newr = array();
				for($a = 0; $a < count($itemsr); $a++){ //now for red team
					for($b = $a + 1; $b < count($itemsr); $b++){
						if(!in_array(array($itemsr[$a],$itemsr[$b]), $newr)){ //check to see if there are no overlaps in items to prevent double counting
							$newr[] =  array($itemsr[$a],$itemsr[$b]);
						}
					}
				}
			}
			//after we've created all duo's, we need to set up items array to include 0's so that c2 in primary key in items table in sql isnt null
			foreach($itemsb as &$add){ //use & to change original array
				$add = array($add,0); //0 to signify no other item was bought
			}
			foreach($itemsr as &$add){ //use & to change original array
				$add = array($add,0); //0 to signify no other item was bought
			}
			$itemsb_final = array_merge($itemsb,$newb);  //add the arrays together for final arrays
			$itemsr_final = array_merge($itemsr,$newr);
			
			/* 
				now add items to appropriate databases
				Arrays to add:
					$upr and $upb for brawler upgrades
					$bb and $br for brawler team comps  <-- just names
					$itemsb_final and $itemsr_final for new items
					$names1 and $names2 for team comps  array of names which hold champ ids, so names[0] is c1
			*/
			
			if($bwin){ //if blue won or team 1 wins then increment those wins and increment red losses
				
				//items below
				foreach($itemsb_final as $p){ //all wins on blue side
					$sql = "INSERT INTO items (c1,c2, $regions[$i]w, $regions[$i]l)VALUES ($p[0],$p[1],1,0)ON DUPLICATE KEY UPDATE $regions[$i]w=$regions[$i]w + 1"; 
					mysqli_query($conn, $sql);		
				}
				foreach($itemsr_final as $p){ //all wins on blue side
					$sql = "INSERT INTO items (c1,c2, $regions[$i]w, $regions[$i]l)VALUES ($p[0],$p[1],0,1)ON DUPLICATE KEY UPDATE $regions[$i]l=$regions[$i]l + 1"; 
					mysqli_query($conn, $sql);		
				}		
			}elseif($rwin){ //if red wins do inverse, copied from above but w and l are switched below after regions array index
				
				//items below
				foreach($itemsb_final as $p){ //all wins on blue side
					$sql = "INSERT INTO items (c1,c2, $regions[$i]w, $regions[$i]l)VALUES ($p[0],$p[1],0,1)ON DUPLICATE KEY UPDATE $regions[$i]l=$regions[$i]l + 1";
					mysqli_query($conn, $sql);				
				}
				foreach($itemsr_final as $p){ //all wins on blue side
					$sql = "INSERT INTO items (c1,c2, $regions[$i]w, $regions[$i]l)VALUES ($p[0],$p[1],1,0)ON DUPLICATE KEY UPDATE $regions[$i]w=$regions[$i]w + 1";
					mysqli_query($conn, $sql);
				}
			}
			$tem1 = $names1[0] . "-" . $names1[1] . "-" . $names1[2] . "-" . $names1[3] . "-" . $names1[4];
			$tem2 = $names2[0] . "-" . $names2[1] . "-" . $names2[2] . "-" . $names2[3] . "-" . $names2[4];
			echo $tem1 . " vs " . $tem2 . PHP_EOL;
		}
		
	}
}


		/*
Skeleton:

Tracking: 
10 champions in game
10 brawlers in game
Order which people upgraded brawler, 3 upgrades for 3 options
New items -> win% and percent bought
win/loser


[
p1--0
[b,a1,a2,a3,o1,o2,o3,d1,d2,d3]--1  //order in which brawler is upgraded, will go brawler, upgrade1, upgrade2, etc..
p2--2
[b,a1,a2,a3,o1,o2,o3,d1,d2,d3]--3
p3--4
[b,a1,a2,a3,o1,o2,o3,d1,d2,d3]--5
p4--6
[b,a1,a2,a3,o1,o2,o3,d1,d2,d3]--7
p5--8
[b,a1,a2,a3,o1,o2,o3,d1,d2,d3]--9
p6--10
[b,a1,a2,a3,o1,o2,o3,d1,d2,d3]--11
p7--12
[b,a1,a2,a3,o1,o2,o3,d1,d2,d3]--13
p8--14
[b,a1,a2,a3,o1,o2,o3,d1,d2,d3]--15
p9--16
[b,a1,a2,a3,o1,o2,o3,d1,d2,d3]--17
p10--18
[b,a1,a2,a3,o1,o2,o3,d1,d2,d3]--19  //if timeline data doesn't exist then returns ["n/a"]
[new items bought by team 1]--20
[new items bought by team 2]--21
w/l--22
]
*/
?>