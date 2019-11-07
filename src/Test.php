<?php

/*
 * This file is part of the lmz/weather.
 *
 * (c) overtrue <liumingzhij26@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
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
     *
     * @return int
     */
    public function test($id, $arr = []): int
    {
        if (null === $id) {
            echo $id;
        }
        return 0;
    }
}
