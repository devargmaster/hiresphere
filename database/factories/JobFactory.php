<?php

namespace Database\Factories;

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    protected $model = Job::class;

    public function definition()
    {
        $images = ['image1.jpg', 'image2.jpg', 'image3.jpg', 'image4.jpg', 'image5.jpg', 'image6.jpg',
            'image7.jpg', 'image8.jpg', 'image9.jpg', 'image10.jpg', 'image11.jpg', 'image12.jpg'
        , 'image13.jpg', 'image14.jpg', 'image15.jpg', 'image16.jpg', 'image17.jpg', 'image18.jpg', 'image19.jpg', 'image20.jpg'
        , 'image21.jpg', 'image22.jpg', 'image23.jpg', 'image24.jpg', 'image25.jpg', 'image26.jpg', 'image27.jpg', 'image28.jpg'
        , 'image29.jpg', 'image30.jpg', 'image31.jpg', 'image32.jpg', 'image33.jpg', 'image34.jpg', 'image35.jpg', 'image36.jpg'
        , 'image37.jpg', 'image38.jpg', 'image39.jpg', 'image40.jpg', 'image41.jpg', 'image42.jpg', 'image43.jpg', 'image44.jpg'
        , 'image45.jpg', 'image46.jpg', 'image47.jpg', 'image48.jpg', 'image49.jpg', 'image50.jpg'];
        $descriptions = [
            'Desarrollador Full Stack con experiencia en Laravel y Vue.js, responsable del desarrollo y mantenimiento de aplicaciones web.',
            'Ingeniero de Software especializado en inteligencia artificial y machine learning para proyectos innovadores.',
            'Diseñador UX/UI con habilidades en Figma y Adobe XD, enfocado en mejorar la experiencia del usuario en plataformas digitales.',
            'Analista de Datos experto en SQL y Python para la extracción y análisis de grandes volúmenes de datos.',
            'Administrador de Sistemas con conocimientos en redes y seguridad informática para gestionar infraestructura tecnológica.',
            'Project Manager con experiencia en metodologías ágiles para liderar equipos de desarrollo de software.',
            'Técnico en Soporte IT, encargado de resolver problemas técnicos y brindar asistencia a usuarios finales.',
            'Consultor en Transformación Digital para asesorar a empresas en la implementación de nuevas tecnologías.',
            'Desarrollador de Aplicaciones Móviles con conocimientos en React Native para la creación de apps multiplataforma.',
            'Especialista en Ciberseguridad para la protección de sistemas y datos contra amenazas informáticas.',
            'Contador Público para la gestión de la contabilidad y finanzas de empresas.',
            'Marketing Digital, encargado de desarrollar estrategias de marketing online y gestión de redes sociales.',
            'Enfermero/a con experiencia en cuidados intensivos para trabajar en hospitales y clínicas.',
            'Profesor de Inglés con certificación TEFL para enseñar en institutos y academias.',
            'Chef con experiencia en cocina internacional para trabajar en restaurantes de alta gama.',
            'Abogado especializado en derecho corporativo para asesorar a empresas en cuestiones legales.',
            'Arquitecto con experiencia en diseño y supervisión de proyectos de construcción.',
            'Psicólogo con experiencia en terapia individual y grupal para trabajar en centros de salud mental.',
            'Periodista con habilidades en redacción y edición para trabajar en medios de comunicación.',
            'Gestor de Recursos Humanos para la selección y gestión del talento en empresas de diversos sectores.'
        ];


        return [
            'title' => $this->faker->jobTitle,
            'description' => $this->faker->randomElement($descriptions),
            'user_id' => rand(1, 3),
            'company_name' => $this->faker->company,
            'location' => $this->faker->city,
            'salary' => $this->faker->randomFloat(2, 1000, 20000),
            'employment_type' => $this->faker->randomElement(['Full Time', 'Part Time', 'Contract']),
            'experience_level' => $this->faker->randomElement(['Entry Level', 'Mid Level', 'Senior Level']),
            'category' => $this->faker->word,
            'requirements' => $this->faker->paragraph,
            'benefits' => $this->faker->paragraph,
            'application_deadline' => $this->faker->date(),
            'status' => 'Activo',
            'image' => $this->faker->randomElement($images),
        ];
    }
}
