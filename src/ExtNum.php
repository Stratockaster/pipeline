<?php

namespace Pipeline;

class ExtNum
{
    public function middle($list)
    {
        $middleIndex = round(count($list) / 2);

        return $list[$middleIndex];
    }
}