<?php

namespace spec\Kendo\Widget;

use PhpSpec\ObjectBehavior;

class ModelSpec extends ObjectBehavior
{
    public function it_is_initializable_and_extends_base()
    {
        $this->shouldHaveType('Kendo\Widget\Model');
        $this->shouldHaveType('Kendo\Widget\Base');
    }

    public function it_renders_correctly()
    {
        $this->__toString()->shouldReturn('kendo.data.Model.define(null)');
    }
}
