<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class FirebaseController extends Controller
{
    public function index()
    {
        $database = (new Factory)->withServiceAccount('app/Http/Controllers/classified-firestore-database.json');
    }
}
