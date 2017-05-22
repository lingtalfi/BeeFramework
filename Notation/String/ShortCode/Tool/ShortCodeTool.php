<?php

/*
 * This file is part of the BeeFramework package.
 *
 * (c) Ling Talfi <lingtalfi@bee-framework.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BeeFramework\Notation\String\ShortCode\Tool;

use BeeFramework\Component\Error\CodifiedErrors\Tools\CodifiedErrorsTool;
use BeeFramework\Notation\String\ShortCode\LineParser\ShortCodeLineParser;
use BeeFramework\Notation\String\StringParser\ExpressionDiscoverer\Miscellaneous\ShortCodeExpressionDiscoverer;


/**
 * ShortCodeTool
 * @author Lingtalfi
 * 2015-05-09
 *
 */
class ShortCodeTool
{


    private static $inst = null;

    /**
     * @return array of params
     */
    public static function parse($string)
    {
        if (true === self::getInst()->parse($string)) {
            return self::getInst()->getValue();
        }
        throw new \RuntimeException("The shortCode syntax is not valid");
    }


    //------------------------------------------------------------------------------/
    // 
    //------------------------------------------------------------------------------/
    private static function getInst()
    {
        if (null === self::$inst) {
            self::$inst = new ShortCodeExpressionDiscoverer();
        }
        return self::$inst;
    }
}
