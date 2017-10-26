<?php
/**
 * Created by PhpStorm.
 * User: rtmwu
 * Date: 2017/10/26
 * Time: 上午 11:13
 * 1.定義Animal class
 * 2.屬性position 可被繼承
 * 3.初始化時可以設定物物種名稱及初始化位置
 * 4.可以取的物種名稱
 * 5.可以從外部得到食物
 */
class Animal
{
    private $animalType;
    protected $position;
    public function __construct($animalTypeFromOut)
    {
        $this->animalType=$animalTypeFromOut;
        $this->position =["x"=>0,"y"=>0];
    }
    public function getAnimalType()
    {
        return $this->animalType;
    }
    public function getFood($footName)
    {
        echo "得到食物:$footName";
    }

}