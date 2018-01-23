<?php
/**
 * This file is part of riesenia/kendo package.
 *
 * Licensed under the MIT License
 * (c) RIESENIA.com
 */

declare(strict_types=1);

namespace Riesenia\Kendo;

/**
 * Class for representation of non-json-encoded values (e.g. javascript functions).
 *
 * @author Tomas Saghy <segy@riesenia.com>
 */
class JavascriptFunction implements \JsonSerializable
{
    /**
     * Value.
     *
     * @var string
     */
    protected $_value;

    /**
     * Constructor.
     *
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->_value = $value;
    }

    /**
     * json_encode call.
     *
     * @return string
     */
    public function jsonSerialize(): string
    {
        return '::FUNCTION::' . $this->_value . '::FUNCTION::';
    }
}
