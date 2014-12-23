<?php

namespace spec\Kendo\Widget;

use PhpSpec\ObjectBehavior;

class HierarchicalDataSourceSpec extends ObjectBehavior
{
    public function it_is_initializable_and_extends_data_source()
    {
        $this->shouldHaveType('Kendo\Widget\HierarchicalDataSource');
        $this->shouldHaveType('Kendo\Widget\DataSource');
    }

    public function it_renders_correctly()
    {
        $this->__toString()->shouldReturn('new kendo.data.HierarchicalDataSource(null)');
    }
}
