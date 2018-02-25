<?php

/**
 * PHP Service Bus (CQS implementation)
 *
 * @author  Maksim Masiukevich <desperado@minsk-info.ru>
 * @license MIT
 * @license https://opensource.org/licenses/MIT
 */

declare(strict_types = 1);

namespace Desperado\ServiceBus\Modules;

use Desperado\ServiceBus\MessageBus\MessageBusBuilder;
use Desperado\ServiceBus\Task\Behaviors\ValidationBehavior;

/**
 * Provide message validation
 */
final class MessageValidationModule implements ModuleInterface
{
    /**
     * @inheritdoc
     */
    public function boot(MessageBusBuilder $messageBusBuilder): void
    {
        $messageBusBuilder->pushBehavior(ValidationBehavior::create());
    }
}
