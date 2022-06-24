<?php
    class BubbleSort {
        private $arrayInt = [];
        private $median;

        function __construct($arrayIntegers){
            $arrayLength = count($arrayIntegers);
            
  
            // Iterate through array elements
            for($i = 0; $i < $arrayLength; $i++) 
            {
                // Last i elements are already in place
                for ($j = 0; $j < $arrayLength - $i - 1; $j++) 
                {
                    /**
                     * Swap if the element found
                     * is greater than the next
                     * element
                     */
                    if ($arrayIntegers[$j] > $arrayIntegers[$j+1])
                    {
                        $t = $arrayIntegers[$j];
                        $arrayIntegers[$j] = $arrayIntegers[$j+1];
                        $arrayIntegers[$j+1] = $t;
                    }
                }
            }
            /**
             * Getting the median
             */
            /**
             * Get the index for the middle element
             * of array
             */
            $index = floor($arrayLength/2);
            if($arrayLength %2 == 0){
                // even
                $this->median = ($arrayIntegers[$index - 1] + $arrayIntegers[$index]) / 2;
            }else{
                // odd
                $this->median = $arrayIntegers[$index];
            }

            /**
             * Store the sorted array
             * to property arrayInt
             */
            $this->arrayInt = $arrayIntegers;
        }

        /**
         * Get median
         */
        public function getMedian(){
            return $this->median;
        }

        /**
         * Get sorted array
         */
        public function getSorted(){
            return $this->arrayInt;
        }

        

        
    }
