<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Animal;
use Faker\Generator as Faker;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $animalData = $this->getCsv(__DIR__ . '/../../resources/assets/animali.csv');

        foreach ($animalData as $singleAnimal) {
            $newAnimal = new Animal();
            $newAnimal->save();
        }
    }

    public function getCsv($filePath){
        $csvDava = [];
        $fileData = fopen($filePath, 'r');

        if($fileData === false){
            throw new InvalidArgumentException('File non trovato');
        };

        fgetcsv($fileData);

        while(($csvRow = fgetcsv($fileData)) !== false){
            $csvData[] = $csvRow;
        };
        fclose($fileData);
        return $csvData;
    }
}
