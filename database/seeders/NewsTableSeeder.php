<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $news = [
            [
                'title' => 'Aumento del Salario Mínimo en Argentina',
                'content' => 'El Gobierno argentino ha anunciado un incremento del salario mínimo a partir de junio de 2024. El ajuste responde a la inflación creciente y busca mejorar el poder adquisitivo de los trabajadores. Sindicatos y empleadores se mostraron cautelosos pero optimistas ante la medida.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Empresas Tecnológicas Ofrecen Nuevos Beneficios Laborales',
                'content' => 'Varias empresas tecnológicas en Argentina están implementando nuevos beneficios para atraer y retener talento. Estos incluyen jornadas laborales flexibles, trabajo remoto, y programas de bienestar. Los empleados han respondido positivamente, incrementando la productividad y la satisfacción laboral.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Crecimiento del Teletrabajo en el Sector Financiero',
                'content' => 'El sector financiero en Argentina ha visto un aumento significativo en el teletrabajo post-pandemia. Bancos y compañías de seguros están adaptando sus infraestructuras para permitir a sus empleados trabajar desde casa. Este cambio ha generado debates sobre la seguridad y la eficacia del trabajo remoto.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Iniciativa para Promover la Inclusión de Personas con Discapacidad',
                'content' => 'El Ministerio de Trabajo ha lanzado una nueva iniciativa para fomentar la inclusión laboral de personas con discapacidad. La campaña incluye incentivos fiscales para las empresas que contraten a personas con discapacidad y programas de capacitación especializados. La respuesta del sector privado ha sido favorable.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Reducción de la Jornada Laboral en el Sector Público',
                'content' => 'El Gobierno está considerando una reducción de la jornada laboral para empleados del sector público, con el objetivo de mejorar el bienestar y la productividad. La propuesta ha generado un amplio debate entre los sindicatos y las autoridades, con opiniones divididas sobre su implementación y efectos.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Crecimiento del Empleo en el Sector Energético',
                'content' => 'El sector energético en Argentina está experimentando un crecimiento significativo en la creación de empleo debido a la expansión de proyectos de energía renovable. Las inversiones en energía eólica y solar están generando nuevas oportunidades laborales, especialmente en regiones del interior del país.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Capacitación para Jóvenes Desempleados en Tecnologías Emergentes',
                'content' => 'Una nueva iniciativa del Gobierno busca capacitar a jóvenes desempleados en tecnologías emergentes como inteligencia artificial y blockchain. El programa, que cuenta con la colaboración de empresas del sector, pretende reducir el desempleo juvenil y preparar a los jóvenes para el mercado laboral del futuro.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Implementación de Políticas de Igualdad de Género en el Trabajo',
                'content' => 'Empresas en Argentina están adoptando políticas de igualdad de género para cerrar la brecha salarial y promover la equidad en el lugar de trabajo. Estas políticas incluyen medidas de transparencia salarial y programas de mentoría para mujeres. La iniciativa ha sido bien recibida por los empleados y las organizaciones de derechos humanos.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Expansión del Sector de Servicios Profesionales',
                'content' => 'El sector de servicios profesionales, incluyendo consultoría y asesoramiento empresarial, está en expansión en Argentina. La demanda de expertos en gestión y estrategia ha aumentado, impulsando la creación de nuevas empresas y la contratación de personal altamente calificado.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Creación de Nuevos Parques Industriales',
                'content' => 'El Gobierno argentino ha anunciado la creación de varios nuevos parques industriales en diversas provincias. Estos parques están diseñados para atraer inversiones y generar empleo local, ofreciendo infraestructura moderna y beneficios fiscales. Se espera que esta medida impulse el desarrollo económico regional.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Aumento en la Contratación de Profesionales IT',
                'content' => 'La demanda de profesionales de IT sigue en aumento en Argentina, impulsada por la digitalización de negocios y la expansión del comercio electrónico. Las empresas están ofreciendo salarios competitivos y beneficios adicionales para atraer talento en áreas como desarrollo de software y ciberseguridad.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Programa de Retención de Talento en Pymes',
                'content' => 'Un nuevo programa gubernamental busca ayudar a las Pymes a retener talento clave mediante incentivos económicos y capacitación. La iniciativa responde a la creciente fuga de cerebros hacia grandes corporaciones y el exterior, y pretende fortalecer el tejido empresarial local.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('news')->insert($news);
    }
}
