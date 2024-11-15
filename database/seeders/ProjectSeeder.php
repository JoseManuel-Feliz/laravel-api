<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Status;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void

    {
        // | Projects data
        $projects = [
            [
                'project_title' => 'html-london-trip',
                'launch_date' => '2024-06-28',
                'project_thumbnail' => '',
                'repository_url' => 'https://github.com/JoseManuel-Feliz/html-london-trip',
                'project_summary' => '',
            ],
            [
                'project_title' => 'html-css-booleaner',
                'launch_date' => '2024-07-01',
                'project_thumbnail' => '',
                'repository_url' => 'https://github.com/JoseManuel-Feliz/html-css-booleaner',
                'project_summary' => '',
            ],
            [
                'project_title' => 'html-css-toboolist',
                'launch_date' => '2024-07-02',
                'project_thumbnail' => '',
                'repository_url' => 'https://github.com/JoseManuel-Feliz/htmlcss-toboolist',
                'project_summary' => '',
            ],
            [
                'project_title' => 'htmlcss-struttura-discord',
                'launch_date' => '2024-07-05',
                'project_thumbnail' => '',
                'repository_url' => 'https://github.com/JoseManuel-Feliz/htmlcss-struttura-discord',
                'project_summary' => ''
            ],
            [
                'project_title' => 'htmlcss-discord',
                'launch_date' => '2024-07-08',
                'project_thumbnail' => '',
                'repository_url' => 'https://github.com/JoseManuel-Feliz/htmlcss-struttura-discord',
                'project_summary' => '',
            ],
            [
                'project_title' => 'html-css-boolando',
                'launch_date' => '2024-07-09',
                'project_thumbnail' => '',
                'repository_url' => 'https://github.com/JoseManuel-Feliz/html-css-boolando',
                'project_summary' => '',
            ],
            [
                'project_title' => 'htmlcss-shoes',
                'launch_date' => '2024-07-10',
                'project_thumbnail' => '',
                'repository_url' => 'https://github.com/JoseManuel-Feliz/htmlcss-shoes',
                'project_summary' => '',
            ],
            [
                'project_title' => 'htmlcss-dropbox',
                'launch_date' => '2024-07-11',
                'project_thumbnail' => '',
                'repository_url' => 'https://github.com/JoseManuel-Feliz/htmlcss-dropbox',
                'project_summary' => '',
            ],
            [
                'project_title' => 'htmlcss-resp-wannabe',
                'launch_date' => '2024-07-17',
                'project_thumbnail' => '',
                'repository_url' => 'https://github.com/JoseManuel-Feliz/htmlcss-resp-wannabe',
                'project_summary' => '',
            ],
            [
                'project_title' => 'htmlcss-responsive-layout',
                'launch_date' => '2024-07-18',
                'project_thumbnail' => '',
                'repository_url' => 'https://github.com/JoseManuel-Feliz/htmlcss-responsive-layout',
                'project_summary' => '',
            ],
            [
                'project_title' => 'htmlcss-responsive-spotify',
                'launch_date' => '2024-07-19',
                'project_thumbnail' => '',
                'repository_url' => 'https://github.com/JoseManuel-Feliz/htmlcss-responsive-spotify',
                'project_summary' => '',
            ],
            [
                'project_title' => 'html-css-bootstrap-freelancer',
                'launch_date' => '2024-07-24',
                'project_thumbnail' => '',
                'repository_url' => 'https://github.com/JoseManuel-Feliz/html-css-bootstrap',
                'project_summary' => '',
            ],
            [
                'project_title' => 'html-css-bootstrap-dashboard',
                'launch_date' => '2024-07-26',
                'project_thumbnail' => '',
                'repository_url' => 'https://github.com/JoseManuel-Feliz/html-css-bootstrap-dashboard',
                'project_summary' => '',
            ],
            [
                'project_title' => 'js-pwgen-wannabe',
                'launch_date' => '2024-07-30',
                'project_thumbnail' => '',
                'repository_url' => 'https://github.com/JoseManuel-Feliz/js-pwgen-wannabe',
                'project_summary' => '',
            ],
            [
                'project_title' => 'js-biglietto-treno',
                'launch_date' => '2024-07-31',
                'project_thumbnail' => '',
                'repository_url' => 'https://github.com/JoseManuel-Feliz/js-biglietto-treno',
                'project_summary' => '',
            ],
            [
                'project_title' => 'js-biglietto-treno-form',
                'launch_date' => '2024-08-01',
                'project_thumbnail' => '',
                'repository_url' => 'https://github.com/JoseManuel-Feliz/js-biglietto-treno-form',
                'project_summary' => '',
            ],
            [
                'project_title' => 'js-fizzbuzzdom',
                'launch_date' => '2024-08-02',
                'project_thumbnail' => '',
                'repository_url' => 'https://github.com/JoseManuel-Feliz/js-fizzbuzzdom',
                'project_summary' => '',
            ],
            [
                'project_title' => 'js-mail-dadi',
                'launch_date' => '2024-08-19',
                'project_thumbnail' => '',
                'repository_url' => 'https://github.com/JoseManuel-Feliz/js-mail-dadi',
                'project_summary' => '',
            ],
            [
                'project_title' => 'js-array-carousel',
                'launch_date' => '2024-08-20',
                'project_thumbnail' => '',
                'repository_url' => 'https://github.com/JoseManuel-Feliz/js-array-carousel',
                'project_summary' => '',
            ],
            [
                'project_title' => 'js-paliedispari',
                'launch_date' => '2024-08-22',
                'project_thumbnail' => '',
                'repository_url' => 'https://github.com/JoseManuel-Feliz/js-paliedispari',
                'project_summary' => '',
            ],
            [
                'project_title' => 'js-campominato-grid',
                'launch_date' => '2024-08-23',
                'project_thumbnail' => '',
                'repository_url' => 'https://github.com/JoseManuel-Feliz/js-campominato-grid',
                'project_summary' => '',
            ],
            [
                'project_title' => 'js-campominato-dom',
                'launch_date' => '2024-08-26',
                'project_thumbnail' => '',
                'repository_url' => 'https://github.com/JoseManuel-Feliz/js-campominato-grid',
                'project_summary' => '',
            ],
            [
                'project_title' => 'js-simon',
                'launch_date' => '2024-08-27',
                'project_thumbnail' => '',
                'repository_url' => 'https://github.com/JoseManuel-Feliz/js-simon',
                'project_summary' => '',
            ],
            [
                'project_title' => 'js-our-team',
                'launch_date' => '2024-08-28',
                'project_thumbnail' => '',
                'repository_url' => 'https://github.com/JoseManuel-Feliz/js-our-team',
                'project_summary' => '',
            ],
            [
                'project_title' => 'vue-slider',
                'launch_date' => '2024-09-04',
                'project_thumbnail' => '',
                'repository_url' => 'https://github.com/JoseManuel-Feliz/vue-slider',
                'project_summary' => '',
            ],
            [
                'project_title' => 'vue-todolist',
                'launch_date' => '2024-09-05',
                'project_thumbnail' => '',
                'repository_url' => 'https://github.com/JoseManuel-Feliz/vue-todolist',
                'project_summary' => '',
            ],
            [
                'project_title' => 'vue-boolzap',
                'launch_date' => '2024-09-06',
                'project_thumbnail' => '',
                'repository_url' => 'https://github.com/JoseManuel-Feliz/vue-boolzap',
                'project_summary' => '',
            ],
            [
                'project_title' => 'vue-email-list',
                'launch_date' => '2024-09-11',
                'project_thumbnail' => '',
                'repository_url' => 'https://github.com/JoseManuel-Feliz/vue-email-list',
                'project_summary' => '',
            ],
            [
                'project_title' => 'vite-comics',
                'launch_date' => '2024-09-16',
                'project_thumbnail' => '',
                'repository_url' => 'https://github.com/JoseManuel-Feliz/vite-comics',
                'project_summary' => '',
            ],
            [
                'project_title' => 'vite-yu-gi-oh',
                'launch_date' => '2024-09-18',
                'project_thumbnail' => 'vite-yu-gi-oh',
                'repository_url' => 'https://github.com/JoseManuel-Feliz/vite-yu-gi-oh',
                'project_summary' => '',
            ],
            [
                'project_title' => 'vite-boolflix',
                'launch_date' => '2024-09-20',
                'project_thumbnail' => '',
                'repository_url' => 'https://github.com/JoseManuel-Feliz/vite-boolflix',
                'project_summary' => '',
            ],
            [
                'project_title' => 'proj-html-vuejs',
                'launch_date' => '2024-09-25',
                'project_thumbnail' => '',
                'repository_url' => 'https://github.com/JoseManuel-Feliz/proj-html-vuejs',
                'project_summary' => '',
            ],
            [
                'project_title' => 'php-badwords',
                'launch_date' => '2024-10-02',
                'project_thumbnail' => '',
                'repository_url' => 'https://github.com/JoseManuel-Feliz/php-badwords',
                'project_summary' => '',
            ],
            [
                'project_title' => 'php-hotel',
                'launch_date' => '2024-10-03',
                'project_thumbnail' => '',
                'repository_url' => 'https://github.com/JoseManuel-Feliz/php-hotel',
                'project_summary' => '',
            ],
            [
                'project_title' => 'php-strong-password-generator',
                'launch_date' => '2024-10-07',
                'project_thumbnail' => '',
                'repository_url' => 'https://github.com/JoseManuel-Feliz/php-strong-password-generator',
                'project_summary' => '',
            ],
            [
                'project_title' => 'php-dischi-json',
                'launch_date' => '2024-10-08',
                'project_thumbnail' => '',
                'repository_url' => 'https://github.com/JoseManuel-Feliz/php-dischi-json',
                'project_summary' => '',
            ],
            [
                'project_title' => 'php-oop-1',
                'launch_date' => '2024-10-09',
                'project_thumbnail' => '',
                'repository_url' => 'https://github.com/JoseManuel-Feliz/php-oop-1',
                'project_summary' => '',
            ],
            [
                'project_title' => 'php-oop-2',
                'launch_date' => '2024-10-10',
                'project_thumbnail' => '',
                'repository_url' => 'https://github.com/JoseManuel-Feliz/php-oop-2',
                'project_summary' => '',
            ],
            [
                'project_title' => 'laravel-comics',
                'launch_date' => '2024-10-22',
                'project_thumbnail' => '',
                'repository_url' => 'https://github.com/JoseManuel-Feliz/laravel-comics',
                'project_summary' => '',
            ],
            [
                'project_title' => 'laravel-model-controller',
                'launch_date' => '2024-10-24',
                'project_thumbnail' => '',
                'repository_url' => 'https://github.com/JoseManuel-Feliz/laravel-model-controller',
                'project_summary' => '',
            ],
            [
                'project_title' => 'laravel-migration-seeder',
                'launch_date' => '2024-10-25',
                'project_thumbnail' => '',
                'repository_url' => 'https://github.com/JoseManuel-Feliz/laravel-migration-seeder',
                'project_summary' => '',
            ],
            [
                'project_title' => 'laravel-dc-comics',
                'launch_date' => '2024-10-29',
                'project_thumbnail' => '',
                'repository_url' => 'https://github.com/JoseManuel-Feliz/laravel-dc-comics',
                'project_summary' => '',
            ],
        ];

        // | Get status IDs
        $statusIds = Status::all()->pluck('id');
        //dd($statusIds[0]);

        foreach ($projects as $project) {
            // | New Project instance
            $newProjec = new Project();

            // | Assign status_id
            $newProjec->status_id = $statusIds[0];

            // | Set project title
            $newProjec->project_title = $project['project_title'];

            // | Set launch date
            $newProjec->launch_date = $project['launch_date'];

            // | Set thumbnail
            $newProjec->project_thumbnail = $project['project_thumbnail'];

            // | Set repository URL
            $newProjec->repository_url = $project['repository_url'];

            // | Set summary
            $newProjec->project_summary = $project['project_summary'];

            // | Save project
            $newProjec->save();
        }
    }
}
