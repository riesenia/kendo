<?php
/**
 * This file is part of riesenia/kendo package.
 *
 * Licensed under the MIT License
 * (c) RIESENIA.com
 */

declare(strict_types=1);

namespace spec\Riesenia\Kendo\Widget;

use PhpSpec\ObjectBehavior;

class ObservableSpec extends ObjectBehavior
{
    public function it_is_initializable_and_extends_base()
    {
        $this->shouldHaveType('Riesenia\Kendo\Widget\Observable');
        $this->shouldHaveType('Riesenia\Kendo\Widget\Base');
    }

    public function it_renders_correctly()
    {
        $this->__toString()->shouldReturn('viewModel = kendo.observable(null);');
    }

    public function it_can_be_bound()
    {
        $this->bindTo('#id')->__toString()->shouldReturn('viewModel = kendo.observable(null); kendo.bind($("#id"), viewModel);');
    }

    public function it_can_change_variable_name()
    {
        $this->variableName('otherName')->__toString()->shouldReturn('otherName = kendo.observable(null);');
    }
}
