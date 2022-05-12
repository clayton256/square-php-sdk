<?php

declare(strict_types=1);

namespace Square\Models;

use Exception;
use Square\ApiHelper;

/**
 * Supported subscription statuses.
 */
class SubscriptionStatus
{
    /**
     * The subscription is pending to start in the future.
     */
    public const PENDING = 'PENDING';

    /**
     * The subscription is active.
     */
    public const ACTIVE = 'ACTIVE';

    /**
     * The subscription is canceled.
     */
    public const CANCELED = 'CANCELED';

    /**
     * The subscription is deactivated.
     */
    public const DEACTIVATED = 'DEACTIVATED';

    /**
     * The subscription is paused.
     */
    public const PAUSED = 'PAUSED';

    private const _ALL_VALUES = [self::PENDING, self::ACTIVE, self::CANCELED, self::DEACTIVATED, self::PAUSED];

    /**
     * Ensures that all the given values are present in this Enum.
     *
     * @param array|null|string $value Value or a list of values to be checked
     *
     * @return array|null|string Input value(s), if all are a part of this Enum
     *
     * @throws Exception Throws exception if any given value is not in this Enum
     */
    public static function checkValue($value)
    {
        ApiHelper::checkValueInEnum($value, self::class, self::_ALL_VALUES);
        return $value;
    }
}
