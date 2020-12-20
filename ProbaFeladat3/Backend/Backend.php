<?php
class Backend
{
    function __construct()
    {
        $this->bread = "bread";
    }

    public function Important()
    {
        $number_1 = 1;
        $number_2 = 2;

        return $number_1 + $number_2;
    }

    private function NoTouchy($isNice)
    {
        if ($isNice)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function GetBread()
    {
        return $this->bread;
    }
}
?>