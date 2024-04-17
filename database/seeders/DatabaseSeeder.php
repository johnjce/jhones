<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Setting::create([
            'about_title' => 'IT Manager & Full Stack Engineer',
            'about_description' => 'Con más de cinco años de experiencia en desarrollo de aplicaciones utilizando Laravel y liderando el departamento de IT, por mi curiosidad y constancia, considero ser un candidato idóneo para llevar a cabo trabajos de investigación y desarrollo. Me esfuerzo por formarme día a día en diversas áreas y me apasiona especialmente la seguridad informática. Programar, especialmente en PHP, es una de mis mayores pasiones. No me conformo con la estática, siempre busco nuevos desafíos y oportunidades para crecer y desarrollarme profesionalmente.
            En mi trayectoria, he gestionado tanto bases de datos SQL como NoSQL, llevado a cabo copias de seguridad, brindado soporte remoto, integrado sistemas ERP y desarrollado aplicaciones para juegos en Android nativo utilizando Java. Además, tengo experiencia en el desarrollo de aplicaciones de escritorio, un conocimiento profundo en sistemas operativos, administración de G Suite, gestión de certificados SSL, Active Directory, entre otros aspectos. También he liderado proyectos de integración de sistemas, garantizando la eficiencia y la seguridad en cada paso del proceso.',
            'fb_url' => 'https://www.facebook.com/jhonts',
            'github_url' => 'https://github.com/johnjce',
            'linkedin_url' => 'https://www.linkedin.com/in/john-jairo-casta%C3%B1o-echeverri/',
            'freelance_url' => '#li',
            'cv_url' => '#cv',
            'video_url' => '#video'
        ]);

        \App\Models\User::factory()->create([
            'name' => 'John',
            'email' => 'test@jhon.es',
        ]);
    }
}
