<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //importo dati dal file comics nella cartella config
        $datas = config("comics");
        foreach ($datas as $data) {
    
          $comic = new Comic;
          $comic->fill($data);
          $comic->save();
        }
    }
}
