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
 * A class for creating a kendo window.
 *
 * @method $this setActions(array<string>|null $actions) Set the actions that will be available for the window. Predefined values are "Close", "Refresh", "Minimize", "Maximize" and "Pin".
 * @method array<string>|null getActions() Get the actions that will be available for the window.
 * @method $this setAnimation(bool|array{close:array{effetcs:string, duration:int|float}, open:array{effetcs:string, duration:int|float}}|null $animation) Set the animation(s) of the window.
 * @method bool|array{close:array{effetcs:string, duration:int|float}, open:array{effetcs:string, duration:int|float}}|null getAnimation() Get the animation(s) of the window.
 * @method $this setAppendTo(string|null $appendTo) Set the element that the window will be appended to.
 * @method string|null getAppendTo() Get the element that the window will be appended to.
 * @method $this setAutoFocus(bool|null $autoFocus) Set whether the window should be focused when opened.
 * @method bool|null getAutoFocus() Get whether the window should be focused when opened.
 * @method $this setContent(string|array{url:string, dataType:string, iframe:bool, template:string}|null $content) Set the url or request which the window will use to get it's contents.
 * @method string|array{url:string, dataType:string, iframe:bool, template:string}|null getContent() Get the url or request which the window will use to get it's contents.
 * @method $this setDraggable(bool|null $draggable) Set whether the window should be draggable.
 * @method bool|null getDraggable() Get whether the window should be draggable.
 * @method $this iframe(bool|null $iframe) Set whether the window should be an iframe.
 * @method bool|null getIframe() Get whether the window should be an iframe.
 * @method $this setHeight(int|string|null $height) Set the height of the window.
 * @method int|string|null getHeight() Get the height of the window.
 * @method $this setMaxHeight(int|string|null $maxHeight) Set the maximum height of the window.
 * @method int|string|null getMaxHeight() Get the maximum height of the window.
 * @method $this setMaxWidth(int|string|null $maxWidth) Set the maximum width of the window.
 * @method int|string|null getMaxWidth() Get the maximum width of the window.
 * @method $this setMinHeight(int|string|null $minHeight) Set the minimum height of the window.
 * @method int|string|null getMinHeight() Get the minimum height of the window.
 * @method $this setMinWidth(int|string|null $minWidth) Set the minimum width of the window.
 * @method int|string|null getMinWidth() Get the minimum width of the window.
 * @method $this setModal(bool|array{preventScroll:bool}|null $modal) Set whether the window should show a modal overlay over the page.
 * @method bool|array{preventScroll:bool}|null getModal() Get whether the window should show a modal overlay over the page.
 * @method $this setPinned(bool|null $pinned) Set whether the window should be pinned.
 * @method bool|null getPinned() Get whether the window should be pinned.
 * @method $this setPosition(array{top:int|string, left:int|string}|null $position) Set the initial position of the window.
 * @method array{top:int|string, left:int|string}|null getPosition() Get the initial position of the window.
 * @method $this setResizable(bool|null $resizable) Set whether the window should be resizable.
 * @method bool|null getResizable() Get whether the window should be resizable.
 * @method $this setScrollable(bool|null $scrollable) Set whether the window should be scrollable.
 * @method bool|null getScrollable() Get whether the window should be scrollable.
 * @method $this setActivate(JavascriptFunction|null $activate) Set the activate event handler.
 * @method JavascriptFunction|null getActivate() Get the activate event handler.
 * @method $this setClose(JavascriptFunction|null $close) Set the close event handler.
 * @method JavascriptFunction|null getClose() Get the close event handler.
 * @method $this setDeactivate(JavascriptFunction|null $deactivate) Set the deactivate event handler.
 * @method JavascriptFunction|null getDeactivate() Get the deactivate event handler.
 * @method $this setDragend(JavascriptFunction|null $dragend) Set the dragend event handler.
 * @method JavascriptFunction|null getDragend() Get the dragend event handler.
 * @method $this setDragstart(JavascriptFunction|null $dragstart) Set the dragstart event handler.
 * @method JavascriptFunction|null getDragstart() Get the dragstart event handler.
 * @method $this setError(JavascriptFunction|null $error) Set the error event handler.
 * @method JavascriptFunction|null getError() Get the error event handler.
 * @method $this setMaximize(JavascriptFunction|null $maximize) Set the maximize event handler.
 * @method JavascriptFunction|null getMaximize() Get the maximize event handler.
 * @method $this setMinimize(JavascriptFunction|null $minimize) Set the minimize event handler.
 * @method JavascriptFunction|null getMinimize() Get the minimize event handler.
 * @method $this setOpen(JavascriptFunction|null $open) Set the open event handler.
 * @method JavascriptFunction|null getOpen() Get the open event handler.
 * @method $this setRefresh(JavascriptFunction|null $refresh) Set the refresh event handler.
 * @method JavascriptFunction|null getRefresh() Get the refresh event handler.
 * @method $this setResize(JavascriptFunction|null $resize) Set the resize event handler.
 * @method JavascriptFunction|null getResize() Get the resize event handler.
 * @method $this setRestore(JavascriptFunction|null $restore) Set the restore event handler.
 * @method JavascriptFunction|null getRestore() Get the restore event handler.
 *
 */
class Window extends Base
{
}
