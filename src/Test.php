<?php

/*
 * This file is part of the overtrue/weather.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Overtrue\Weather;

class Test
{
    public function __construct()
    {
    }

    /**
     * @param $id
     * @param array $arr
     * @return int
     */
    public function test($id, $arr = []): int
    {
        if (is_null($id)) {
            echo $id;
        }
        return 0;
    }
}
