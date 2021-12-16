<?php

use Illuminate\Database\Seeder;
use App\FlatType;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $FlatType = new FlatType();
        $FlatType->FlatType = 'Family';
        $FlatType->publicationStatus = 1 ;
   
        $FlatType->save();    

            $FlatType = new FlatType();
        $FlatType->FlatType= 'Bachelor';
        $FlatType->publicationStatus = 1 ;
   
        $FlatType->save();    

    $FlatType = new FlatType();
        $FlatType->FlatType = 'Office';
        $FlatType->publicationStatus = 1 ;
   
        $FlatType->save();    

    $FlatType = new FlatType();
        $FlatType->FlatType = 'Guast House';
        $FlatType->publicationStatus = 1 ;
   
        $FlatType->save();    

    $FlatType = new FlatType();
        $FlatType->FlatType = 'Resort';
        $FlatType->publicationStatus = 1 ;
   
        $FlatType->save();    

    $FlatType = new FlatType();
        $FlatType->FlatType = 'Bank Bima';
        $FlatType->publicationStatus = 1 ;
   
        $FlatType->save();    

    }
}
