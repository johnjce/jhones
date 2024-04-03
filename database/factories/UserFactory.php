<?php

namespace Database\Factories;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Laravolt\Avatar\Avatar;

class UserFactory extends Factory
{

    protected $model = User::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $nombre = $this->faker->firstName;
        $apellidos = $this->faker->lastName;
        $config = config('laravolt.avatar');
        $avatar = new Avatar($config);
        $avatar->create($nombre.' '.$apellidos)->toBase64();
        return [
            'nombre_completo' => $nombre.' '.$apellidos,
            'cif' => $this->faker->randomNumber(8).$this->faker->randomLetter,
            'telefono' => '69'.$this->faker->randomNumber(7),
            'fecha_nacimiento' => $this->faker->date,
            'avatar'=>$avatar,
            'credito'=>0,
            'tipo_rol'=>'admin',
            'cargo'=>'Pruebas desarrollo',
            'ubicacion'=>'Remoto',
            'jornada_horas'=> 8,
            'cod_empleado'=>$this->faker->randomNumber(4),
            'password' => bcrypt('password'),
            'bloqueado'=>false,
            'ultima_ip'=> $this->faker->ipv4,
            'email' => $nombre.'.'.$apellidos.'@jhon.es',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
