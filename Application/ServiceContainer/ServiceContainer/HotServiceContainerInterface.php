<?php

/*
 * This file is part of the Bee package.
 *
 * (c) Ling Talfi <lingtalfi@bee-framework.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Bee\Application\ServiceContainer\ServiceContainer;

use Bee\Application\ServiceContainer\ServicePlainCode\ServicePlainCode;


/**
 * HotServiceContainerInterface
 * @author Lingtalfi
 * 2015-04-17
 *
 *
 * A hot service container is a service container to which you can plug your own services on the fly,
 * until it's frozen.
 *
 */
interface HotServiceContainerInterface extends ServiceContainerInterface
{
    public function setCode($address, ServicePlainCode $code);

    public function freeze();

    public function isFrozen();

}
