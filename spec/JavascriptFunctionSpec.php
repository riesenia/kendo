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

class JavascriptFunctionSpec extends ObjectBehavior
{
    public function let()
    {
        $this->beConstructedWith('function () { dummy(); }');
    }

    public function it_is_initializable_with_json_serializable()
    {
        $this->shouldHaveType('Riesenia\Kendo\JavascriptFunction');
        $this->shouldImplement('\JsonSerializable');
    }

    public function it_adds_proper_markup_for_json_encode()
    {
        $this->jsonSerialize()->shouldReturn('::FUNCTION::function () { dummy(); }::FUNCTION::');
    }
}
