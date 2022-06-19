<?php

declare(strict_types=1);

namespace Square\Models;

use Exception;
use Square\ApiHelper;
use stdClass;

/**
 * Describes the type of this unit and indicates which field contains the unit information. This is an
 * ‘open’ enum.
 */
class TerminalActionActionType
{
    /**
     * The action represents a request to check if the specific device is
     * online or currently active with the merchant in question. Does not require an action options value.
     */
    public const PING = 'PING';

    /**
     * Represents a request to save a card for future card-on-file use.
     */
    public const SAVE_CARD = 'SAVE_CARD';

    private const _ALL_VALUES = [self::PING, self::SAVE_CARD];

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
