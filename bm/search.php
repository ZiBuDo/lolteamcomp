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
/*
$c1 = '$c1'; //this allow us to write the vars in the row
$c2 = '$c2';
$c3 = '$c3';
$c4 = '$c4';
$c5 = '$c5';
$server = '$_SERVER[\'PHP_SELF\']';
sort($hero);
foreach($hero as $a){
	$name = $a[1];
	$key = $a[0];
	$id = $a[2];
	$search[] = "<tr><td><a style='text-decoration:none;' href='<?php echo $server . \"?c1=$c1&c2=$name\";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/$key.png' height='30' width='30' />&nbsp $name<br /></a></td></tr>";	
}
//commented out because we only needs this to generate search auto fills
foreach($search as $entry){
	echo $entry . PHP_EOL;
}
*/
$search_query = $_POST['champ'];
$search_query = strtolower($search_query); //lowercase matching
$similar = array(); //calculate similarity between strings
foreach($hero as $string){
	$str = strtolower($string[1]);
	similar_text($str,$search_query, $percent);
	$similar[] = $percent;
}
$maxs = array_keys($similar, max($similar)); //find key of highest value in similar
$correct = $hero[$maxs[0]]; //get correct search name now, maxs is an array, we only want first value
$cid = $correct[2];

header("Location: http://www.lolteamcomp.com/bm/champion.php?champ=$correct[0]&id=$cid&region=all"); //redirect to name of correct page








?>