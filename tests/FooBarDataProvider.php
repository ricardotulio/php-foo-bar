<?php

namespace App;

trait FooBarDataProvider
{
    public function numbersThatShouldNotBePrinted()
    {
        return [
            [
                3,
            ],
            [
                5,
            ],
            [
                30,
            ],
        ];
    }

    public function numbersThatShouldBePrinted()
    {
        return [
            [
                1,
            ],
            [
                2,
            ],
            [
                7,
            ],
        ];
    }

    public function numbersThatShouldNotBeReplacedByFoo()
    {
        return [
            [
                2,
            ],
            [
                4,
            ],
            [
                5,
            ],
        ];
    }

    public function numbersThatShouldBeReplacedByFoo()
    {
        return [
            [
                3,
            ],
            [
                6,
            ],
            [
                12,
            ],
        ];
    }

    public function numbersThatShouldNotBeReplacedByBar()
    {
        return [
            [
                4,
            ],
            [
                6,
            ],
            [
                9,
            ],
        ];
    }

    public function numbersThatShouldBeReplacedByBar()
    {
        return [
            [
                5,
            ],
            [
                10,
            ],
            [
                15,
            ],
        ];
    }

    public function numbersAndRespectValuesToBePrinted()
    {
        return [
            [
                1,
                '1',
            ],
            [
                2,
                '2',
            ],
            [
                3,
                'Foo',
            ],
            [
                4,
                '4',
            ],
            [
                5,
                'Bar',
            ],
            [
                15,
                'FooBar',
            ],
        ];
    }
}
