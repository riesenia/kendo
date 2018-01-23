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

class DataSourceSpec extends ObjectBehavior
{
    public function it_is_initializable_and_extends_base()
    {
        $this->shouldHaveType('Riesenia\Kendo\Widget\DataSource');
        $this->shouldHaveType('Riesenia\Kendo\Widget\Base');
    }

    public function it_renders_correctly()
    {
        $this->__toString()->shouldReturn('new kendo.data.DataSource(null);');
    }
}
