<?php

use Akromjon\TestingPhpJargon\TagParser;

class TagParseTest extends \PHPUnit\Framework\TestCase
{
    protected TagParser $tagParser;
    public function setUp():void
    {
        $this->tagParser = new TagParser();
    }
    public function test_it_parses_without_spaces_of_tags()
    {
        $parser = $this->tagParser->parse('some,tags');
        $this->assertSame(['some','tags'], $parser);
    }
    public function test_it_parses_with_comma_of_tags()
    {
        $parser = $this->tagParser->parse('some, input');
        $this->assertSame(['some','input'], $parser);      
    }
    
    public function test_it_parses_with_pipe_of_tags()
    {            
        $parser = $this->tagParser->parse('some | input');
        $this->assertSame(['some','input'], $parser);    
            
    }
}