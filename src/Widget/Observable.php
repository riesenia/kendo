<?php
namespace Riesenia\Kendo\Widget;

/**
 * Kendo UI Observable.
 *
 * @author Tomas Saghy <segy@riesenia.com>
 */
class Observable extends Base
{
    /**
     * Widget name.
     *
     * @var string
     */
    protected $_name = 'kendo.observable';

    /**
     * Variable name for observable.
     *
     * @var string
     */
    protected $_var = 'viewModel';

    /**
     * Change variable name.
     *
     * @param string $name variable name
     *
     * @return $this
     */
    public function variableName($name)
    {
        $this->_var = $name;

        return $this;
    }

    /**
     * Return javascript code.
     *
     * @return string
     */
    public function __toString()
    {
        $data = $this->_encode();

        $data = $this->_var . ' = ' . $this->_name . '(' . $data . ');';

        if ($this->_bindTo) {
            $data .= ' kendo.bind($("' . $this->_bindTo . '"), ' . $this->_var . ');';
        }

        return $data;
    }
}
