<?php

/*
 * This file is part of the BeeFramework package.
 *
 * (c) Ling Talfi <lingtalfi@bee-framework.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ling\BeeFramework\Bat;


/**
 * MachineTool
 * @author Lingtalfi
 * 2014-10-29
 *
 */
class MachineTool
{
    public static function isWindows()
    {
        return (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN');
    }

    public static function isMac()
    {
        return (strtoupper(substr(PHP_OS, 0, 6)) === 'DARWIN');
    }

    public static function isUnix()
    {
        /**
         * If it's not windows, it's unix, isn't it?
         */
        return (false === self::isWindows());
    }


    /**
     * Returns the program path, or false if not found.
     *
     * This is based on which on unix.
     *
     * There is no windows implementation at the moment.
     *
     * @param string $program
     * @return string
     * @throws \Exception
     */
    public static function getProgramPath(string $program): string
    {
        if (true === self::isUnix()) {
            ob_start();
            passthru("which $program");
            $res = trim(ob_get_clean());
            if ('' !== $res) {
                return $res;
            }
            return false;


        } else {
            // todo: implement for windows...
            throw new \Exception("Sorry dude, not implemented now for windows machine, please improve this class");
        }
    }


    public static function hasProgram($program)
    {
        if (true === self::isUnix()) {
            ob_start();
            passthru("which $program");
            return (strlen(ob_get_clean()) > 0);
        } else {
            // todo: implement for windows...
            throw new \Exception("Sorry dude, not implemented now for windows machine, please improve this class");
        }

    }
}
