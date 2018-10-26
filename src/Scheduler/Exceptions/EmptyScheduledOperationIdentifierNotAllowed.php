<?php

/**
 * PHP Service Bus (publish-subscribe pattern implementation)
 * Supports Saga pattern and Event Sourcing
 *
 * @author  Maksim Masiukevich <desperado@minsk-info.ru>
 * @license MIT
 * @license https://opensource.org/licenses/MIT
 */

declare(strict_types = 1);

namespace Desperado\ServiceBus\Scheduler\Exceptions;

/**
 *
 */
final class EmptyScheduledOperationIdentifierNotAllowed extends \RuntimeException
{
    public function __construct()
    {
        parent::__construct('Scheduled operation identifier can\'t be empty');
    }
}
