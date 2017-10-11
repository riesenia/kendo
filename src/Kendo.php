<?php
namespace Riesenia\Kendo;

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
     * @param string      $name
     * @param string|null $bindTo
     *
     * @return Riesenia\Kendo\Widget\Base
     */
    public static function create($name, $bindTo = null)
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
    public static function js($value)
    {
        return new JavascriptFunction($value);
    }

    /**
     * Create javascript date object.
     *
     * @param string $value
     *
     * @return JavascriptFunction
     */
    public static function date($value)
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
    public static function __callStatic($method, $arguments)
    {
        // create<Widget> method
        if (preg_match('/create([A-Z][a-zA-Z0-9]*)/', $method, $matches)) {
            return call_user_func(['static', 'create'], $matches[1], $arguments[0] ?? null);
        }

        throw new \BadMethodCallException('Unknown method: ' . $method);
    }
}
