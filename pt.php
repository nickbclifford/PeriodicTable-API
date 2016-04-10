<?php
// api goes here
// example url: https://nickclifford.me/api/pt.php?mode=names&element=H,Ar,Hf
if(isset($_GET["mode"])) {
	switch($_GET["mode"]) {
		case "names":
			require('names.php');
			if(isset($_GET["elements"])) {
				$elements = explode(',', $_GET["elements"]);
				foreach ($elements as $index => $symbol) {
					$elements[$index] = ucfirst(strtolower($symbol));
				}
			} else {
				$elements = array_keys($names);
			}
			$result = [];
			foreach ($elements as $element) {
				$name = $names[$element];
				$result[$element] = $name;
			}
			echo json_encode($result);
			break;
		case "orbitals":
			break;
		default:
			echo json_encode(["error" => "No mode specified. Please try again!"]);
			break;
	}
} else {
	// some other stuff
}