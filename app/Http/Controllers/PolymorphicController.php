<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\State;
use App\Models\Country;
use App\Models\Comment;

class PolymorphicController extends Controller
{
    public function polymorphic()
    {
        //Cidade
        $city = City::where('name', 'Sorocaba')->get()->first();
        echo "<b>{$city->name}:</b></br>";

        $comments = $city->comments()->get();

        foreach ($comments as $comment){
            echo "{$comment->description} </br>";
        }

        //Estado
        $state = State::where('name', 'São Paulo')->get()->first();
        echo "<b>{$state->name}:</b></br>";

        $comments = $state->comments()->get();

        foreach ($comments as $comment){
            echo "{$comment->description} </br>";
        }

        //País
        $country = Country::where('name', 'Brasil')->get()->first();
        echo "<b>{$country->name}:</b></br>";

        $comments = $country->comments()->get();

        foreach ($comments as $comment){
            echo "{$comment->description} </br>";
        }
    }

    public function polymorphicInsert()
    {
        //Cidade
        $city = City::where('name', 'Sorocaba')->get()->first();
        echo "{$city->name} </br>";

        $comment = $city->comments()->create([
            'description' => "Novo comentário {$city->name}, ".date('YmdHis'),
        ]);

        var_dump($comment->description);
       
        //Estado
        $state = State::where('name', 'São Paulo')->get()->first();
        echo "{$state->name} </br>";

        $comment = $state->comments()->create([
           'description' => "Novo comentário {$state->name}, ".date('YmdHis'),
        ]);

        var_dump($comment->description);
       
        //País
        $country = Country::where('name', 'Brasil')->get()->first();
        echo "{$country->name} </br>";

        $comment = $country->comments()->create([
           'description' => "Novo comentário {$country->name}, ".date('YmdHis'),
        ]);

        var_dump($comment->description);


    }
}
