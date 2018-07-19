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
        $widget = class_exists($fullName) ? new $fullName() : new Widget\Base('kendo' . $name);

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
        $timestamp = strtotime($value);

        // wrong date format
        if (!$timestamp) {
            return null;
        }

        return new JavascriptFunction('kendo.parseDate("' . date('Y-m-d H:i:s', $timestamp) . '")');
    }

    /**
     * Handle dynamic static method calls.
     *
     * @param string $method
     * @param array  $arguments
     *
     * @return mixed
     */
    public static function __callStatic(string $method, array $arguments)
    {
        // create<Widget> method
        if (preg_match('/create([A-Z][a-zA-Z0-9]*)/', $method, $matches)) {
            return call_user_func([static::class, 'create'], $matches[1], $arguments[0] ?? '');
        }

        throw new \BadMethodCallException('Unknown method: ' . $method);
    }
}
