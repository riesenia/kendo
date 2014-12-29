<?php

namespace spec\Kendo\Widget;

use PhpSpec\ObjectBehavior;

class ObservableSpec extends ObjectBehavior
{
    public function it_is_initializable_and_extends_base()
    {
        $this->shouldHaveType('Kendo\Widget\Observable');
        $this->shouldHaveType('Kendo\Widget\Base');
    }

    public function it_renders_correctly()
    {
        $this->__toString()->shouldReturn('viewModel = kendo.observable(null);');
    }

    public function it_can_be_binded()
    {
        $this->bindTo('#id')->__toString()->shouldReturn('viewModel = kendo.observable(null); kendo.bind($("#id"), viewModel);');
    }

    public function it_can_change_variable_name()
    {
        $this->variableName('otherName')->__toString()->shouldReturn('otherName = kendo.observable(null);');
    }
}
