<?php
namespace Riesenia\Kendo\Widget;

/**
 * Base class for Kendo UI widgets.
 *
 * @author Tomas Saghy <segy@riesenia.com>
 */
class Base implements \JsonSerializable
{
    /**
     * Widget name.
     *
     * @var string
     */
    protected $_name;

    /**
     * Selector for jQuery object.
     *
     * @var string
     */
    protected $_bindTo;

    /**
     * Data.
     *
     * @var array
     */
    protected $_data = [];

    /**
     * Create requested widget.
     *
     * @param string|null $name
     */
    public function __construct($name = null)
    {
        if ($this->_name === null) {
            $this->_name = $name;
        }
    }

    /**
     * Get widget name.
     *
     * @return string
     */
    public function name()
    {
        return $this->_name;
    }

    /**
     * Set the jQuery selector for binding.
     *
     * @param string $selector
     *
     * @return $this
     */
    public function bindTo($selector)
    {
        $this->_bindTo = $selector;

        return $this;
    }

    /**
     * Property setter.
     *
     * @param array|string $name  property name or array of properties
     * @param mixed|null   $value property value
     *
     * @return $this
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
     * Property setter adding to associative arrays.
     *
     * @param string $name
     * @param string $key
     * @param mixed  $value
     *
     * @return $this
     */
    public function add($name, $key, $value)
    {
        if (!isset($this->_data[$name])) {
            $this->_data[$name] = [];
        }

        if ($key === null) {
            $key = count($this->_data[$name]);
        }

        $this->_data[$name][$key] = $value;

        return $this;
    }

    /**
     * Property getter.
     *
     * @param string $name
     *
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
     * json_encode call.
     *
     * @return mixed|null
     */
    public function jsonSerialize()
    {
        return $this->_data ?: null;
    }

    /**
     * Handle json_encode.
     *
     * @return string
     */
    protected function _encode()
    {
        // json encode
        $data = json_encode($this, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

        // replace markup by JavacriptFunction
        $data = preg_replace_callback('/"::FUNCTION::(.*?)::FUNCTION::"/', function ($matches) {
            return stripcslashes($matches[1]);
        }, $data);

        return $data;
    }

    /**
     * Return javascript code.
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
     * Handle dynamic method calls.
     *
     * @param string $method
     * @param array  $arguments
     *
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

        throw new \BadMethodCallException('Unknown method: ' . $method);
    }
}
