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
    public static function test($id, $arr = []): int
    {
        if (null === $id) {
            echo $id;
        }

        return 0;
    }
}
