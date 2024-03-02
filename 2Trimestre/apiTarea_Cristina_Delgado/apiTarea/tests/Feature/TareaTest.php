<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Tarea;
class TareaTest extends TestCase
{

    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function testMostrarTodasTareas()
    {
        //Creo un usuario con su token para usarlo en la autorización
        $user = User::factory()->create();
        $token = $user->createToken('test_token');

        $header = [
            'Authorization' => 'Bearer ' . $token->plainTextToken
        ];
        
        $response = $this->withHeaders($header)->get('/api/tareas');
    
        $response->assertStatus(200)
            ->assertJsonStructure([
                'data' => [
                    '*' => [
                        'id',
                        'titulo',
                        'descripcion',
                        'etiquetas'
                    ],
                ],
            ]);
    }

    public function testMostrarTarea()
    {
        // Creo un usuario con su token para usarlo en la autorización
        $user = User::factory()->create();
        $token = $user->createToken('test_token');
    
        $header = [
            'Authorization' => 'Bearer ' . $token->plainTextToken
        ];
    
        // Creo la tarea que mostraría usando el método factory en el modelo Tarea
        $tarea = Tarea::factory()->create();
        
        $response = $this->withHeaders($header)->get('/api/tareas/' . $tarea->id);
    
        $response->assertStatus(200)
            ->assertJsonStructure([
                'data' => [
                    'id',
                    'titulo',
                    'descripcion',
                    'etiquetas'
                ],
            ]);
    }

    public function testCrearNuevaTarea()
    {
        $user = User::factory()->create();
        $token = $user->createToken('test_token');

        $header = [
            'Authorization' => 'Bearer ' . $token->plainTextToken
        ];

        $nuevaTarea = [
            'titulo' => 'Nueva Tarea',
            'descripcion' => 'Descripción de la tarea',
        ];

        $response = $this->withHeaders($header)->post('/api/tareas', $nuevaTarea);

        $response->assertStatus(201) // 201 -> Código para fila creada
        ->assertJsonStructure([
            'data' => [
                'id',
                'titulo',
                'descripcion',
                'etiquetas'
            ],
        ]);

    }

    public function testActualizarTarea(){
        $user = User::factory()->create();
        $token = $user->createToken('test_token');

        $header = [
            'Authorization' => 'Bearer ' . $token->plainTextToken
        ];

        $tareaOriginal = Tarea::factory()->create();

        $tareaModif = [
            'titulo' => 'Nuevo título',
            'descripcion' => 'Nueva descripción',
        ];

        $response = $this->withHeaders($header)->put('/api/tareas/' . $tareaOriginal->id, $tareaModif);

        $response->assertStatus(200) 
        ->assertJsonStructure([
            'data' => [
                'id',
                'titulo',
                'descripcion',
                'etiquetas'
            ],
        ]);
    }

    public function testBorrarTarea(){
        $user = User::factory()->create();
        $token = $user->createToken('test_token');

        $header = [
            'Authorization' => 'Bearer ' . $token->plainTextToken
        ];

        $tareaBorrar = Tarea::factory()->create();

        $response = $this->withHeaders($header)->delete('/api/tareas/' . $tareaBorrar->id);

        $response->assertStatus(200) 
        ->assertJsonStructure([
            'success'
        ]);
    }
}
