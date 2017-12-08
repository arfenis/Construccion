<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class editTourTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testEdit()
    {
        $this->browse(function (Browser $browser) {
            $browser->$browser->visit('/login')
            
            ->assertSee('Login')
            ->value('#email','jose@mail.com')
            ->value('#password','123456')
            ->click('button[type="submit"]')
            ->assertSee('Dashboard')
            ->clicklink('Edit')
            ->assertSee('Edit a Tour')
            ->value('#title','Tour Test2')
            ->value('#tour_code','T2')
            ->value('#description','Texto de prueba')
            ->value('#short_description','Test_short')
            ->value('#adult_price', '200')
            ->click('button[type="submit"]')
            ->assertPathIs('/tours'); 
        });
    }
}
