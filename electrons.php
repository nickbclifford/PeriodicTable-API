<?php
// electrons and stuff go here
$electrons = [
	'H'  => ['config' => '1s1', 'block' => 's'],
	'He' => ['config' => '1s2', 'block' => 's'],
	'Li' => ['config' => '1s2 2s1', 'block' => 's'],
	'Be' => ['config' => '1s2 2s2', 'block' => 's'],
	'B'  => ['config' => '1s2 2s2 2p1', 'block' => 'p'],
	'C'  => ['config' => '1s2 2s2 2p2', 'block' => 'p'],
	'N'  => ['config' => '1s2 2s2 2p3', 'block' => 'p'],
	'O'  => ['config' => '1s2 2s2 2p4', 'block' => 'p'],
	'F'  => ['config' => '1s2 2s2 2p5', 'block' => 'p'],
	'Ne' => ['config' => '1s2 2s2 2p6', 'block' => 'p'],
	'Na' => ['config' => '1s2 2s2 2p6 3s1', 'block' => 's'], 
	'Mg' => ['config' => '1s2 2s2 2p6 3s2', 'block' => 's'],
	'Al' => ['config' => '1s2 2s2 2p6 3s2 3p1', 'block' => 'p'],
	'Si' => ['config' => '1s2 2s2 2p6 3s2 3p2', 'block' => 'p'],
	'P'  => ['config' => '1s2 2s2 2p6 3s2 3p3', 'block' => 'p'],
	'S'  => ['config' => '1s2 2s2 2p6 3s2 3p4', 'block' => 'p'],
	'Cl' => ['config' => '1s2 2s2 2p6 3s2 3p5', 'block' => 'p'],
	'Ar' => ['config' => '1s2 2s2 2p6 3s2 3p6', 'block' => 'p'],
	'K'  => ['config' => '1s2 2s2 2p6 3s2 3p6 4s1', 'block' => 's'],
	'Ca' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2', 'block' => 's'],
	'Sc' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d1', 'block' => 'd'],
	'Ti' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d2', 'block' => 'd'],
	'V'  => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d3', 'block' => 'd'],
	'Cr' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d4', 'block' => 'd'],
	'Mn' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d5', 'block' => 'd'],
	'Fe' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d6', 'block' => 'd'],
	'Co' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d7', 'block' => 'd'],
	'Ni' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d8', 'block' => 'd'],
	'Cu' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d9', 'block' => 'd'],
	'Zn' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10', 'block' => 'd'],
	'Ga' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p1', 'block' => 'p'],
	'Ge' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p2', 'block' => 'p'],
	'As' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p3', 'block' => 'p'],
	'Se' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p4', 'block' => 'p'],
	'Br' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p5', 'block' => 'p'],
	'Kr' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6', 'block' => 'p'],
	'Rb' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s1', 'block' => 's'],
	'Sr' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2', 'block' => 's'],
	'Y'  => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d1', 'block' => 'd'],
	'Zr' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d2', 'block' => 'd'],
	'Nb' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d3', 'block' => 'd'],
	'Mo' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d4', 'block' => 'd'],
	'Tc' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d5', 'block' => 'd'],
	'Ru' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d6', 'block' => 'd'],
	'Rh' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d7', 'block' => 'd'], 
	'Pd' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d8', 'block' => 'd'],
	'Ag' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d9', 'block' => 'd'],
	'Cd' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10', 'block' => 'd'],
	'In' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p1', 'block' => 'p'],
	'Sn' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p2', 'block' => 'p'],
	'Sb' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p3', 'block' => 'p'],
	'Te' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p4', 'block' => 'p'],
	'I'  => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p5', 'block' => 'p'],
	'Xe' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6', 'block' => 'p'],
	'Cs' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s1', 'block' => 's'],
	'Ba' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2', 'block' => 's'],
	'La' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 5d1', 'block' => 'f'],
	'Ce' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f1 5d1', 'block' => 'f'],
	'Pr' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f3', 'block' => 'f'],
	'Nd' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f4', 'block' => 'f'],
	'Pm' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f5', 'block' => 'f'],
	'Sm' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f6', 'block' => 'f'],
	'Eu' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f7', 'block' => 'f'],
	'Gd' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f8', 'block' => 'f'],
	'Tb' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f9', 'block' => 'f'],
	'Dy' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f10', 'block' => 'f'],
	'Ho' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f11', 'block' => 'f'],
	'Er' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f12', 'block' => 'f'],
	'Tm' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f13', 'block' => 'f'],
	'Yb' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14', 'block' => 'f'],
	'Lu' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d1', 'block' => 'd'],
	'Hf' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d2', 'block' => 'd'],
	'Ta' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d3', 'block' => 'd'],
	'W'  => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d4', 'block' => 'd'],
	'Re' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d5', 'block' => 'd'],
	'Os' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d6', 'block' => 'd'],
	'Ir' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d7', 'block' => 'd'],
	'Pt' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d8', 'block' => 'd'],
	'Au' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d9', 'block' => 'd'],
	'Hg' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10', 'block' => 'd'],
	'Tl' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p1', 'block' => 'p'],
	'Pb' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p2', 'block' => 'p'],
	'Bi' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p3', 'block' => 'p'],
	'Po' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p4', 'block' => 'p'],
	'At' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p5', 'block' => 'p'],
	'Rn' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6', 'block' => 'p'],
	'Fr' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s1', 'block' => 's'],
	'Ra' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2', 'block' => 's'],
	'Ac' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 6d1', 'block' => 'f'],
	'Th' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 6d2', 'block' => 'f'],
	'Pa' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f2 6d1', 'block' => 'f'],
	'U'  => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f3 6d1', 'block' => 'f'],
	'Np' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f4 6d1', 'block' => 'f'],
	'Pu' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f6', 'block' => 'f'],
	'Am' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f7', 'block' => 'f'],
	'Cm' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f7 6d1', 'block' => 'f'],
	'Bk' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f9', 'block' => 'f'],
	'Cf' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f10', 'block' => 'f'],
	'Es' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f11', 'block' => 'f'],
	'Fm' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f12', 'block' => 'f'],
	'Md' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f13', 'block' => 'f'],
	'No' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f14', 'block' => 'f'],
	'Lr' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f14 6d1', 'block' => 'd'],
	'Rf' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f14 6d2', 'block' => 'd'],
	'Db' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f14 6d3', 'block' => 'd'],
	'Sg' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f14 6d4', 'block' => 'd'],
	'Bh' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f14 6d5', 'block' => 'd'],
	'Hs' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f14 6d6', 'block' => 'd'],
	'Mt' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f14 6d7', 'block' => 'd'],
	'Ds' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f14 6d8', 'block' => 'd'],
	'Rg' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f14 6d9', 'block' => 'd'],
	'Cn' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f14 6d10', 'block' => 'd'],
	'Uut' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f14 6d10 7p1', 'block' => 'p'],
	'Fl'  => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f14 6d10 7p2', 'block' => 'p'],
	'Uup' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f14 6d10 7p3', 'block' => 'p'],
	'Lv'  => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f14 6d10 7p4', 'block' => 'p'],
	'Uus' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f14 6d10 7p5', 'block' => 'p'],
	'Uuo' => ['config' => '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f14 6d10 7p6', 'block' => 'p']
];

$shortGases = ['Rn', 'Xe', 'Kr', 'Ar', 'Ne', 'He'];

// programmatically shortens electronic configurations.
foreach($shortGases as $key) {
	foreach ($electrons as $key2 => $value) {
		if(strpos($electrons[$key2]["config"], $electrons[$key]["config"]) !== false) {
			$toBeShortened = $electrons[$key2]["config"];
			str_replace($electrons[$key]["config"], "[" . $key . "]" , $toBeShortened);
			$electrons[$key2]["short"] = $toBeShortened;
		}
	}
}

function electron_config($element_number, $charge = 0) {
	// Check for exceptions
	$exceptions = [
		69 => 'whatever configuration you want!!!!111!!one!!13111eleven1!',
		64209 => 'et cetera'
	];
	if(array_key_exists($element_number, $exceptions)) {
		return $exceptions[$element_number];
	}
	
	$orbital_capacity = [
		's' => 2,
		'p' => 6,
		'd' => 10,
		'f' => 14
	];
	
	$notation_order = [
		'1s', '2s', '2p', '3s', '3p',
		'4s', '3d', '4p', '5s',	'4d',
		'5p', '6s', '4f', '5d', '6p',
		'7s', '5f', '6d', '7p', '8s',
	];
	
	$notation = '';
	
	foreach($notation_order as $orbital) {
		$orbital_type = substr($orbital, -1);
		$orbital_value = 0;
		while($element_number > 0 && $orbital_value < $orbital_capacity[$orbital_type]) {
			$orbital_value++;
			$element_number--;
		}
		$notation .= $orbital . $orbital_value;
		if($element_number === 0) {
			break;
		} else {
			$notation .= ' ';
		}
	}
	return $notation;
}