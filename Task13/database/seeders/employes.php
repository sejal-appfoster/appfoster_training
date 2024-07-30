<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//use App\Models\Employes;

class employes extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employes=$name('shivani Zha');
        $employes->email('shivanizha@gmail.com');
        $employes->phone('7893569024');
        $employes->designation('ASE');
        $employes->project('Lab Management');
        $employes->save();
       
    }
}
