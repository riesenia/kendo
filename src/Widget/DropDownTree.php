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
 * @method $this setAdaptiveMode(null|"none"|"auto" $value) Specifies the adaptive rendering mode of the widget.
 * @method null|"none"|"auto" getAdaptiveMode()
 * @method $this setAnimation(null|false|array{close?:array{effects:string, duration:int}, open?:array{effects:string, duration:int}} $value)
 * @method null|false|array{close?:array{effects:string, duration:int}, open?:array{effects:string, duration:int}} getAnimation()
 * @method $this setAutoBind(?bool $value) Determines whether the widget will bind to the data source on initialization.
 * @method ?bool getAutoBind() Get whether the widget will bind to the data source on initialization.
 * @method $this setAutoClose(?bool $value) If set to true the widget will auto close after selecting or checking a item.
 * @method ?bool getAutoClose() Get whether the widget will auto close after selecting or checking a item.
 * @method $this setAutoWidth(?bool $value) If set to true the widget will auto expand the width of the popup element to fit its content.
 * @method ?bool getAutoWidth() Get whether the widget will auto expand the width of the popup element to fit its content.
 * @method $this setCheckAll(?bool $value) Add a check/uncheck all checkbox to the top of the list.
 * @method ?bool getCheckAll() Get whether the widget has a check/uncheck all checkbox.
 * @method $this setCheckAllTemplate(?string $value) The template used to render the checkAll checkbox state.
 * @method ?string getCheckAllTemplate() Get the template used to render the checkAll checkbox state.
 * @method $this setCheckboxes(null|bool|array{checkChildren:bool, name:string, template:string|JavascriptFunction} $value)  If set will render checkboxes for each item.
 * @method null|bool|array{checkChildren:bool, name:string, template:string|JavascriptFunction} getCheckboxes() Get whether the widget will render checkboxes for each item.
 * @method $this setClearButton(?bool $value) Unlsess set to false the widget will display a button when hovering the widget that will clear the value.
 * @method ?bool getClearButton() Get whether the widget will display a button when hovering the widget that will clear the value.
 * @method $this setDataImageUrlField(?string $value) The field of the data item that provides the image URL of the tree items.
 * @method ?string getDataImageUrlField() Get the field of the data item that provides the image URL of the tree items.
 * @method $this setDataSpriteCssClassField(?string $value) Sets the field of the data item that provides the sprite CSS class of the tree
 * @method ?string getDataSpriteCssClassField() Get the field of the data item that provides the sprite CSS class of the tree
 * @method $this setDataTextField(null|string|array $value) The field of the data item that provides the text content of the tree items.
 * @method null|string|array getDataTextField() Get the field of the data item that provides the text content of the tree items.
 * @method $this setDataUrlField(?string $value) The field of the data item that provides the link URL of the tree items.
 * @method ?string getDataUrlField() Get the field of the data item that provides the link URL of the tree items.
 * @method $this setDataValueField(null|string|array $value) The field of the data item that provides the value of the widget. If an array each level uses the array element corresponding to its depth.
 * @method null|string|array getDataValueField() Get the field of the data item that provides the value of the widget.
 * @method $this setDelay(?int $value) Sets the delay in milliseconds after which the widget will start filtering the data source.
 * @method ?int getDelay() Get the delay in milliseconds after which the widget will start filtering the data source.
 * @method $this setEnable(?bool $value) If set to false the widget will be disabled and will not allow user input.
 * @method ?bool getEnable() Get whether the widget is disabled.
 * @method $this setEnforceMinLength(?bool $value) When set to true will hide all the items when the search text is cleared.
 * @method ?bool getEnforceMinLength() Get whether the widget will hide all the items when the search text is cleared.
 * @method $this setFilter(?string $value) The filtering method used to determine the suggestions for the current value. Filtering is turned off by default.
 * @method ?string getFilter() Get the filtering method used to determine the suggestions for the current value.
 * @method $this setFilterLabel(?string $value) The label of the filter input.
 * @method ?string getFilterLabel() Get the label of the filter input.
 * @method $this setFillMode(?string $value) Sets how the color should be applied to the widget.
 * @method ?string getFillMode() Get how the color should be applied to the widget.
 * @method $this setFooterTemplate(null|string|JavascriptFunction $value) The template used to render the footer template.
 * @method null|string|JavascriptFunction getFooterTemplate() Get the template used to render the footer template.
 * @method $this setLabel(null|JavascriptFunction|array{content:string|JavascriptFunction, floating?:bool} $value) The label of the widget.
 * @method null|JavascriptFunction|array{content:string|JavascriptFunction, floating?:bool} getLabel() Get the label that will be displayed before the input.
 * @method $this setHeight(null|int|string $value) Tge maximum height of the suggestion popup in pixels. If set to auto it will be set to the height of the treeview.
 * @method null|int|string getHeight() Get the maximum height of the suggestion popup.
 * @method $this setIgnoreCase(?bool $value) Determines if the search should be case sensitive. Default is false.
 * @method ?bool getIgnoreCase() Get whether the search should be case sensitive.
 * @method $this setLoadOnDemand(null|bool|array{valueMapper:JavascriptFunction} $value) Sets whether the child datasources should be fetched lazily when parent items get expanded. Default is false.
 * @method null|bool|array{valueMapper:JavascriptFunction} getLoadOnDemand() Get whether the child datasources should be fetched lazily when parent items get expanded.
 * @method $this setMessages(null|array{clear?:string, deleteTag?:string, noData?:string, singleTag?:string} $value) The messages that are displayed in the widget.
 * @method null|array{clear?:string, deleteTag?:string, noData?:string, singleTag?:string} getMessages() Get the messages that are displayed in the widget.
 * @method $this setMinLength(?int $value) The minimum number of characters the user must type before a search is performed. Default is 1.
 * @method ?int getMinLength() Get the minimum number of characters the user must type before a search is performed.
 * @method $this setNoDataTemplate(null|string|JavascriptFunction|bool $value) The template used to render the template which is displayed when the underlying datasource is empty.
 * @method null|string|JavascriptFunction|bool getNoDataTemplate() Get the template used to render the template which is displayed when the underlying datasource is empty.
 * @method $this setPlaceholder(?string $value) The hint displayed by the widget when it is empty.
 * @method ?string getPlaceholder() Get the hint displayed by the widget when it is empty.
 * @method $this setPopup(null|array{appendTo?:string, origin?:string, position?:string} $value) The options that will be used for the popup initialization.
 * @method null|array{appendTo?:string, origin?:string, position?:string} getPopup() Get the options that will be used for the popup initialization.
 * @method $this setHeaderTemplate(null|string|JavascriptFunction $value) The template used to render the header of the popup.
 * @method null|string|JavascriptFunction getHeaderTemplate() Get the template used to render the header of the popup.
 * @method $this setValueTemplate(null|string|JavascriptFunction $value) The template used to render the value of the widget.
 * @method null|string|JavascriptFunction getValueTemplate() Get the template used to render the value of the widget.
 * @method $this setTagMode(?string $value) The mode used to render the selected tags. Default is multiple.
 * @method ?string getTagMode() Get the mode used to render the selected tags.
 * @method $this setTemplate(null|string|JavascriptFunction $value) The template used to render the items.
 * @method null|string|JavascriptFunction getTemplate() Get the template used to render the items.
 * @method $this setText(?string $value) The text of the widget used when the autoBind is set to false.
 * @method ?string getText() Get the text of the widget used when the autoBind is set to false.
 * @method $this setValue(null|string|array $value) The value of the widget.
 * @method null|string|array getValue() Get the value of the widget.
 * @method $this setValuePrimitive(?bool $value) If set to true the widget will use the value and valueField fields of the data item and not the data item itself.
 * @method ?bool getValuePrimitive() Get whether the widget will use the value and valueField fields of the data item and not the data item itself.
 * @method $this setRounded(?string $value) Sets the border-radius of the widget.
 * @method ?string getRounded() Get the border-radius of the widget.
 * @method $this setSize(?string $value) The size of the widget.
 * @method ?string getSize() Get the size of the widget.
 * @method $this setChange(?JavascriptFunction $event) The event handler that will be triggered when the value of the widget is changed.
 * @method JavascriptFunction|null getChange() Get the event handler that will be triggered when the value of the widget is changed.
 * @method $this setClose(?JavascriptFunction $event) The event handler that will be triggered when the popup is closed.
 * @method JavascriptFunction|null getClose() Get the event handler that will be triggered when the popup is closed.
 * @method $this setDataBound(?JavascriptFunction $event) The event handler that will be triggered when the widget items are bound to data from the widgets data source.
 * @method JavascriptFunction|null getDataBound() Get the event handler that will be triggered when the widget items are bound to data from the widgets data source.
 * @method $this setFiltering(?JavascriptFunction $event) The event handler that will be triggered when the widget is about to filter the data source.
 * @method JavascriptFunction|null getFiltering() Get the event handler that will be triggered when the widget is about to filter the data source.
 * @method $this setOpen(?JavascriptFunction $event) The event handler that will be triggered when the popup is opened.
 * @method JavascriptFunction|null getOpen() Get the event handler that will be triggered when the popup is opened.
 * @method $this setSelect(?JavascriptFunction $event) The event handler that will be triggered when an item from the popup is selected. When checkboxes are enabled the event will be triggered when the a item is deselected.
 * @method JavascriptFunction|null getSelect() Get the event handler that will be triggered when an item from the popup is selected.
 */
class DropDownTree extends Base
{
}
