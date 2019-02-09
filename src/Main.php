<?php

namespace Pipeline;

class Main
{
    public function main()
    {
        $files = scandir('.', null);
        $filtered = array_filter($files, function ($file) {
            return substr($file, 0, 1) !== '.';
        });
        sort($filtered);
        $extNum = new ExtNum();
        $middle = $extNum->middle($filtered);
        $plural = $this->plural($middle, 's');
        $upCase = mb_strtoupper($plural);

        echo $upCase;
    }

    public function plural($str, $symbol): string
    {
        if (substr($str, -1) === 's') {
            return $str;
        }

        return $str . $symbol;
    }
}