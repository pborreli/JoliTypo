<?php

namespace JoliTypo\Fixer;

use JoliTypo\Fixer;
use JoliTypo\FixerInterface;

class Dash implements FixerInterface
{
    public function fix($content)
    {
        $content = preg_replace('@(?<=[0-9 ]|^)-(?=[0-9 ]|$)@', Fixer::NDASH, $content);

        //$content = preg_replace('#(?<=[^!*+,/:;<=>@\\\\_|-])--(?=[^!*+,/:;<=>@\\\\_|-])#', Fixer::NDASH, $content);

        $content = preg_replace("@ ?-- ?([^-]|$)@s", Fixer::MDASH."$1", $content);

        return $content;
    }
}
