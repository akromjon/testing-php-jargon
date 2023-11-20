<?php

use Akromjon\TestingPhpJargon\TagParser;

class TagParseTest extends \PHPUnit\Framework\TestCase
{ 

    /**
     * @test
     * @dataProvider tagsProvider
     */
    public function test_it_parses_tags($input,$expected)
    {
        $parser = (new TagParser)->parse($input);
        $this->assertSame($expected, $parser);
    }
    
    public  static function tagsProvider():array
    {
        return [
            ['some,tags',['some','tags']],
            ['some | input',['some','input']],
            ['some | input,tags',['some','input','tags']],
            ['some | input, tags | here',['some','input','tags','here']],
            ['some | input, tags | here, more | input',['some','input','tags','here','more','input']],
        ];
    }

    
}