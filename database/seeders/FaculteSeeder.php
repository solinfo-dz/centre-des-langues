<?php

namespace Database\Seeders;

use App\Models\Dpt;
use App\Models\Faculte;
use Illuminate\Database\Seeder;

class FaculteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataArray = array(
            'Mathématique' => [
                'CodeIgniter',
                'Laravel',
                'Yii',
                'Cake PHP',
                'Symfony',
                'Phalcon'
            ],
            'Informatique' => [
                'DJango',
                'Flask',
                'CherryPy',
                'web2py',
                'Bottle',
                'TurboGears'
            ],
            'Sience de la matiere' => [
                'Spring',
                'Hibernate',
                'JSF',
                'GWT',
                'Struts',
                'Blade'
            ],
            'Science de la nature et de la vie' => [
                'React',
                'Angular',
                'Vue',
                'Svelte',
                'Preact',
                'Backbone',
                'Node',
                'Next',
                'Express',
                'Nuxt',
                'Meteor'
            ],
               'Science Appliquées' => [
                'React',
                'Angular',
                'Vue',
                'Svelte',
                'Preact',
                'Backbone',
                'Node',
                'Next',
                'Express',
                'Nuxt',
                'Meteor'
            ],
        );

        foreach ($dataArray as $faculte => $dpts) {

            $faculte = Faculte::create([
                'name' => $faculte
            ]);

            if ($faculte) {
                foreach ($dpts as $key => $dpt) {
                    Dpt::create([
                        'faculte_id' => $faculte->id,
                        'name' => $dpt
                    ]);
                }
            }
        }
    }
}