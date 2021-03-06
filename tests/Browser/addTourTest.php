<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class addTourTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testAddTour()
    {
        $this->browse(function (Browser $browser) {
            
            $browser->visit('/login')
            
            ->assertSee('Login')
            ->value('#email','jose@mail.com')
            ->value('#password','123456')
            ->click('button[type="submit"]')
            ->assertSee('Dashboard')
            ->visit('/tours/create')
            ->assertSee('Create a Tour')
            ->value('#title','Tour Test')
            ->value('#tour_code','T1')
            ->value('#description','Texto de prueba')
            ->value('#short_description','Test_short')
            ->value('#adult_price', '200')
            ->click('button[type="submit"]')
            ->assertPathIs('/tours');
        });
    }
}
