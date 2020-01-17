<?php

namespace MyPortal\HRS_Api\Helper;

/**
 * Class Object
 *
 * @package MyPortal\HRS_Api\Helper
 */
class Object
{
    const CREATE_JSON_PAYLOAD_METHOD = 'createJsonPayload';

    /**
     * @param bool $unsetEmptyValues
     *
     * @return array
     */
    public function createJsonPayload($unsetEmptyValues = true)
    {
        $var = get_object_vars($this);
        foreach ($var as $key => &$value) {
            if (is_object($value) && method_exists($value, self::CREATE_JSON_PAYLOAD_METHOD)) {
                $value = $value->createJsonPayload($unsetEmptyValues);
            }
            if (is_array($value)) {
                $result = [];
                foreach ($value as $item) {
                    if (method_exists($item, self::CREATE_JSON_PAYLOAD_METHOD)) {
                        $result[] = $item->createJsonPayload($unsetEmptyValues);
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
