<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           $category = new Category();
        $category->categoryName = '3 Bed 2 Bath';
        $category->publicationStatus = 1 ;
   
        $category->save();    

            $category = new Category();
        $category->categoryName = '3 Bed 3 Bath';
        $category->publicationStatus = 1 ;
   
        $category->save();    

    $category = new Category();
        $category->categoryName = '4 Bed 2 Bath';
        $category->publicationStatus = 1 ;
   
        $category->save();    

    $category = new Category();
        $category->categoryName = '4 Bed 3 Bath';
        $category->publicationStatus = 1 ;
   
        $category->save();    

    $category = new Category();
        $category->categoryName = '2 Bed 2 Bath';
        $category->publicationStatus = 1 ;
   
        $category->save();    

    $category = new Category();
        $category->categoryName = '2 Bed 1 Bath';
        $category->publicationStatus = 1 ;
   
        $category->save();    

    $category = new Category();
        $category->categoryName = '1 Bed 1 Bath';
        $category->publicationStatus = 1 ;
   
        $category->save();    

    }
}
