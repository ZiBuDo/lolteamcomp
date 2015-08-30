<?php
//purpose of this file is to create auto complete suggestions and later on to redirect users who use the search bar with answer we think is right

$result = file_get_contents('http://www.lolteamcomp.com/php/champions.txt');
$champs = json_decode($result); //get champs
$search = array(); //html table generation of rows
$hero = array(); //2d array for keys and names;
for($i = 0; $i < 1000; $i++){ //cycle through all champ ids
	$id = 0;
	$id = $champs->$i->id; //checking purposes
	$name = $champs->$i->name; //for name of champ of that id
	$key = $champs->$i->key; //for picture		
	if($id != 0 || isset($id)){	
		$hero[] = array($key,$name, $id);
	}
}
$c1 = $_POST['c1'];
$c2 = $_POST['c2'];
$c3 = $_POST['c3'];
$c4 = $_POST['c4'];
$c5 = $_POST['c5'];
$c1 = strtolower($c1);
$c2 = strtolower($c2);
$c3 = strtolower($c3);
$c4 = strtolower($c4);
$c5 = strtolower($c5);
//check all 5 champs in case user entered anything wrong
$similar = array(); //calculate similarity between strings
foreach($hero as $string){
	$str = strtolower($string[1]);
	similar_text($str,$c1, $percent);
	$similar[] = $percent;
}
$maxs = array_keys($similar, max($similar)); //find key of highest value in similar
$correct = $hero[$maxs[0]]; //get correct search name now, maxs is an array, we only want first value
$cid1 = $correct[2];
$cc1 = $correct[1];

$similar = array(); //calculate similarity between strings
foreach($hero as $string){
	$str = strtolower($string[1]);
	similar_text($str,$c2, $percent);
	$similar[] = $percent;
}
$maxs = array_keys($similar, max($similar)); //find key of highest value in similar
$correct = $hero[$maxs[0]]; //get correct search name now, maxs is an array, we only want first value
$cid2 = $correct[2];
$cc2 = $correct[1];

$similar = array(); //calculate similarity between strings
foreach($hero as $string){
	$str = strtolower($string[1]);
	similar_text($str,$c3, $percent);
	$similar[] = $percent;
}
$maxs = array_keys($similar, max($similar)); //find key of highest value in similar
$correct = $hero[$maxs[0]]; //get correct search name now, maxs is an array, we only want first value
$cid3 = $correct[2];
$cc3 = $correct[1];

$similar = array(); //calculate similarity between strings
foreach($hero as $string){
	$str = strtolower($string[1]);
	similar_text($str,$c4, $percent);
	$similar[] = $percent;
}
$maxs = array_keys($similar, max($similar)); //find key of highest value in similar
$correct = $hero[$maxs[0]]; //get correct search name now, maxs is an array, we only want first value
$cid4 = $correct[2];
$cc4 = $correct[1];

$similar = array(); //calculate similarity between strings
foreach($hero as $string){
	$str = strtolower($string[1]);
	similar_text($str,$c5, $percent);
	$similar[] = $percent;
}
$maxs = array_keys($similar, max($similar)); //find key of highest value in similar
$correct = $hero[$maxs[0]]; //get correct search name now, maxs is an array, we only want first value
$cid5 = $correct[2];
$cc5 = $correct[1];

$array = array($cc1,$cc2,$cc3,$cc4,$cc5);
//redirect back to page with error message because of duplicates
$dupe_array = array();
foreach($array as $val){
	if(++$dupe_array[$val] > 1){
	header("Location: http://www.lolteamcomp.com/bm/teamfind.php?c1=$c1&c2=$c2&c3=$c3&c4=$c4&c5=$c5&error=duplicate");
	exit;
	}
}
header("Location: http://www.lolteamcomp.com/bm/teamcomp.php?c1=$cc1&id1=$cid1&c2=$cc2&id2=$cid2&c3=$cc3&id3=$cid3&c4=$cc4&id4=$cid4&c5=$cc5&id5=$cid5&region=all"); //redirect to name of correct page










?>