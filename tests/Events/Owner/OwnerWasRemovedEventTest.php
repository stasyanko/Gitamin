<?php

/*
 * This file is part of Gitamin.
 *
 * Copyright (C) 2015-2016 The Gitamin Team
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gitamin\Test\Events\Owner;

use Gitamin\Events\Owner\OwnerWasRemovedEvent;
use Gitamin\Models\Owner;

class OwnerWasRemovedEventTest extends AbstractOwnerEventTestCase
{
    protected function objectHasHandlers()
    {
        return false;
    }

    protected function getObjectAndParams()
    {
        $params = ['owner' => new Owner()];
        $object = new OwnerWasRemovedEvent($params['owner']);

        return compact('params', 'object');
    }
}