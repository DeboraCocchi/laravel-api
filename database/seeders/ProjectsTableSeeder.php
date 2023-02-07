<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

use function PHPUnit\Framework\arrayHasKey;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $data1=file_get_contents('https://api.unsplash.com/topics/nature/photos?client_id=zFO00llXRisd8ahLBB4h7xojiShSikegbjnnb0weK30&topics=nature&per_page=30&page=1');
        $data2=file_get_contents('https://api.unsplash.com/topics/nature/photos?client_id=zFO00llXRisd8ahLBB4h7xojiShSikegbjnnb0weK30&topics=nature&per_page=30&page=2');
        $data=(array_merge(json_decode($data1, true),json_decode($data2, true)));


        for($i=0; $i<60; $i++){

            $new_project=new Project();
            $new_project->name=$faker->sentence(3);
            $new_project->slug=Project::generateSlug($new_project->name);
            $new_project->created=$faker->dateTimeBetween('-50 week');
            $new_project->client_name=ucfirst($faker->word());
            $new_project->summary=$faker->paragraphs(1, true);
            // $new_project->cover_image=$faker->imageUrl(640, 480, 'Project', true);

             $new_project->cover_image=$data[$i]['urls']['small'];


            // if(array_key_exists($i, $data)){
            //     $new_project->cover_image=$data[$i]->urls->small;
            // }else{
            //     $new_project->cover_image=$data[0]->urls->small;
            // }


             $new_project->save();
        }
    }
}
