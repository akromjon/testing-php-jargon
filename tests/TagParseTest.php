<?php

use Akromjon\TestingPhpJargon\TagParser;

class TagParseTest extends \PHPUnit\Framework\TestCase
{
    public function test_it_parses_without_spaces_of_tags(){
        $tagParser = new TagParser();
        $result1 = $tagParser->parse('some,tags');
        $this->assertSame(['some','tags'], $result1);
    }
    public function test_it_parses_with_comma_of_tags(){

        $tagParser = new TagParser();
        $result1 = $tagParser->parse('some, input');
        $this->assertSame(['some','input'], $result1);      
    }
    
    public function test_it_parses_with_pipe_of_tags(){
            
        $tagParser = new TagParser();
        $result1 = $tagParser->parse('some | input');
        $this->assertSame(['some','input'], $result1);    
            
    }
}