<?php
/**
 * This file is part of riesenia/kendo package.
 *
 * Licensed under the MIT License
 * (c) RIESENIA.com
 */

declare(strict_types=1);

namespace Riesenia\Kendo\Widget;

use Riesenia\Kendo\JavascriptFunction;
use Riesenia\Kendo\Widget\Base;

/**
 * A class for creating a kendo form.
 *
 * @author Adam Bezak <adam.bezak@riesenia.com>
 *
 * @method $this setButtonsTemplate(string|JavascriptFunction|null $template) Set the template used for rendering form buttons.
 * @method string|JavascriptFunction|null getButtonsTemplate() Get the template used for rendering form buttons.
 * @method $this setFocusFirst(bool|null $focusFirst) Set whether to focus the first input on initialization.
 * @method bool|null getFocusFirst() Get whether to focus the first input on initialization.
 * @method $this setFormatLabel(JavascriptFunction|null $formatLabel) Callback function to change the default format of automatically generated labels.
 * @method bool|null getFormatLabel() Get the callback function for changing the default format of automatically generated labels.
 * @method $this setFormData(array $formData) Set the form data. Unless the items option is set, the form will generate fields based on the provided data.
 * @method array|null getFormData() Get the form data.
 * @method $this setItems(array<array{type: string, field: string, editor: string|JavascriptFunction, editorOptions:array, validation:array, label: string|array{text:string, optional:bool, encoded?:bool}, id: string, title: string, hint:string, colSpan: int, attributes: array, layout?: string, grid:array }>|null $items) Set the form items.
 * @method array<array{type: string, field: string, editor: string|JavascriptFunction, editorOptions:array, validation:array, label: string|array{text:string, optional:bool, encoded?:bool}, id: string, title: string, hint:string, colSpan: int, attributes: array, layout?: string, grid:array }>|null getItems() Get the form items.
 * @method $this setOrientation(string|null $orientation) Set the form orientation.
 * @method string|null getOrientation() Get the form orientation.
 * @method $this setMessages(array{submit?: string, clear?: string, optional?: string}|null $messages) Set the form messages.
 * @method array{submit?: string, clear?: string, optional?: string}|null getMessages() Get the form messages.
 * @method $this setValidatable(array|null $validatable) Set the build-in validator options.
 * @method array|null getValidatable() Get the built-in validator options.
 * @method $this setLayout(string|null $layout) Set the layout of form content.
 * @method string getLayout() Get the form content layout.
 * @method $this setGrid(array{cols:string|int, gutter:int|string|array{rows:int|string, cols:int|string}}|null $grid) Set the form grid layout.
 * @method array{cols:string|int, gutter:int|string|array{rows:int|string, cols:int|string}}|null getGrid() Get the form grid layout.
 * @method $this setSize(string|null $size) Set the value controlling the form size.
 * @method string getSize() Get the value controlling the form size.
 * @method $this setValidate(JavascriptFunction|null $validate) Set the function that will be called when the form is validated.
 * @method JavascriptFunction|null getValidate() Get the function that will be called when the form is validated.
 * @method $this setValidateField(JavascriptFunction|null $validateField) Set the function that will be called when a field is validated.
 * @method JavascriptFunction|null getValidateField() Get the function that will be called when a field is validated.
 * @method $this setChange(JavascriptFunction|null $change) Set the function that will be called when the form is changed.
 * @method JavascriptFunction|null getChange() Get the function that will be called when the form is changed.
 * @method $this setSubmit(JavascriptFunction|null $submit) Set the function that will be called when the form is submitted.
 * @method JavascriptFunction|null getSubmit() Get the function that will be called when the form is submitted.
 * @method $this setClear(JavascriptFunction|null $clear) Set the function that will be called when the form is cleared.
 * @method JavascriptFunction|null getClear() Get the function that will be called when the form is cleared.
 */
class Form extends Base
{
}
