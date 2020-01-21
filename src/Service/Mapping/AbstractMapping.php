<?php

namespace MyPortal\HRS_Api\Service\Mapping;

class AbstractMapping
{
    /**
     * @var array
     */
    protected $data = [];

    /**
     * @param int $key
     *
     * @return string|null
     */
    public function getLabelByKey($key)
    {
        return array_key_exists($key, $this->data)
            ? $this->data[$key]
            : null;
    }
}
