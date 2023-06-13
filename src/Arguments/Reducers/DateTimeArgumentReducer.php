<?php

namespace Spatie\FlareClient\Arguments\Reducers;

use Spatie\FlareClient\Arguments\ReducedArgument\ReducedArgumentContract;
use Spatie\FlareClient\Arguments\ReducedArgument\ReducedArgument;
use Spatie\FlareClient\Arguments\ReducedArgument\UnReducedArgument;
use Spatie\FlareClient\Arguments\Reducers\ArgumentReducer;
use UnitEnum;

class DateTimeArgumentReducer implements ArgumentReducer
{
    public function execute(mixed $argument): ReducedArgumentContract
    {
        if (! $argument instanceof \DateTimeInterface) {
            return new UnReducedArgument();
        }

        return new ReducedArgument(
            $argument->format('d M Y H:i:s p') . ' ('. $argument::class.')'
        );
    }
}
