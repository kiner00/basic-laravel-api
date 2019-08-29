<?php

namespace App\Http\Controllers;

use App\Http\Resources\PersonResource;
use Illuminate\Http\Request;
use App\Person;

class PersonController extends Controller
{
    /**
     * @param Person $person
     * @return array
     */
    public function show(Person $person): PersonResource
    {
        return new PersonResource($person);
    }
}
