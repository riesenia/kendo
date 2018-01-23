<?php
/**
 * This file is part of riesenia/kendo package.
 *
 * Licensed under the MIT License
 * (c) RIESENIA.com
 */

declare(strict_types=1);

namespace spec\Riesenia\Kendo;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class KendoSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('Riesenia\Kendo\Kendo');
    }

    public function it_creates_widget_base_class()
    {
        $this->create(Argument::any())->shouldBeAnInstanceOf('Riesenia\Kendo\Widget\Base');
    }

    public function it_creates_overridden_class()
    {
        $this->create('Model')->shouldBeAnInstanceOf('Riesenia\Kendo\Widget\Model');
    }

    public function it_creates_javascript_function_class()
    {
        $this->js(Argument::any())->shouldBeAnInstanceOf('Riesenia\Kendo\JavascriptFunction');
    }

    public function it_creates_date_javascript_object()
    {
        $this->date('2010-01-01 00:00:00')->shouldBeAnInstanceOf('Riesenia\Kendo\JavascriptFunction');
    }

    public function it_returns_null_for_wrong_date()
    {
        $this->date(Argument::any())->shouldReturn(null);
    }
}
