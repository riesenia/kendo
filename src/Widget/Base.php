<?php
namespace Riesenia\Kendo\Widget;

/**
 * Base class for Kendo UI widgets
 *
 * @author Tomas Saghy <segy@riesenia.com>
 */
class Base implements \JsonSerializable
{
    /**
     * Widget name
     *
     * @var string
     */
    protected $_name = null;

    /**
     * Selector for jQuery object
     *
     * @var string
     */
    protected $_bindTo = null;

    /**
     * Data
     *
     * @var array
     */
    protected $_data = [];

    /**
     * Create requested widget
     *
     * @param string widget name
     */
    public function __construct($name = null)
    {
        if (is_null($this->_name)) {
            $this->_name = $name;
        }
    }

    /**
     * Set the jQuery selector for binding
     *
     * @param string
     * @return $this for method chaining
     */
    public function bindTo($selector)
    {
        $this->_bindTo = $selector;

        return $this;
    }

    /**
     * Property setter
     *
     * @param string|array property name or array of properties
     * @param mixed property value
     * @return $this for method chaining
     */
    public function set($name, $value = null)
    {
        if (!is_array($name)) {
            $name = [$name => $value];
        }

        foreach ($name as $property => $value) {
            $this->_data[$property] = $value;
        }

        return $this;
    }

    /**
     * Property setter adding to associative arrays
     *
     * @param string property name
     * @param string property key
     * @param mixed property value
     * @return $this for method chaining
     */
    public function add($name, $key, $value)
    {
        if (!isset($this->_data[$name])) {
            $this->_data[$name] = [];
        }

        if (is_null($key)) {
            $key = count($this->_data[$name]);
        }

        $this->_data[$name][$key] = $value;

        return $this;
    }

    /**
     * Property getter
     *
     * @param string property name
     * @return mixed property value
     */
    public function get($name)
    {
        if (!isset($this->_data[$name])) {
            return null;
        }

        return $this->_data[$name];
    }

    /**
     * json_encode call
     *
     * @return mixed
     */
    public function jsonSerialize()
    {
        return $this->_data ? $this->_data : null;
    }

    /**
     * Handle json_encode
     *
     * @return string
     */
    protected function _encode()
    {
        // json encode
        $data = json_encode($this, JSON_UNESCAPED_SLASHES);

        // replace markup by JavacriptFunction
        $data = preg_replace_callback('/"::FUNCTION::(.*?)::FUNCTION::"/', function ($matches) {
            return stripcslashes($matches[1]);
        }, $data);

        return $data;
    }

    /**
     * Return javascript code
     *
     * @return string
     */
    public function __toString()
    {
        $data = $this->_encode();

        // binding to jquery object
        if ($this->_bindTo) {
            return '$("' . $this->_bindTo . '").' . $this->_name . '(' . $data . ');';
        }

        return 'new ' . $this->_name . '(' . $data . ');';
    }

    /**
     * Handle dynamic method calls
     *
     * @param string method name
     * @param array arguments
     * @return mixed
     */
    public function __call($method, $arguments)
    {
        // set<Attribute> for setting object attributes
        if (preg_match('/set([A-Z][a-zA-Z0-9]*)/', $method, $matches)) {
            return call_user_func([$this, 'set'], lcfirst($matches[1]), $arguments[0]);
        }

        // add<Attribute> for adding to array object attributes
        if (preg_match('/add([A-Z][a-zA-Z0-9]*)/', $method, $matches)) {
            return call_user_func([$this, 'add'], lcfirst($matches[1]), $arguments[0], $arguments[1]);
        }

        // get<Attribute> for getting object attributes
        if (preg_match('/get([A-Z][a-zA-Z0-9]*)/', $method, $matches)) {
            return call_user_func([$this, 'get'], lcfirst($matches[1]));
        }

        throw new \BadMethodCallException("Unknown method: " . $method);
    }
}
