<?php

namespace App;


class Calculator 
{

    public function getCalculate(int $guestNumber, int $nigthNumber, int $petNumber, bool $breakfast)
    {
        $priceRoom = 0;

        if($nigthNumber == 1)
        {
            $priceRoom = 85;
        }

        if($breakfast===true)
        {
            $breakfastPrice= 12;
            $breakfastCalculate= $guestNumber * $breakfastPrice * $nigthNumber;
        }

        if($breakfast===false)
        {
            $breakfastCalculate= 0;
        }

        $petPrice= $petNumber * $nigthNumber * 5;

        $totalPrice = ($nigthNumber * $priceRoom) + $breakfastCalculate + $petPrice;

        return $totalPrice;
    }
}