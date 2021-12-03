<?php
class GetsumOfTwo{
    public function getSumOfTwo(array $number, int $tergetSum){
        for($firstIndex = 0; $firstIndex < count($number) - 1; $firstIndex++){
            $firstIndex = $number[$firstIndex];
            //echo $firstIndex;
            for($secondIndex = $firstIndex + 1; $secondIndex < count($number); $secondIndex++){
                $secondIndex = $number[$secondIndex];
                if($firstIndex + $secondIndex === $tergetSum){
                    return [$firstIndex, $secondIndex];
                }
            };
        };
    }
}
$get = new GetsumOfTwo();
print_r($get->getSumOfTwo([10,20,10,2], 30));
