<?php

class GenerateId{
    public static function generate($previous, $txtPart){
        $index = substr($previous, 2, 6);
        $num = (int)$index + 1;
        $zerolen = 6 - strlen($num);
        $nextIndex = $txtPart;

        for ($i=0; $i < $zerolen; $i++) { 
            $nextIndex = $nextIndex."0";
        }
        $nextIndex = $nextIndex.$num;

        return $nextIndex;
    }
}
