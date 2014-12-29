<?php

namespace spec\Kendo\Widget;

use PhpSpec\ObjectBehavior;

use Kendo\Kendo;

class BaseSpec extends ObjectBehavior
{
    public function let()
    {
        $this->beConstructedWith('kendoGrid');
    }

    public function it_is_initializable_with_json_serializable()
    {
        $this->shouldHaveType('Kendo\Widget\Base');
        $this->shouldImplement('\JsonSerializable');
    }

    public function it_has_correct_name()
    {
        $this->__toString()->shouldReturn('new kendoGrid(null);');
    }

    public function it_can_be_binded()
    {
        $this->bindTo('#id')->__toString()->shouldReturn('$("#id").kendoGrid(null);');
    }

    public function it_can_set_data()
    {
        $this->set('property', 'value')->get('property')->shouldReturn('value');
    }

    public function it_json_encodes_data()
    {
        $this->set('property', 'value')->__toString()->shouldReturn('new kendoGrid({"property":"value"});');
    }

    public function it_does_not_json_encode_functions()
    {
        $this->set('property', Kendo::js('function () {}'))->__toString()->shouldReturn('new kendoGrid({"property":function () {}});');
    }
}
