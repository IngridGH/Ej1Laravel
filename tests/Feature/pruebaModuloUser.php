<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class pruebaModuloUser extends TestCase
{
    /**
     *
     * @test
     */
    function it_loads_the_users_list_page()
    {
        $this->get('/usuarios')
             ->assertStatus(200)
             ->assertSee('User');
    }
    /**
    *
     * @test
     */
    function it_loads_the_users_details_page(){
        $this->get('/usuarios/5')
            ->assertStatus(200)
            ->assertSee('mostrando  usuario 5 ');
    }
    /**
     *
     * @test
     */
    function it_loads_the_users_nuevos_page(){
        $this->get('/usuarios/nuevo')
            ->assertStatus(200)
            ->assertSee('Creando nuevo usuario ----------------------- ');
    }
}
