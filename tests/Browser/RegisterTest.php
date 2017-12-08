<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     *//*
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                    ->assertSee('Register')
                    ->value('#name','Joe Schome')
                    ->value('#email','jose@mail.com')
                    ->value('#password','123456')
                    ->value('#password-confirm','123456')
                    ->click('button[type="submit"]')
                    ->assertPathIs('/home');
        });
    }*/
}
