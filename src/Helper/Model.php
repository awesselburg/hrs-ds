<?php

namespace MyPortal\HRS_Api\Helper;

/**
 * Class Model
 *
 * @package MyPortal\HRS_Api\Helper
 */
class Model
{
    const CREATE_JSON_PAYLOAD_METHOD = 'createPayload';

    /**
     * @param bool $unsetEmptyValues
     *
     * @return array
     */
    public function createPayload($unsetEmptyValues = true)
    {
        $var = get_object_vars($this);
        foreach ($var as $key => &$value) {
            if (is_object($value) && method_exists($value, self::CREATE_JSON_PAYLOAD_METHOD)) {
                $value = $value->createPayload($unsetEmptyValues);
            }
            if (is_array($value)) {
                $result = [];
                foreach ($value as $item) {
                    if (method_exists($item, self::CREATE_JSON_PAYLOAD_METHOD)) {
                        $result[] = $item->createPayload($unsetEmptyValues);
                    }
                }
                if (count($result)) {
                    $value = $result;
                }
            }

            if ($unsetEmptyValues && ($value === null || (is_array($value) && !count($value)))) {
                unset($var[$key]);
                continue;
            };
        }

        return $var;
    }
}
