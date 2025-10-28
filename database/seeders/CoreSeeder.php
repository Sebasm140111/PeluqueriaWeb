<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(){
  $barbers = \DB::table('plq_barbers');
  $services = \DB::table('plq_services');

  $b1 = $barbers->insertGetId(['name'=>'Lucas','bio'=>'Fade & clásicos','active'=>1,'created_at'=>now(),'updated_at'=>now()]);
  $b2 = $barbers->insertGetId(['name'=>'Mati','bio'=>'Barbas & tijera','active'=>1,'created_at'=>now(),'updated_at'=>now()]);

  $s = [
    ['name'=>'Corte clásico','duration_min'=>30,'active'=>1],
    ['name'=>'Fade','duration_min'=>45,'active'=>1],
    ['name'=>'Corte + Barba','duration_min'=>60,'active'=>1],
    ['name'=>'Perfilado de Barba','duration_min'=>20,'active'=>1],
  ];
  foreach($s as $row){ $row['created_at']=now(); $row['updated_at']=now(); $ids[] = $services->insertGetId($row); }

  foreach($ids as $sid){ \DB::table('plq_barber_service')->insert(['barber_id'=>$b1,'service_id'=>$sid]); }
  foreach($ids as $sid){ if($sid % 2===0) \DB::table('plq_barber_service')->insert(['barber_id'=>$b2,'service_id'=>$sid]); }
}

}
