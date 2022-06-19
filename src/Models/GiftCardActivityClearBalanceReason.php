<?php

declare(strict_types=1);

namespace Square\Models;

use Exception;
use Square\ApiHelper;
use stdClass;

/**
 * Indicates the reason for clearing the balance of a [gift card]($m/GiftCard).
 */
class GiftCardActivityClearBalanceReason
{
    /**
     * The seller suspects suspicious activity.
     */
    public const SUSPICIOUS_ACTIVITY = 'SUSPICIOUS_ACTIVITY';

    /**
     * The seller cleared the balance to reuse the gift card.
     */
    public const REUSE_GIFTCARD = 'REUSE_GIFTCARD';

    /**
     * The gift card balance was cleared for an unknown reason.
     */
    public const UNKNOWN_REASON = 'UNKNOWN_REASON';

    private const _ALL_VALUES = [self::SUSPICIOUS_ACTIVITY, self::REUSE_GIFTCARD, self::UNKNOWN_REASON];

    /**
     * Ensures that all the given values are present in this Enum.
     *
     * @param array|stdClass|null|string $value Value or a list/map of values to be checked
     *
     * @return array|null|string Input value(s), if all are a part of this Enum
     *
     * @throws Exception Throws exception if any given value is not in this Enum
     */
    public static function checkValue($value)
    {
        $value = json_decode(json_encode($value), true); // converts stdClass into array
        ApiHelper::checkValueInEnum($value, self::class, self::_ALL_VALUES);
        return $value;
    }
}
