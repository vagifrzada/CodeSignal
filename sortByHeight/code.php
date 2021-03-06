<?php

/**
 * @param array $a
 * @return array
 */
function sortByHeight(array $a): array
{
   $filtered = array_filter($a, function ($item) {
       return $item > 0;
   });

   sort($filtered);


   for ($i = 0; $i < count($a); $i++) {
       if ($a[$i] > 0) {
           $a[$i] = array_shift($filtered);
       }
   }


   return $a;
}
