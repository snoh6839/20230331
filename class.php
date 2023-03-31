<?php

class Food
{
    public $name ="탕수육"." "."짜장면"." "."세트";
    public $type = "중식";
    public $price = 2400;

    public function total_price($qty)
    {
        $total = $this->price * $qty;
        return $total;
    }
}

$object = new Food();
$quantity = 10;
$total_price = $object->total_price($quantity);

echo "음식이름 : ".$object->name."\n".
     "종류 : ".$object->type."\n".
     "가격 : ".$object->price." 원\n".
     "양 : ".$quantity."\n".
     "총 합계 : ".$total_price." 원";
?>