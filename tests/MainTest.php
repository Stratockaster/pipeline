<?php

namespace Pipeline;

use PHPUnit\Framework\TestCase;

class MainTest extends TestCase
{
    public function testMain()
    {
        $main = new Main();

        $main->main();
    }
}
