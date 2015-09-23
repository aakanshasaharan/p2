<?php 
	//Create local variables
	$numbers = "0123456789";
	$symbols = ".-+=!@#%<>[]{}!$+&_*()*^";	
	$char = "";
	$num = "";
	$password = "";
	
if(isset($_POST['generate']))
{
	if (!empty($_POST['NumberCheck'])) {
		$num = mypass($numbers, 2);
	}	
	if (!empty($_POST['SymbolCheck'])) {
		$char = mypass($symbols, 2);
	}	
	if(!empty($_POST['TotalWords'])) {	
		//getting words at random from the array based on the number selected from drop down list				
		//concatenation of the final password
		$password .= $char.Dash(WordsArray($_POST['TotalWords'])).$num;					
	}		
}
	
	//array of words 
	function WordsArray($numberofwords) { 
		$wordEng = array ("alone", "about", "abroad", "all", "almost", "alone", "along", "already", "active", "actuall", "acute", 
		"bad", "bare", "bash" , "beauty", "before", "bold", "boy", "brave", "brief", 
		"cheer", "chief", "child", "clean", "clever", "cloud", 
 		"dear", "decent", "deep", "decent", "dark", "done", "down", "due", 
 		"even", "every","enough", "empty", "except", "everywhere", 
 		"few", "fifteen", "fify", "fill", "find", "fire", "first", "five", 
 		"get", "give", "go", "gentel", "genuine", "glad", "gradual", "gratefull", "great", 
		"health", "heart", "heavy", "help", "hence", "high", 
		"ice", "icy", "ill", "ink", "ideal", "ieda", "innocent", "indeed", 
		"jaunt", "jealous", "joint", "jolly", "jovial", 
		"key", "kind","knot", "know", "keep", "known",
		"lame", "lanky", "large", "long", "last", "live", "life", "large", "last", "love", "late", "law", 
		"most", "mermaid", "more", "mean", "mine", "move", "much", "massive", 
		"next", "nine", "nobody", "none", "not", "nice", "neat", 
		"of", "off", "often", "on",  "once", "one", "only", "onto", "or", "other", "others",
		"per", "perhaps", "please", "put", "plush", "polite", 
		"quick", "quite", "quiz", "quitely", 
		"rich", "rigid", "right", "ripe", "rosy", "rough", "rowdy", "red", "road", 
		"sad", "safe", "salt", "sand", "scaly", "scent", "same", "such", "same", "side",
		"tide", "tight", "time", "tiny", "torn", "total", "tiny", "tired", "thin", "thirs", "three",
		"upright","upset","use", "udes", "usefull", "useless", "under", "until", "up", "upon", 
		"violent", "virtual", "vital", "vivid", "volume", "very", "vary", "vast", 
		"wing", "wall", "wise", "worn", "witty", "world", "widely", "whole", "woozy",
		"young", "yputh", "yellow", "yield", "yummy", 
		"zebra", "zany", "zesty", "zig", "zag", "zodiac",);
		$result = "";		
		for($i = 0; $i < $numberofwords; $i++) {  
			$result = $result.$wordEng[rand(0, count($wordEng) - 1)]." ";		
		}
		return $result;		
	}	
	
	// Fetch random words and add symbols and number
	function mypass($passchars, $numberofwords) {
		$result = '';
		for ($i = 0; $i < $numberofwords; $i++)
			$result .= substr($passchars, rand(0, strlen($passchars) - 1), 1);
		return $result;
	}
	
	//add dashes between the words
	function Dash($str) {
		$str = str_replace(" ", "-", $str);
		return $str;
	}
		
?>