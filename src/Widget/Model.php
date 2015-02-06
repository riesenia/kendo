<?php
namespace Riesenia\Kendo\Widget;

/**
 * Kendo UI Model
 *
 * @author Tomas Saghy <segy@riesenia.com>
 */
class Model extends Base
{
    /**
     * Widget name
     *
     * @var string
     */
    protected $_name = 'kendo.data.Model';

    /**
     * Add field (alias of addFields)
     *
     * @param string field name
     * @param array parameters
     * @return $this for method chaining
     */
    public function addField($key, $value = [])
    {
        return $this->add('fields', $key, $value);
    }

    /**
     * Return javascript code
     *
     * @return string
     */
    public function __toString()
    {
        $data = $this->_encode();

        return $this->_name . '.define(' . $data . ');';
    }
}
