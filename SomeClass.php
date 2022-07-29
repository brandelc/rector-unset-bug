<?php
class SomeClass
{
    public function run()
    {
        if (rand(0, 1)) {
            $a = 5;
        } else if (rand(0,1)) {
            unset($a);
        }
        echo $a;
    }
}
