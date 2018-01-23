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
    public function variableName(string $name): self
    {
        $this->_var = $name;

        return $this;
    }

    /**
     * Return javascript code.
     *
     * @return string
     */
    public function __toString(): string
    {
        $data = $this->_encode();

        $data = $this->_var . ' = ' . $this->_name . '(' . $data . ');';

        if ($this->_bindTo) {
            $data .= ' kendo.bind($("' . $this->_bindTo . '"), ' . $this->_var . ');';
        }

        return $data;
    }
}
