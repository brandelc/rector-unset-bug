<?php
class SomeClass
{
    public function run()
    {
        if (rand(0, 1)) {
            $a = 5;
        } else {
            unset($a);
        }
        echo $a;
    }
}
