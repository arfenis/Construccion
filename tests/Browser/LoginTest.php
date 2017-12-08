<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testLogin()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    
                    ->assertSee('Login')
                    ->value('#email','jose@mail.com')
                    ->value('#password','123456')
                    ->click('button[type="submit"]')
                    ->assertSee('Dashboard');
                    
        });
    }
}
