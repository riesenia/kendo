<?php
/**
 * This file is part of riesenia/kendo package.
 *
 * Licensed under the MIT License
 * (c) RIESENIA.com
 */

declare(strict_types=1);

namespace Riesenia\Kendo;

use Riesenia\Kendo\Widget\Base;

/**
 * Factory for Kendo UI widgets.
 *
 * @author Tomas Saghy <segy@riesenia.com>
 *
 * @method static Riesenia\Kendo\Widget\Form createForm(string $bindTo = '') Create a form widget.
 * @method static Riesenia\Kendo\Widget\Grid createGrid(string $bindTo = '') Create a grid widget.
 * @method static Riesenia\Kendo\Widget\Window createWindow(string $bindTo = '') Create a window widget.
 * @method static Riesenia\Kendo\Widget\DropDownTree createDropDownTree(string $bindTo = '') Create a drop down tree widget.
 */
class Kendo
{
    /**
     * Create and return instance of requested Kendo widget.
     *
     * @param string $name
     * @param string $bindTo
     *
     * @return Base
     */
    public static function create(string $name, string $bindTo = ''): Base
    {
        $fullName = __NAMESPACE__ . '\\Widget\\' . $name;
        /** @var Widget\Base */
        $widget = \class_exists($fullName) ? new $fullName() : new Widget\Base('kendo' . $name);

        if ($bindTo) {
            $widget->bindTo($bindTo);
        }

        return $widget;
    }

    /**
     * Create javascript function.
     *
     * @param string $value
     *
     * @return JavascriptFunction
     */
    public static function js(string $value): JavascriptFunction
    {
        return new JavascriptFunction($value);
    }

    /**
     * Create javascript date object.
     *
     * @param string $value
     *
     * @return JavascriptFunction|null
     */
    public static function date(string $value): ?JavascriptFunction
    {
        $timestamp = \strtotime($value);

        // wrong date format
        if (!$timestamp) {
            return null;
        }

        return new JavascriptFunction('kendo.parseDate("' . \date('Y-m-d H:i:s', $timestamp) . '")');
    }

    /**
     * Handle dynamic static method calls.
     *
     * @param string  $method
     * @param mixed[] $arguments
     *
     * @return mixed
     */
    public static function __callStatic(string $method, array $arguments)
    {
        // create<Widget> method
        if (\preg_match('/create([A-Z][a-zA-Z0-9]*)/', $method, $matches)) {
            if (!is_string($arguments[0] ?? '')) {
                throw new \InvalidArgumentException('BindTo must be a string');
            }

            return static::create($matches[1], $arguments[0] ?? '');
        }

        throw new \BadMethodCallException('Unknown method: ' . $method);
    }
}
