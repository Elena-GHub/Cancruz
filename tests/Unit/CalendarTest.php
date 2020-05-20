<?php


use App\Calendar;
use PHPUnit\Framework\TestCase;

class CalendarTest extends TestCase
{
    public function test_if_show_every_days_from_1_to_31()
    {
        $month=[];
        $selectDays= new Calendar();
        $result= $selectDays->getEveryDays($month);
        $this->assertEquals(31, $result);

    }

}
