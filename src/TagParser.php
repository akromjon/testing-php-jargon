<?php

namespace Akromjon\TestingPhpJargon;
class TagParser{
    public function parse(string $tags):array
    {
        return preg_split("/ ?[,|] ?/", $tags);        
    }
}