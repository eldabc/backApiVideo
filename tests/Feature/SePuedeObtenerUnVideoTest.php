<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Video;

class SePuedeObtenerUnVideoTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function testSePuedeObtenerUnVideoPorSuId()
    {
        //Crear el scenario
        //Crear un video en el sistema (DB)
        
        // factory(Video::class)->create([
        //     'id'  => 1,
        //     'title' => 'MI titulo',
        //     'descripcion' => 'Mi descripcion',
        //     'url_video' => 'urltest'
        // ]);
        
        $video = factory(Video::class)->create();

        //Llamar la api para pedir ese video
        // $respuesta = $this->get('api/videos/1');
        $respuesta = $this->get(
            sprintf(
                '/api/videos/%s',
                $video->id
            )
        )->assertJsonFragment($video->toArray());


        // dd($respuesta);

        //Comprobar  que se nos devuelve el video
        // $respuesta->assertJsonFragment([
        //     'id' => 1,
        //     'title' => 'MI titulo',
        //     'descripcion' => 'Mi descripcion',
        //     'url_video' => 'urltest'
        // ]);
        
        $respuesta->assertJsonFragment($video->toArray());
    }
}
