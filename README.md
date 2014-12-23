## PHP wrapper for Kendo UI widgets

[Kendo UI](http://www.telerik.com/kendo-ui) is a great JavaScript library. It offers both open-source and commercial editions.

This library provides a wrapper for all Kendo UI widgets. Telerik provides [PHP wrappers](http://www.telerik.com/php-ui) itself,
but these are unnecessarily complex and in addition they are payed. Our library is released under the MIT license, so you are free
to use it in any project (even commercial projects) as long as the copyright header is left intact.

### Complex example

To create kendo grid javascript code as in [this example](http://demos.telerik.com/kendo-ui/grid/local-data-binding "Grid - binding to local data"):

    $model = Kendo::createModel()
        ->addField('ProductName', ['type' => 'string'])
        ->addField('UnitPrice', ['type' => 'number'])
        ->addField('UnitsInStock', ['type' => 'number'])
        ->addField('Discontinued', ['type' => 'boolean']);

    $dataSource = Kendo::createDataSource()
        ->setData(Kendo::js('products'))
        ->setSchema(['model' => $model])
        ->setPageSize(20);

    echo Kendo::createGrid('#grid')
        ->setDataSource($dataSource)
        ->setHeight(550)
        ->setScrollable(true)
        ->setSortable(true)
        ->setFilterable(true)
        ->setPageable(['input' => true, 'numeric' => false])
        ->setColumns([
            'ProductName',
            ['field' => 'UnitPrice', 'title' => 'Unit Price', 'format' => '{0:c}', 'width' => '130px'],
            ['field' => 'UnitsInStock', 'title' => 'Units In Stock', 'width' => '130px'],
            ['field' => 'Discontinued', 'width' => '130px']
        ]);