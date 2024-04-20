<?php

function arrayUnique($lst): array
{
    return array_values(array_unique($lst));
}

print_r(arrayUnique([123, 123, 123, 22, 23, 24]));
