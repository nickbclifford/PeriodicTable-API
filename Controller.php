<?php

namespace app;

use app\core\BaseController;

class Controller extends BaseController
{
    protected function getNames()
    {
        $names = $this->getNamesData();

        if(isset($this->request["elements"])) {
            $errorElements = [];
            // gets the element symbols from the URL
            $elements = explode(',', $this->request["elements"]);
            foreach ($elements as $index => $symbol) {
                if(in_array(ucfirst(strtolower($symbol)), array_keys($names))) {
                    $elements[$index] = ucfirst(strtolower($symbol));
                } else {
                    unset($elements[$index]);
                    array_push($errorElements, $symbol);
                }
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
        // pops an error message in the $result
        if(isset($errorElements)) {
            foreach ($errorElements as $error) {
                $result[$error] = ["error" => "Invalid element!"];
            }
        }

        return $result;
    }

    protected function getOrbitals()
    {
        return $this->getElectrons();
    }

    protected function getElectrons()
    {
        $electrons = $this->getElectronsData();
        $numbers = $this->getNumbersData();

        if(isset($this->request["elements"])) {
            $errorElements = [];
            // gets the element symbols from the URL
            $elements = explode(',', $this->request["elements"]);
            foreach ($elements as $index => $symbol) {
                if(in_array(ucfirst(strtolower($symbol)), array_keys($electrons))) {
                    $elements[$index] = ucfirst(strtolower($symbol));
                } else {
                    unset($elements[$index]);
                    array_push($errorElements, $symbol);
                }
            }
        } else {
            // if none were specified, just do all of them
            $elements = array_keys($electrons);
        }
        $result = [];
        $atomicNumbers = [];
        // converts the symbols to atomic numbers (i could probably just use array_push() here, but i don't really care)
        foreach ($elements as $index => $symbol) {
            $atomicNumbers[$index] = $numbers[$symbol]["atomic"];
        }
        // calculates configurations & gets element blocks if requested
        foreach ($elements as $index => $element) {
            $result[$element]["config"] = electron_config($atomicNumbers[$index]);
            $result[$element]["short"] = electron_config($atomicNumbers[$index], true);
            if(isset($this->request["showBlocks"])) {
                if($this->request["showBlocks"]) {
                    $result[$element]["block"] = $electrons[$element]["block"];
                }
            }
        }
        // pops an error message in the $result
        if(isset($errorElements)) {
            foreach ($errorElements as $error) {
                $result[$error] = ["error" => "Invalid element!"];
            }
        }

        return $result;
    }

    protected function getNumbers()
    {
        $electrons = $this->getElectronsData();
        $numbers = $this->getNumbersData();

        if(isset($_GET["elements"])) {
            $errorElements = [];
            // gets the element symbols from the URL
            $elements = explode(',', $_GET["elements"]);
            foreach ($elements as $index => $symbol) {
                if(in_array(ucfirst(strtolower($symbol)), array_keys($electrons))) {
                    $elements[$index] = ucfirst(strtolower($symbol));
                } else {
                    unset($elements[$index]);
                    array_push($errorElements, $symbol);
                }
            }
        } else {
            // if none were specified, just do all of them
            $elements = array_keys($numbers);
        }
        $result = [];
        // gets atomic numbers and possibly masses from $numbers, passes them to $resultsp
        foreach ($elements as $element) {
            $result[$element]["atomic"] = $numbers[$element]["atomic"];
            if(isset($_GET["mass"])) {
                if($_GET["mass"]) {
                    $result[$element]["mass"] = $numbers[$element]["mass"];
                }
            }
        }
        // pops an error message in the $result
        if(isset($errorElements)) {
            foreach ($errorElements as $error) {
                $result[$error] = ["error" => "Invalid element!"];
            }
        }
    }

    protected function getDankmemes()
    {
        return [69 => "( ͡° ͜ʖ ͡°)"];
    }

    private function getNamesData()
    {
        return require_once('data/names.php');
    }

    private function getElectronsData()
    {
        return require_once('data/electrons.php');
    }

    private function getNumbersData()
    {
        return require_once('data/electrons.php');
    }
}
