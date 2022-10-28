# PHP wrapper for Kendo UI widgets

[![Build Status](https://github.com/riesenia/kendo/workflows/Test/badge.svg)](https://github.com/riesenia/kendo/actions)
[![Latest Version](https://img.shields.io/packagist/v/riesenia/kendo.svg?style=flat-square)](https://packagist.org/packages/riesenia/kendo)
[![Total Downloads](https://img.shields.io/packagist/dt/riesenia/kendo.svg?style=flat-square)](https://packagist.org/packages/riesenia/kendo)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)

[Kendo UI](http://www.telerik.com/kendo-ui) is a great JavaScript library. It offers both open-source and commercial editions.

This library provides a wrapper for all Kendo UI widgets. Telerik provides [PHP wrappers](http://www.telerik.com/php-ui) itself, but these are unnecessarily complex and in addition they are paid. Our library is released under the MIT license, so you are free to use it in any project (even commercial projects) as long as the copyright header is left intact.

## Installation

Install the latest version using `composer require riesenia/kendo`

Or add to your *composer.json* file as a requirement:

```json
{
    "require": {
        "riesenia/kendo": "~3.0"
    }
}
```

*Note: if you use PHP 5.4 - 5.6 use 1.\* version of this library.*

## Usage

Any widget can be created calling the *create* method of *Kendo* class. For example creating a grid with selector *"#grid"* (resulting in `$("#grid").kendoGrid({ ... })` can be achieved by calling:

```php
use Riesenia\Kendo\Kendo; 

echo Kendo::create('Grid')->bindTo('#grid');
```

or by:

```php
use Riesenia\Kendo\Kendo; 

echo Kendo::createGrid('#grid');
```

### Setting properties

Any property can be set by calling *set* method. For adding to properties that are represented by array (or objects), *add* method can be used. Set method can be also used for batch assignment by passing array as the only parameter. To NOT encode passed data, pass them wrapped by `Kendo::js()` call. All method calls can be chained. Examples:

```php
use Riesenia\Kendo\Kendo; 

$grid = Kendo::createGrid('#grid');

// set any property
$grid->setHeight(100);

// set property, that should not be encoded
$grid->setChange(Kendo::js('function(e) {
    console.log(this.select());
}'));

// set properties by array
$grid->set([
    'height' => 100,
    'change' => Kendo::js('function(e) {
        console.log(this.select());
    }')
]);

// add to property
$grid->addColumns(null, 'Name')
    ->addColumns(null, ['field' => 'Surname', 'encoded' => false]);

// pass DataSource object
$grid->setDataSource(Kendo::createDataSource());
```

### Complex example

Creating code for grid as in [this example](https://demos.telerik.com/kendo-ui/grid/local-data-binding "Grid - binding to local data"):

```php
use Riesenia\Kendo\Kendo; 

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

### Observable (MVVM)

Rendering for [Kendo observable](https://demos.telerik.com/kendo-ui/mvvm/index "MVVM - basic usage") is slightly different. Predefined variable name is *viewModel*, but this can be overridden by the method *variableName*. Example:

```php
use Riesenia\Kendo\Kendo; 

echo Kendo::createObservable('#view')
    ->variableName('myMvvm')
    ->setFirstName('John')
    ->setLastName('Doe')
    ->setDisplayGreeting(Kendo::js('function() {
        alert("Hello, " + this.get("firstName") + " " + this.get("lastName") + "!!!");
    }'));
```

This will output:

```javascript
myMvvm = kendo.observable({
    "firstName": "John",
    "lastName": "Doe",
    "displayGreeting": function () {
        alert("Hello, " + this.get("firstName") + " " + this.get("lastName") + "!!!");
    }
});
kendo.bind($("#view"), myMvvm);
```
