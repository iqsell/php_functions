<?php
function arrayUnique($lst)
{
    $result = array_values(array_unique($lst));
    return $result;
}
print_r(arrayUnique([123, 123, 123, 22, 23, 24]));