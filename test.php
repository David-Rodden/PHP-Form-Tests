<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 8/17/2017
 * Time: 12:11 PM
 */

$inst = new Instance($_GET["name"] ?? "N/A");
echo $inst->getName() . ": " . $inst->getId();

class Instance
{
    protected $id;
    protected $name;

    function __construct($name) {
        $this->id = rand(0, 10) / 10;
        $this->name = $name;
    }

    function getName() {
        return $this->name;
    }

    function getId() {
        return $this->id;
    }
}
?>