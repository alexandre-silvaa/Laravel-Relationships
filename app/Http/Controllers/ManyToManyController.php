<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Company;

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

    public function manyToManyInverse()
    {
        $company = Company::where('name', 'TiMaster')->get()->first();
        echo "<b> {$company->name} </br></b>";

        $cities = $company->cities;
        foreach($cities as $city){
            echo " {$city->name}, ";
        }
    }

    public function manyToManyInsert()
    {
        //$dataForm = [3,4,5];
        $dataForm = [3,4];

        $company = Company::find(1);
        echo "<b> {$company->name} </br></b>";

        //$company->cities()->attach($dataForm);
        //$company->cities()->sync($dataForm);
        $company->cities()->detach($dataForm);

        $cities = $company->cities;
        foreach($cities as $city){
            echo " {$city->name}, ";
        }

    }

}
