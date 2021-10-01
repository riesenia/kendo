<?php
/**
 * This file is part of riesenia/kendo package.
 *
 * Licensed under the MIT License
 * (c) RIESENIA.com
 */

declare(strict_types=1);

namespace Riesenia\Kendo\Widget;

/**
 * Kendo UI Model.
 *
 * @author Tomas Saghy <segy@riesenia.com>
 */
class Model extends Base
{
    /**
     * Widget name.
     *
     * @var string
     */
    protected $_name = 'kendo.data.Model';

    /**
     * Add field (alias of addFields).
     *
     * @param string              $key
     * @param array<string,mixed> $value
     *
     * @return $this
     */
    public function addField(string $key, array $value = []): self
    {
        return $this->add('fields', $key, $value);
    }

    /**
     * Return javascript code.
     *
     * @return string
     */
    public function __toString(): string
    {
        $data = $this->_encode();

        return $this->_name . '.define(' . $data . ');';
    }
}
