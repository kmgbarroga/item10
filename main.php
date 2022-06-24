<?php
    require_once('constructor.php');

    $arrayOfIntegers = [43,56,19,45,67,11,24];
    $bsort = new BubbleSort($arrayOfIntegers);
    echo "Array of Integers(unsorted): \n";
    print_r($arrayOfIntegers);
    echo "Sorted Array of Integers: \n";
    print_r($bsort->getSorted());
    echo "\n";
    echo "Median: \n";
    echo $bsort->getMedian();
    