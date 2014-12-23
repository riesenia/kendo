# PHP wrapper for Kendo UI widgets

[Kendo UI](http://www.telerik.com/kendo-ui) is a great JavaScript library. It offers both open-source and commercial editions.

This library provides a wrapper for all Kendo UI widgets. Telerik provides [PHP wrappers](http://www.telerik.com/php-ui) itself,
but these are unnecessarily complex and in addition they are payed. Our library is released under the MIT license, so you are free
to use it in any project (even commercial projects) as long as the copyright header is left intact.

## Installation

Install the latest version using `composer require riesenia/kendo`

Or add to your *composer.json* file as a requirement:

    {
        "require": {
            "riesenia/kendo": "~1.0"
        }
    }

## Usage

Any widget can be created calling the *create* method of *Kendo* class. For example creating a grid with selector *"#grid"* (resulting
in `$("#grid").kendoGrid({ ... })` can be achieved by calling:

```php
use Kendo\Kendo; 

echo Kendo::create('Grid')->bindTo('#grid');
```

or faster by:

```php
use Kendo\Kendo; 

echo Kendo::createGrid('#grid');
```

### Setting properties

Any property can be set by calling *set* method. For adding to properties that are represented by array (or objects), *add* method
can be used. To NOT encode passed data, pass them wrapped by `Kendo::js()` call. All the methods return the instance so calls can be
chained. Examples:

```php
use Kendo\Kendo; 

$grid = Kendo::createGrid('#grid');

// set any property
$grid->setHeight(100);

// set property, that should not be encoded
$grid->setChange(Kendo::js('function(e) {
    console.log(this.select());
}'));

// add to property
$grid->addColumns(null, 'Name')
    ->addColumns(null, ['field' => 'Surname', 'encoded' => false]);

// pass DataSource object
$grid->setDataSource(Kendo::createDataSource());
```

### Complex example

Creating code for grid as in [this example](http://demos.telerik.com/kendo-ui/grid/local-data-binding "Grid - binding to local data"):

```php
use Kendo\Kendo; 

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
```

## Tests

You can run the unit tests with the following command:

    $ cd path/to/riesenia/kendo
    $ composer install
    $ vendor/bin/phpspec run