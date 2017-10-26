/**
 * Created by PhpStorm.
 * User: rtmwu
 * Date: 2017/10/26
 * Time: 上午 09:46
 */
<?php
class Animal{
    private $test;
    protected $positon;
}
class cat
{
    private $name="kitty";
    private $test="test";
    protected $poisition;
    function __construct()
    {
        $this->poisition=["x"=>0,"y"=>0];
        $this->name = name;
    }
    function setName($name)
    {
        $this->name =$name;
    }
    function getname(){return $this->name;}
    function test()
    {
        echo "test";
    }
    public function moveDxDY($dx,$dy)
    {
        $this->position["x"] +=  $dx;
        $this->position["y"] +=  $dy;
        //$x = $this->poisition["x"];
        //$y = $this->poisition["y"];
        echo "(x,y)<br>";
        return this->poisition;
    }

}
$cat = new cat();

echo $cat-->name."<br>";
echo $cat->setName("bradwu")."<br>";
