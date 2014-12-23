<?php

namespace spec\Kendo;

use PhpSpec\ObjectBehavior;

class JavascriptFunctionSpec extends ObjectBehavior
{
    public function let()
    {
        $this->beConstructedWith('function () { dummy(); }');
    }

    public function it_is_initializable_with_json_serializable()
    {
        $this->shouldHaveType('Kendo\JavascriptFunction');
        $this->shouldImplement('\JsonSerializable');
    }

    public function it_adds_proper_markup_for_json_encode()
    {
        $this->jsonSerialize()->shouldReturn('::FUNCTION::function () { dummy(); }::FUNCTION::');
    }
}
