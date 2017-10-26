<?php
/**
 * Created by PhpStorm.
 * User: rtmwu
 * Date: 2017/10/26
 * Time: 上午 11:36
 */
include_once "Animal.php";

class Cat extends Animal
{

}
$cat = new Cat("test");
echo $cat->getAnimalType();