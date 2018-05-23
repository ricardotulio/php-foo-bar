<?php

namespace App;

class FooBar
{
    const STARTS_IN = 1;

    const ENDS_IN = 100;

    const STRING_FOO = 'Foo';

    const STRING_BAR = 'Bar';

    const QUOTIENT_FOO = 3;

    const QUOTIENT_BAR = 5;

    public function run()
    {
        foreach (range(self::STARTS_IN, self::ENDS_IN) as $number) {
            echo $this->findAndReturnValueFor($number) . PHP_EOL;
        }
    }

    public function findAndReturnValueFor($number)
    {
        $value = '';

        if ($this->shouldPrintNumber($number)) {
            $value .= $number;
        }

        if ($this->shouldPrintFoo($number)) {
            $value .= self::STRING_FOO;
        }

        if ($this->shouldPrintBar($number)) {
            $value .= self::STRING_BAR;
        }

        return $value;
    }

    public function shouldPrintNumber($number)
    {
        return $number % self::QUOTIENT_FOO != 0
            && $number % self::QUOTIENT_BAR != 0;
    }

    public function shouldPrintFoo($number)
    {
        return $number % self::QUOTIENT_FOO == 0;
    }

    public function shouldPrintBar($number)
    {
        return $number % self::QUOTIENT_BAR == 0;
    }
}
