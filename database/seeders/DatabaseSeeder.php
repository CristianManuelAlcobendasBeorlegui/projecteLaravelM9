<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Destinacion;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Destinacion::factory()->create([
            'name' => 'Lanzarote',
            'description' => 'Lanzarote es una isla del archipiélago canario (España), en el océano Atlántico. Forma parte de la provincia de Las Palmas. Su capital es Arrecife.',
            'province' => 'Las Palmas',
            'country' => 'España',
            'picture_location' => './img/Lanzarote.jpg',
        ]);

        Destinacion::factory()->create([
            'name' => 'Granada',
            'description' => 'La Alhambra es elegida cada año como uno de los mejores lugares para visitar en España por millones de turistas, ¿a qué esperas para verla con tus ojos? Granada, además, cuenta con muchos otros atractivos. La Capilla Real, el Paseo de los Tristes, las cuevas del Sacromonte, el Mirador de San Nicolás o el Bañuelo son algunos de los rincones que no te puedes perder.',
            'province' => 'Granada',
            'country' => 'España',
            'picture_location' => './img/Granada.jpg',
        ]);
        
        Destinacion::factory()->create([
            'name' => 'La Rioja',
            'description' => ' Además de pasear por los sitios más bonitos de la capital y ponerte las botas en la conocida calle Laurel, una de las más bonitas de España, te enamorarán los paisajes de vides de sus alrededores. Si cuentas con más días, pasa hacia la zona de la Rioja Alavesa y visita pueblos tan bonitos como Labastida o Laguardia.',
            'province' => 'La Rioja',
            'country' => 'España',
            'picture_location' => './img/LaRioja.jpg',
        ]);

        Destinacion::factory()->create([
            'name' => 'Lagos de Covadonga',
            'description' => 'Los Lagos de Covadonga son uno de los lugares más increíbles que visitar en España. Aunque son bonitos y visitables durante gran parte del año, si tienes vacaciones en verano, darás con su mejor momento. Los lagos Enol, Ercina y Bricial están más llenos gracias al deshielo y podrás recorrer el paraje cómodamente.',
            'province' => 'Asturias',
            'country' => 'España',
            'picture_location' => './img/LagosCovadonga.jpg',
        ]);

        Destinacion::factory()->create([
            'name' => 'Rías bajas',
            'description' => '¿Estás buscando viajes baratos por España? Las Rías Baixas ofrecen muchísimas actividades y una estupenda relación calidad-precio tanto en alojamiento como en gastronomía.',
            'province' => 'Galicia',
            'country' => 'España',
            'picture_location' => './img/RiasBajas.jpg',
        ]);

        Destinacion::factory()->create([
            'name' => 'Paque natural de Cabo de Gata',
            'description' => 'Un buen rincón para pasar tus próximas vacaciones por España es el increíble Parque Natural de Cabo de Gata, uno de los mejores rincones de Andalucía. Te aconsejamos planear tu viaje para finales de la primavera, verano y comienzos del otoño, cuando puedes darte un chapuzón en las playas y calas del parque.',
            'province' => 'Almería',
            'country' => 'España',
            'picture_location' => './img/ParqueNaturalCaboGata.jpg',
        ]);
    }
}
