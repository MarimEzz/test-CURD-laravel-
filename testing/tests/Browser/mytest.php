<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\DuskTestCase;

class mytest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    
    public function testExample()
    {
        $this->browse(function ($browser) {
            $browser->visit('/')
                    ->type('a',3)
                    ->type('b',1)
                    ->press('Execute')
                    ->assertPathIs('/calc')
                    ->assertSee('4');
        });
    }
}
