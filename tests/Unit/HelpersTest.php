<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HelpersTest extends TestCase
{
    /** @test */
    public function page_title_should_return_the_base_title_if_title_is_empty()
    {
    	// notre fonction page_title doit retourner "Laracarte - List of artisans" si on ne lui passe rien.
    	// c'est cela qu'on va tester ici
        $this->assertEquals('Laracarte - List of artisans', page_title(''));
    }

    /** @test */
    public function page_title_should_return_the_good_title_if_title_is_provided()
    {
    	// notre fonction page_title doit retourner "TITRE | Laracarte - List of artisans" si on lui passe un TITRE.
    	// c'est cela qu'on va tester ici
        $this->assertEquals('About | Laracarte - List of artisans', page_title('About'));
    }


}
