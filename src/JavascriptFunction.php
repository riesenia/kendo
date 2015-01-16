<?php
namespace Riesenia\Kendo;

/**
 * Class for representation of non-json-encoded values (e.g. javascript functions)
 *
 * @author Tomas Saghy <segy@riesenia.com>
 */
class JavascriptFunction implements \JsonSerializable
{
    /**
     * Value
     *
     * @var string
     */
    protected $_value = null;

    /**
     * Constructor
     *
     * @param string
     */
    public function __construct($value = null)
    {
        $this->_value = $value;
    }

    /**
     * json_encode call
     *
     * @return mixed
     */
    public function jsonSerialize()
    {
        return '::FUNCTION::' . $this->_value . '::FUNCTION::';
    }
}
