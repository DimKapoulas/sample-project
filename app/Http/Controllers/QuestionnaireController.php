<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Questionnaire;

class QuestionnaireController extends Controller
{
    // Creates a questionnaire
    public function create()
    {
        return view('questionnaire.create');
    }

    // Stores a questionnaire
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'purpose' => 'required',
        ]);

        $questionnaire = Questionnaire::create();
    }


}
