<?php
    function calculate($numbers){
        $totall=0;
        foreach($numbers as $number){
            $totall += $number; 
        }
        return $totall;
    }
    function calculateAverage($numbers){
        $totall=0;
        foreach($numbers as $number){
            $totall+=$number;
        }
        $num=count($numbers);
        $totall=$totall/$num;
        return $totall;
        
    }

    function medianCalculate($numbers){
        $n = count($numbers);
        if($n%2!=0){
            $x=($n+1)/2;
            return $numbers[$x-1];
        }else{
            $x=$n/2;
            $y=$x+1;
            $totall = ($numbers[$x-1]+$numbers[$y-1])/2;
            return $totall;

        }
    }

    $numbers =array(5,10,15,20);
    $value=calculate($numbers);
    $median = medianCalculate($numbers);
    $average = calculateAverage($numbers);
    echo "Sum is:" . $value."\n";
    echo "Average is:".$average ."\n";
    echo "Median is :".$median;
?>
