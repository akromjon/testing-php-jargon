<?php

use Akromjon\TestingPhpJargon\TagParser;

class TagParseTest extends \PHPUnit\Framework\TestCase
{
    public function testParse(){

        $tagParser = new TagParser();
        $result1 = $tagParser->parse(' some,input');
        $this->assertSame(['some','input'], $result1);

        $result2 = $tagParser->parse('some, input');
        $this->assertSame(['some','input'], $result2);
    }    
}