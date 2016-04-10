<?php
// api goes here
// example url: https://nickclifford.me/api/pt.php?mode=names&elements=H,Ar,Hf
if(isset($_GET["mode"])) {
	switch($_GET["mode"]) {
		case "names":
			// imports the $names array
			require('names.php');
			if(isset($_GET["elements"])) {
				// gets the element symbols from the URL
				$elements = explode(',', $_GET["elements"]);
				foreach ($elements as $index => $symbol) {
					$elements[$index] = ucfirst(strtolower($symbol));
				}
			} else {
				// if none were specified, just do all of them
				$elements = array_keys($names);
			}
			$result = [];
			// gets the names from $names and puts them in the final array
			foreach ($elements as $element) {
				$name = $names[$element];
				$result[$element] = $name;
			}
			// echos the array as JSON
			echo json_encode($result);
			break;
		case "orbitals":
			break;
		default:
			// no modes? echo an error.
			echo json_encode(["error" => "No mode specified. Please try again!"]);
			break;
	}
} else {
	// some other stuff
}
