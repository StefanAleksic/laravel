<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Title;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }
    
    /*public function testTitleModelCount()
    {
        //$value = 1;
        //$this->assertTrue(1 === $value, 'Value should be 1.');
        
        $titles = new Title;
        $this->assertTrue(count($titles->all()) === 6, 'There should be six titles!' );
    }
    
    public function testLastTitleShouldBeProfessor()
    {
        $titles = new Title();
        $titles_array = $titles->all();
        $this->assertEquals('Professor', array_pop($titles_array), 'Titles last element should be professor.' );
    }*/
}
