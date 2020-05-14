<?php


namespace App;


class Calculator
{
    public function getCalculate(int $guestNumber, int $nigthNumber, int $petNumber, bool $breakfast)
    {
        $priceRoom = 0;

        if($totalRoom=$nigthNumber)
        {
            $priceRoom = 85;
        }


        if($breakfast===true)
        {
            $breakfastPrice= $guestNumber *12* $nigthNumber;
        }

        if($breakfast===false)
        {
            $breakfastPrice= 0;
        }


        $petPrice= $petNumber * $nigthNumber * 5;

        $totalPrice = ($totalRoom * $priceRoom) + $breakfastPrice + $petPrice;

        return $totalPrice;

    }

}
