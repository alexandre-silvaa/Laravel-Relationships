<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class ManyToManyController extends Controller
{
    public function manyToMany()
    {
        $city = City::where('name', 'Sorocaba')->get()->first();
        echo "<b>{$city->name} </br> </b>";

        $companies = $city->companies;
        foreach($companies as $company){
            echo " {$company->name}, ";
        }


    }

}
