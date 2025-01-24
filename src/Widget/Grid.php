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
use Riesenia\Kendo\Widget\DataSource;
use Riesenia\Kendo\Widget\Base;

/**
 * A class for creating a kendo grid.
 *
 * @method $this setAllowCopy(bool|array{delimeter: string}|null $allowCopy) Set the allow copy options.
 * @method bool|array{delimeter: string}|null getAllowCopy() Get the allow copy options.
 * @method $this setAllowPaste(bool|null $allowPaste) Set whether to allow paste.
 * @method bool|null getAllowPaste() Get whether to allow paste.
 * @method $this setAltRowTemplate(string|JavascriptFunction|null $altRowTemplate) Set the template for alternate rows.
 * @method string|JavascriptFunction|null getAltRowTemplate() Get the template for alternate rows.
 * @method $this setAutoBind(bool|null $autoBind) Set whether to auto bind the grid to the datasource.
 * @method bool|null getAutoBind() Get whether to auto bind the grid to the datasource.
 * @method $this setColumnResizeHandleWidth(int|null $columnResizeHandleWidth) Set the width of the column resize handle in pixels.
 * @method int|null getColumnResizeHandleWidth() Get the width of the column resize handle in pixels.
 * @method $this setColumns(array{aggregates?: array<string>, attributes?: array<string,string>|JavascriptFunction, columnMenu?: bool, columns:mixed[], command?: array{className?: string, click?: JavascriptFunction, iconClass?: string|array<string, string>, name?: string, template?: string, text?: string|array<string, string>, visible?: JavascriptFunction}|string, draggable?: bool, editable?: JavascriptFunction, editor?: string|JavascriptFunction, editorOptions?: mixed[], encoded?: bool, exportable?: bool|mixed[], field?: string, filterable?: mixed[], footerAttributes?: mixed[], footerTemplate?: string|JavascriptFunction, format?: string, groupable?: bool|mixed[], groupHeaderColumnTemplate?: string|JavascriptFunction, groupHeaderTemplate?: string|JavascriptFunction,}[]|null $columns) Set the columns configuration.
 * @method array|null getColumns() Get the columns configuration.
 * @method $this setColumnMenu(bool|array{autoSize?: bool, columns?: bool|array{sort?:string, groups?: array<int, array{columns: array<string>, title:string}>}, filterable?:bool, componentType?: string, clearAllFilters?: bool, sortable: ?bool, messages?: array{apply?: string, autoSizeColumn?: string, autoSizeAllColumns?: string, buttonTitle?: string, columns?: string, filter?: string, lock?: string, moveNext?: string, movePrev?: string, groupColumn?: string, ungroupColumn?: string, reset?: string, sortAscending?: string, sortDescending?: string, setColumnPosition?: string, settings?: string, stick?: string, unstick?: string, unlock?: string}}|null $columnMenu) Set the column menu configuration.
 * @method bool|array{autoSize?: bool, columns?: bool|array{sort?:string, groups?: array<int, array{columns: array<string>, title:string}>}, filterable?:bool, componentType?: string, clearAllFilters?: bool, sortable: ?bool, messages?: array{apply?: string, autoSizeColumn?: string, autoSizeAllColumns?: string, buttonTitle?: string, columns?: string, filter?: string, lock?: string, moveNext?: string, movePrev?: string, groupColumn?: string, ungroupColumn?: string, reset?: string, sortAscending?: string, sortDescending?: string, setColumnPosition?: string, settings?: string, stick?: string, unstick?: string, unlock?: string}}|null getColumnMenu() Get the column menu configuration.
 * @method $this setContextMenu(array{body?: array{name?: string, text?: string, icon?: string, command?: string}, groups?: array{name?: string, text?: string, icon?: string, commands?: string}, head?: array{name?: string, text?: string, icon?: string, commands?: string}, close?: JavascriptFunction, open?: JavascriptFunction, activate?: JavascriptFunction, deactivate?: JavascriptFunction, select?: JavascriptFunction}|bool|null $contextMenu) Set the context menu configuration.
 * @method array{body?: array{name?: string, text?: string, icon?: string, command?: string}, groups?: array{name?: string, text?: string, icon?: string, commands?: string}, head?: array{name?: string, text?: string, icon?: string, commands?: string}, close?: JavascriptFunction, open?: JavascriptFunction, activate?: JavascriptFunction, deactivate?: JavascriptFunction, select?: JavascriptFunction}|bool|null getContextMenu() Get the context menu configuration.
 * @method $this setDataSource(DataSource|null $dataSource) Set the data source for this grid.
 * @method DataSource|null getDataSource() Get the data source of this grid.
 * @method $this setDetailTemplate(string|JavascriptFunction|null $detailTemplate) Set the detail template.
 * @method string|JavascriptFunction|null getDetailTemplate() Get the detail template.
 * @method $this setEditable(bool|string|array{confirmation?: bool|string|JavascriptFunction, cancelDelete?:string, confirmDelete?: string, createAt?: string, destroy?: bool, mode?: string, template?: string|JavascriptFunction, update?: bool, readonly?:bool, window: mixed[]}|null $editable) Set the editable configuration.
 * @method bool|string|array{confirmation?: bool|string|JavascriptFunction, cancelDelete?:string, confirmDelete?: string, createAt?: string, destroy?: bool, mode?: string, template?: string|JavascriptFunction, update?: bool, readonly?:bool, window: mixed[]}|null getEditable() Get the editable configuration.
 * @method $this setEncodeTitles(bool|null $encodeTitles) Set whether to encode titles.
 * @method bool|null getEncodeTitles() Get whether to encode titles.
 * @method $this setExcel(array{allPages?:bool, fileName?: string, filterable?: bool, collapsible?: bool, forceProxy?: bool, proxyUrl?: string}|null $excel) Set the excel export configuration.
 * @method array{allPages?:bool, fileName?: string, filterable?: bool, collapsible?: bool, forceProxy?: bool, proxyUrl?: string}|null getExcel() Get the excel export configuration.
 * @method $this setFilterable(array{extra?: bool, messages?: array<string, string>, mode?:string, operators?: mixed[]}|null $filterable) Set the filterable configuration.
 * @method array|null getFilterable() Get the filterable configuration.
 * @method $this setGroupable(array{enabled?: bool, showFooter?: bool, sort?: array{compare: JavascriptFunction, dir?: string}, messages?:array{empty: string}}|bool|null $groupable) Set the groupable configuration.
 * @method array{enabled?: bool, showFooter?: bool, sort?: array{compare: JavascriptFunction, dir?: string}, messages?:array{empty: string}}|bool|null getGroupable() Get the groupable configuration.
 * @method $this setHeight(int|string|null $height) Set the height of the grid.
 * @method int|string|null getHeight() Get the height of the grid.
 * @method $this setLoaderType(string|null $loaderType) Set the loader type.
 * @method string|null getLoaderType() Get the loader type.
 * @method $this setMessages(mixed[]|null $messages) Set the messages configuration.
 * @method mixed[]|null getMessages() Get the messages configuration.
 * @method $this setMobile(bool|string|null $mobile) Set to change how adaptive rendering is handled.
 * @method bool|string|null getMobile() Get how the adaptive rendering is handled.
 * @method $this setNavigatable(bool|null $navigatable) Set whether the grid is navigatable.
 * @method bool|null getNavigatable() Get whether the grid is navigatable.
 * @method $this setNoRecords(bool|array{template: string|JavascriptFunction}|null $noRecords) Set the no records configuration.
 * @method bool|array{template: string|JavascriptFunction}|null getNoRecords() Get the no records configuration.
 * @method $this setPageable(bool|array{alwaysVisible?: bool, buttonCount?: int, info?: bool, input:? bool, messages?: mixed[], numeric?: bool, pageSize?: float|int, pageSizes?: bool|mixed[], position?: string, previousNext:? bool, refresh?: bool, responsive?: bool}|null $pageable) Set the pageable configuration.
 * @method bool|array{alwaysVisible?: bool, buttonCount?: int, info?: bool, input:? bool, messages?: mixed[], numeric?: bool, pageSize?: float|int, pageSizes?: bool|mixed[], position?: string, previousNext:? bool, refresh?: bool, responsive?: bool}|null getPageable() Get the pageable configuration.
 * @method $this setPdf(array{allPages?: bool, forcePageBreak?: string, author?: string, autoPrint?: bool, avoidLinks?: bool|string, creator?:string, date?:mixed, fileName?: string, forceProxy?: bool, jpegQuality?: float, keepPNG?: bool, keywords?: string, landscape?: bool, margin?: array{bottom?: string|float|int, left?: string|float|int, right?: string|float|int, top?: string|float|int}, paperSize?:string|mixed[], template?:string, repeatHeaders?: bool, scale?: int|float, proxyUrl?: string, proxyTarget?: string, subject?: stirng, title?: string}|null $pdf) Set the pdf export configuration.
 * @method array{allPages?: bool, forcePageBreak?: string, author?: string, autoPrint?: bool, avoidLinks?: bool|string, creator?:string, date?:mixed, fileName?: string, forceProxy?: bool, jpegQuality?: float, keepPNG?: bool, keywords?: string, landscape?: bool, margin?: array{bottom?: string|float|int, left?: string|float|int, right?: string|float|int, top?: string|float|int}, paperSize?:string|mixed[], template?:string, repeatHeaders?: bool, scale?: int|float, proxyUrl?: string, proxyTarget?: string, subject?: stirng, title?: string}|null getPdf() Get the pdf export configuration.
 * @method $this setPersistSelection(bool|null $persistSelection) Set whether to persist selection.
 * @method bool|null getPersistSelection() Get whether to persist selection.
 * @method $this setReorderable(array{columns?: bool, row?: bool|array{clickMoveClick: bool}}|bool|null $reorderable) Set the reorderable configuration.
 * @method array{columns?: bool, row?: bool|array{clickMoveClick: bool}}|bool|null getReorderable() Get the reorderable configuration.
 * @method $this setResizable(bool|array{columns?: bool, rows?: bool}|null $resizable) Set the resizable configuration.
 * @method bool|array{columns?: bool, rows?: bool}|null getResizable() Get the resizable configuration.
 * @method $this setRowTemplate(string|JavascriptFunction|null $rowTemplate) Set the row template.
 * @method string|JavascriptFunction|null getRowTemplate() Get the row template.
 * @method $this setScrollable(bool|array{virtual?:bool|'rows'|'columns'|'rows,columns', endless: bool}|null $scrollable) Set the scrollable configuration.
 * @method bool|array{virtual?:bool|'rows'|'columns'|'rows,columns', endless: bool}|null getScrollable() Get the scrollable configuration.
 * @method $this setSearch(array{fields: array{name: string, operator:string}[]}|null $search) Set the search configuration.
 * @method array{fields: array{name: string, operator:string}[]}|null getSearch() Get the search configuration.
 * @method $this setSelectable(bool|'row'|'cell'|'multiple,row'|'multiple,cell'|array{cellAggregates?:bool|array<string, mixed>, checkboxSelection?: bool, dragToSelect?: bool, mode?:'row'|'cell'|'multiple,row'|'mutiple,cell', ignoreOverlapped?: bool}|null $selectable) Set the selectable configuration.
 * @method bool|'row'|'cell'|'multiple,row'|'multiple,cell'|array{cellAggregates?:bool|array<string, mixed>, checkboxSelection?: bool, dragToSelect?: bool, mode?:'row'|'cell'|'multiple,row'|'mutiple,cell', ignoreOverlapped?: bool}|null getSelectable() Get the selectable configuration.
 * @method $this setSize(string|null $size) Set the size of the grid.
 * @method string|null getSize() Get the size of the grid.
 * @method $this setSortable(bool|array{allowUnsort?: bool, showIndexes?: bool, initialDirection?: string, mode?: string}|null $sortable) Set the sortable configuration.
 * @method bool|array{allowUnsort?: bool, showIndexes?: bool, initialDirection?: string, mode?: string}|null getSortable() Get the sortable configuration.
 * @method $this setStatusBarTemplate(string|JavascriptFunction|null $statusBarTemplate) Set the status bar template.
 * @method string|JavascriptFunction|null getStatusBarTemplate() Get the status bar template.
 * @method $this setToolbar(string|JavascriptFunction|array{iconClass?: string, name?:string, template?: string|JavascriptFunction, text?: string}[]|null $toolbar) Set the toolbar configuration.
 * @method string|JavascriptFunction|array{iconClass?: string, name?:string, template?: string|JavascriptFunction, text?: string}[]|null getToolbar() Get the toolbar configuration.
 * @method $this setWidth(int|string|null $width) Set the width of the grid.
 * @method int|string|null getWidth() Get the width of the grid.
 * @method $this setBeforeEdit(JavascriptFunction|null $beforeEdit) Set the beforeEdit event.
 * @method JavascriptFunction|null getBeforeEdit() Get the beforeEdit event.
 * @method $this setCancel(JavascriptFunction|null $cancel) Set the cancel event.
 * @method JavascriptFunction|null getCancel() Get the cancel event.
 * @method $this setCellClose(JavascriptFunction|null $cellClose) Set the cellClose event.
 * @method JavascriptFunction|null getCellClose() Get the cellClose event.
 * @method $this setChange(JavascriptFunction|null $change) Set the change event.
 * @method JavascriptFunction|null getChange() Get the change event.
 * @method $this setChanging(JavascriptFunction|null $changing) Set the changing event.
 * @method JavascriptFunction|null getChanging() Get the changing event.
 * @method $this setColumnHide(JavascriptFunction|null $columnHide) Set the columnHide event.
 * @method JavascriptFunction|null getColumnHide() Get the columnHide event.
 * @method $this setColumnLock(JavascriptFunction|null $columnLock) Set the columnLock event.
 * @method JavascriptFunction|null getColumnLock() Get the columnLock event.
 * @method $this setColumnMenuInit(JavascriptFunction|null $columnMenuInit) Set the columnMenuInit event.
 * @method JavascriptFunction|null getColumnMenuInit() Get the columnMenuInit event.
 * @method $this setColumnMenuOpen(JavascriptFunction|null $columnMenuOpen) Set the columnMenuOpen event.
 * @method JavascriptFunction|null getColumnMenuOpen() Get the columnMenuOpen event.
 * @method $this setColumnReorder(JavascriptFunction|null $columnReorder) Set the columnReorder event.
 * @method JavascriptFunction|null getColumnReorder() Get the columnReorder event.
 * @method $this setColumnResize(JavascriptFunction|null $columnResize) Set the columnResize event.
 * @method JavascriptFunction|null getColumnResize() Get the columnResize event.
 * @method $this setColumnShow(JavascriptFunction|null $columnShow) Set the columnShow event.
 * @method JavascriptFunction|null getColumnShow() Get the columnShow event.
 * @method $this setColumnStick(JavascriptFunction|null $columnStick) Set the columnStick event.
 * @method JavascriptFunction|null getColumnStick() Get the columnStick event.
 * @method $this setColumnUnlock(JavascriptFunction|null $columnUnlock) Set the columnUnlock event.
 * @method JavascriptFunction|null getColumnUnlock() Get the columnUnlock event.
 * @method $this setColumnUnstick(JavascriptFunction|null $columnUnstick) Set the columnUnstick event.
 * @method JavascriptFunction|null getColumnUnstick() Get the columnUnstick event.
 * @method $this setDataBinding(JavascriptFunction|null $dataBinding) Set the dataBinding event.
 * @method JavascriptFunction|null getDataBinding() Get the dataBinding event.
 * @method $this setDataBound(JavascriptFunction|null $dataBound) Set the dataBound event.
 * @method JavascriptFunction|null getDataBound() Get the dataBound event.
 * @method $this setDetailCollapse(JavascriptFunction|null $detailCollapse) Set the detailCollapse event.
 * @method JavascriptFunction|null getDetailCollapse() Get the detailCollapse event.
 * @method $this setDetailExpand(JavascriptFunction|null $detailExpand) Set the detailExpand event.
 * @method JavascriptFunction|null getDetailExpand() Get the detailExpand event.
 * @method $this setDetailInit(JavascriptFunction|null $detailInit) Set the detailInit event.
 * @method JavascriptFunction|null getDetailInit() Get the detailInit event.
 * @method $this setEdit(JavascriptFunction|null $edit) Set the edit event.
 * @method JavascriptFunction|null getEdit() Get the edit event.
 * @method $this setExcelExport(JavascriptFunction|null $excelExport) Set the excelExport event.
 * @method JavascriptFunction|null getExcelExport() Get the excelExport event.
 * @method $this setFilter(JavascriptFunction|null $filter) Set the filter event.
 * @method JavascriptFunction|null getFilter() Get the filter event.
 * @method $this setFilterMenuInit(JavascriptFunction|null $filterMenuInit) Set the filterMenuInit event.
 * @method JavascriptFunction|null getFilterMenuInit() Get the filterMenuInit event.
 * @method $this setFilterMenuOpen(JavascriptFunction|null $filterMenuOpen) Set the filterMenuOpen event.
 * @method JavascriptFunction|null getFilterMenuOpen() Get the filterMenuOpen event.
 * @method $this setGroup(JavascriptFunction|null $group) Set the group event.
 * @method JavascriptFunction|null getGroup() Get the group event.
 * @method $this setGroupCollapse(JavascriptFunction|null $groupCollapse) Set the groupCollapse event.
 * @method JavascriptFunction|null getGroupCollapse() Get the groupCollapse event.
 * @method $this setGroupExpand(JavascriptFunction|null $groupExpand) Set the groupExpand event.
 * @method JavascriptFunction|null getGroupExpand() Get the groupExpand event.
 * @method $this setNavigate(JavascriptFunction|null $navigate) Set the navigate event.
 * @method JavascriptFunction|null getNavigate() Get the navigate event.
 * @method $this setPage(JavascriptFunction|null $page) Set the page event.
 * @method JavascriptFunction|null getPage() Get the page event.
 * @method $this setPaste(JavascriptFunction|null $paste) Set the paste event.
 * @method JavascriptFunction|null getPaste() Get the paste event.
 * @method $this setPdfExport(JavascriptFunction|null $pdfExport) Set the pdfExport event.
 * @method JavascriptFunction|null getPdfExport() Get the pdfExport event.
 * @method $this setRemove(JavascriptFunction|null $remove) Set the remove event.
 * @method JavascriptFunction|null getRemove() Get the remove event.
 * @method $this setRowReorder(JavascriptFunction|null $rowReorder) Set the rowReorder event.
 * @method JavascriptFunction|null getRowReorder() Get the rowReorder event.
 * @method $this setRowResize(JavascriptFunction|null $rowResize) Set the rowResize event.
 * @method JavascriptFunction|null getRowResize() Get the rowResize event.
 * @method $this setSave(JavascriptFunction|null $save) Set the save event.
 * @method JavascriptFunction|null getSave() Get the save event.
 * @method $this setSaveChanges(JavascriptFunction|null $saveChanges) Set the saveChanges event.
 * @method JavascriptFunction|null getSaveChanges() Get the saveChanges event.
 * @method $this setSort(JavascriptFunction|null $sort) Set the sort event.
 * @method JavascriptFunction|null getSort() Get the sort event.
 */
class Grid extends Base
{
}
