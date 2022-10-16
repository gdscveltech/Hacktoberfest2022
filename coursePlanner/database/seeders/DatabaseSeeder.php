<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
       
        for($i = 0 ; $i < 10; $i++){
        \App\Models\students::factory()->create([
            'name' => 'SomeName'.$i,
            'vtu' =>'1697'.$i,
            'degree' => 'B.tech',
            'specialisation' => 'General',
            'semester' => 5,
        ]);
        }

        
        for($i = 0; $i <10 ; $i++){
            for($j = 0 ; $j < 10; $j++){
                \App\Models\takes::factory()->create([
                    'vtu' => '1697'.$i,
                    'tts' => '123'.$j,
                    'courseid' => $j,
                    'sem' => 5
                ]);
            }
        }
        
        for($i = 0 ; $i <10 ; $i++){
            \App\Models\course::factory()->create([
                'pace_id' => 'slow',
                'credit' =>$i%4,
                'sem_till_avail' => 6 ,
            ]);
        }
        for($i = 0 ; $i <10 ; $i++){
            \App\Models\course::factory()->create([
                'pace_id' => 'medium',
                'credit' =>$i%4,
                'sem_till_avail' => 6 ,
            ]);
        }
        for($i = 0 ; $i <10 ; $i++){
            \App\Models\course::factory()->create([
                'pace_id' => 'fast',
                'credit' =>$i%4,
                'sem_till_avail' => 6 ,
            ]);
        }


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
