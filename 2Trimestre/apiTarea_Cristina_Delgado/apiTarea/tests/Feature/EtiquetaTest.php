<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Etiqueta;

class EtiquetaTest extends TestCase
{
    use RefreshDatabase;
    public function testMostrarTodasEtiquetas()
    {
        //Creo un usuario con su token para usarlo en la autorización
        $user = User::factory()->create();
        $token = $user->createToken('test_token');

        $header = [
            'Authorization' => 'Bearer ' . $token->plainTextToken
        ];
        
        $response = $this->withHeaders($header)->get('/api/etiquetas');
    
        $response->assertStatus(200)
            ->assertJsonStructure([
                'data' => [
                    '*' => [
                        'id',
                        'nombre',
                        'tareas'
                    ],
                ],
            ]);
    }

    public function testMostrarEtiqueta()
    {
        // Creo un usuario con su token para usarlo en la autorización
        $user = User::factory()->create();
        $token = $user->createToken('test_token');
    
        $header = [
            'Authorization' => 'Bearer ' . $token->plainTextToken
        ];
    
        // Creo la etiqueta que mostraría usando el método factory en el modelo Etiqueta
        $etiqueta = Etiqueta::factory()->create();
        
        $response = $this->withHeaders($header)->get('/api/etiquetas/' . $etiqueta->id);
    
        $response->assertStatus(200)
            ->assertJsonStructure([
                'data' => [
                    'id',
                    'nombre',
                    'tareas'
                ],
            ]);
    }

    public function testCrearNuevaEtiqueta()
    {
        $user = User::factory()->create();
        $token = $user->createToken('test_token');

        $header = [
            'Authorization' => 'Bearer ' . $token->plainTextToken
        ];

        $nuevaEtiqueta = [
            'nombre' => 'Nueva Etiqueta'
        ];

        $response = $this->withHeaders($header)->post('/api/etiquetas', $nuevaEtiqueta);

        $response->assertStatus(201) //201 -> Código para fila creada
            ->assertJsonStructure([
                'data' => [
                    'id',
                    'nombre',
                    'tareas'
                ],
            ]);

    }

    public function testActualizarEtiqueta(){
        $user = User::factory()->create();
        $token = $user->createToken('test_token');

        $header = [
            'Authorization' => 'Bearer ' . $token->plainTextToken
        ];

        $etiquetaOriginal = Etiqueta::factory()->create();

        $etiquetaModif = [
            'nombre' => 'Nuevo Nombre'
        ];

        $response = $this->withHeaders($header)->put('/api/etiquetas/' . $etiquetaOriginal->id, $etiquetaModif);

        $response->assertStatus(200)
            ->assertJsonStructure([
                'data' => [
                    'id',
                    'nombre',
                    'tareas'
                ],
            ]);
    }

    public function testBorrarEtiqueta(){
        $user = User::factory()->create();
        $token = $user->createToken('test_token');

        $header = [
            'Authorization' => 'Bearer ' . $token->plainTextToken
        ];

        $etiquetaBorrar = Etiqueta::factory()->create();

        $response = $this->withHeaders($header)->delete('/api/etiquetas/' . $etiquetaBorrar->id);

        $response->assertStatus(200) 
        ->assertJsonStructure([
            'success'
        ]);
    }

}
