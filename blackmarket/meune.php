<?php
error_reporting(0);
ini_set('display_errors', 0); 
$apirequestb = 'https://eune.api.pvp.net/api/lol/eune/v2.2/match/';
$apirequeste = '?includeTimeline=true&api_key='; //we want timeline
$matchna = __DIR__ . '/matches/NA.json';
$matchbr = __DIR__ . '/matches/BR.json';
$matcheune = __DIR__ . '/matches/EUNE.json';
$matcheuw = __DIR__ . '/matches/EUW.json';
$matchkr = __DIR__ . '/matches/KR.json';
$matchru = __DIR__ . '/matches/RU.json';
$matchlan = __DIR__ . '/matches/LAN.json';
$matchlas = __DIR__ . '/matches/LAS.json';
$matchtr = __DIR__ . '/matches/TR.json';
$matchoce = __DIR__ . '/matches/OCE.json';
$myfile = fopen(__DIR__ .'/apikey.txt', "r");
$api = fread($myfile,filesize(__DIR__ .'/apikey.txt')); //load api key
fclose($myfile);
$count = 0; //count number of matches before writing to file
$write = array(); //array containing 500 matches to write to file each time
$check = true; //default state, var that checks if match id is being prcoessed or not
//write matches kr
$newitems = array(3652,3460,3245,1341,1340,1338,1339,1337,1336,1335,3433,3434,3431,3430,3150,3829,3840,3841,3844,3745,3744,3742,3911,3924); //all new items for brawlers
$brawlers = array(3611,3612,3613,3614); //brawler ids
$upgrades = array(3617,3615,3616,3624,3623,3622,3625,3626,3621);//brawler upgrades
////echo "Running" . PHP_EOL; //let's me check on it to see if it's running ssh using screens
$result = file_get_contents($matcheune);
$matches = json_decode($result);
for($i = 0; $i < count($matches); $i++){ //keep track in array or matches
	$match = $matches[$i]; //get match id;
	//echo "Trying: $match" . PHP_EOL;
	$result = file_get_contents($apirequestb .$match. $apirequeste .$api);//get match
	$game = json_decode($result);
	$response_code = $http_response_header; //this variable is given by the file_get_contents function as an array
	$response = $response_code[0]; //check headers
	$response = substr($response, 0,12);
	//echo "response: $response" . PHP_EOL;
	if($response == "HTTP/1.1 200"){//if 200 parse it
		//echo "iteration: $count" . PHP_EOL;
		$arr = array();
		$champs = array(); //array of champs played by players according to key of each participant ID.
		foreach($game->participants as $participant){//check for each champion in the game in order for each team
			$champs[] = $participant->championId; //insert championId
		}
		$p1 = array(); //arrays of players that tracks brawlers upgrades
		$p2 = array();
		$p3 = array();
		$p4 = array();
		$p5 = array();
		$p6 = array();
		$p7 = array();
		$p8 = array();
		$p9 = array();
		$p10 = array();
		$itemsb = array(); //tracks new items of blue team
		$itemsr = array(); //track new items of red team
		$brawl = array(); //tracks brawlers using the position in array
		//check to see if timeline data exists
		if(isset($game->timeline)){
			foreach($game->timeline->frames as $a){ //get all the frames of the game for items and brawlers
				if(isset($a->events)){ //check for events in the frame
					foreach($a->events as $event){ //get each singular event
						if($event->eventType == "ITEM_PURCHASED"){
							if(in_array($event->itemId, $newitems)){ //checks to see if item is new
								if($event->participantId < 6){ //add new item to corresponding team
									$itemsb[] = $event->itemId;
								}else{
									$itemsr[] = $event->itemId;
								}
							}
							if(in_array($event->itemId, $brawlers)){ //checks to see if a brawler was bought
								$brawl[$event->participantId] = $event->itemId;
							}
							if(in_array($event->itemId, $upgrades)){ //checks to see if a brawler upgrade was bought and by whom
								switch ($event->participantId) { //adds upgrade chronogically to proper player
									case 1:
										$p1[] = $event->itemId;
										break;
									case 2:
										$p2[] = $event->itemId;
										break;
									case 3:
										$p3[] = $event->itemId;
										break;
									case 4:
										$p4[] = $event->itemId;
										break;
									case 5:
										$p5[] = $event->itemId;
										break;
									case 6:
										$p6[] = $event->itemId;
										break;
									case 7:
										$p7[] = $event->itemId;
										break;
									case 8:
										$p8[] = $event->itemId;
										break;
									case 9:
										$p9[] = $event->itemId;
										break;
									case 10:
										$p10[] = $event->itemId;
										break;
									default:
										//no code, participant will fall under cases 1-10
								} 
							}
						}
					}
				}
			}
			foreach($game->teams as $team){  //check to see which team won
				if($team->teamId == 100){
					$bwin = $team->winner;
				}
				if($team->teamId == 200){
					$rwin = $team->winner;
				}		
			}
			//being structuring array to write to file, see bottom of file for full structure
			//add brawlers to the player specific arrays
			array_unshift($p1, $brawl[1]);
			array_unshift($p2, $brawl[2]);
			array_unshift($p3, $brawl[3]);
			array_unshift($p4, $brawl[4]);
			array_unshift($p5, $brawl[5]);
			array_unshift($p6, $brawl[6]);
			array_unshift($p7, $brawl[7]);
			array_unshift($p8, $brawl[8]);
			array_unshift($p9, $brawl[9]);
			array_unshift($p10, $brawl[10]);
			$player_upgrades = array($p1,$p2,$p3,$p4,$p5,$p6,$p7,$p8,$p9,$p10); //array containing the upgrades for upcoming loop
			for($k = 0; $k < 10; $k++){
				$arr[] = $champs[$k];
				$arr[] = $player_upgrades[$k];
			}
			$arr[] = $itemsb;  //add new items
			$arr[] = $itemsr;
			
			if($rwin){  //add which team won to the array
				$arr[] = 0;
			}
			if($bwin){
				$arr[] = 1;
			}
		}else{ //if timeline data doesn't exist
			for($k = 0; $k < 10; $k++){
				$arr[] = $champs[$k];
				$arr[] = array("n/a");
			}
			$arr[] = $itemsb;  //add new items
			$arr[] = $itemsr;
			
			if($rwin){  //add which team won to the array
				$arr[] = 0;
			}
			if($bwin){
				$arr[] = 1;
			}
		}
			if(count($champs) > 8){ //if champs don't exist it will have a count less than 8, then try the match again
				$count++;
				$write[] = $arr;
				if($count == 1){ //for naming purposes we take first and last match to name the file
					$m = $match;
				}
				if($count >= 500){
				//create file and write to it
					$my_file = __DIR__ . "/eune/$m-$match.txt"; //write to file
					$handle = fopen($my_file, 'w');
					$data = $write;
					fwrite($handle, json_encode($data));
					fclose($handle);
					$count = 0;
					unset($write);
					$write = array(); //delete and restart write variable for next file
				}
				$check = false; //processed match ID
			}else{
				$check = true; //still checking this match id
			}
	}elseif($response == "HTTP/1.1 429"){//sleep the process then retry on the while loop
		$retry = $response_code[2];
		$retry = substr($retry, 13);//retry-after
		$retry = intval($retry);
		if($retry >= 0){
			sleep($retry);
		}else{
			sleep(10); //if retry dne just wait 10 seconds
		}
		$check = true;
	}elseif($response == "HTTP/1.1 500" || $response == "HTTP/1.1 503"){ //sleep for 10secs then try again
		sleep(10);
		$check = true;
	}elseif($response == "HTTP/1.1 404"){ //match not found just add one up
		sleep(1); //match has to exist try again
		$check = true;
	}
	if($check == true){ //match Id still being processed, delayed probably because of an error
		$i--; //didnt check said match so we don't want to skip it, thus try again
		if($i < 0){
			$i = 0; //make sure $i is at least 0+ for no errors
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
p2
[b,a1,a2,a3,o1,o2,o3,d1,d2,d3]--2
p3--3
[b,a1,a2,a3,o1,o2,o3,d1,d2,d3]--4
p4--5
[b,a1,a2,a3,o1,o2,o3,d1,d2,d3]--6
p5--7
[b,a1,a2,a3,o1,o2,o3,d1,d2,d3]--8
p6--9
[b,a1,a2,a3,o1,o2,o3,d1,d2,d3]--10
p7--11
[b,a1,a2,a3,o1,o2,o3,d1,d2,d3]--12
p8--13
[b,a1,a2,a3,o1,o2,o3,d1,d2,d3]--14
p9--15
[b,a1,a2,a3,o1,o2,o3,d1,d2,d3]--16
p10--17
[b,a1,a2,a3,o1,o2,o3,d1,d2,d3]--18  //if timeline data doesn't exist then returns ["n/a"]
[new items bought by team 1]--19
[new items bought by team 2]--20
w/l--21
]

*/
?>

