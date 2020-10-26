<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionnaireController extends Controller {

    public function index() {

        //if ($results[0] != "") {
        $question_type = "Welke categorie";
        $answer_1 = "Star Wars";
        $answer_2 = "Bionicle";
        $answer_3 = "Ninjago";
        $answer_4 = "Trains";
        $answer_5 = "The Hobbit";
        $answer_6 = "Atlantis";
        $answer_7 = "City";
        $answer_8 = "Castle";
        $answer_9 = "Duplo";
        //}

        // if ($results[1] != "") {
        //     $question_type = "Welk bouwjaar";
        //     $answer_1 = "1949 - 2000";
        //     $answer_2 = "2000 - 2010";
        //     $answer_3 = "2010 - 2020";
        //     $answer_4 = "";
        //     $answer_5 = "";
        //     $answer_6 = "";
        //     $answer_7 = "";
        //     $answer_8 = "";
        //     $answer_9 = "";
        // }

        // if ($results[2] != "") {
        //     $question_type = "Hoeveel bouwstenen";
        //     $answer_1 = "1 - 100";
        //     $answer_2 = "101 - 150";
        //     $answer_3 = "151 - 250";
        //     $answer_4 = "251 - 500";
        //     $answer_5 = "501 - 1000";
        //     $answer_6 = "1001 - Max.";
        //     $answer_7 = "";
        //     $answer_8 = "";
        //     $answer_9 = "";
        // }

        return view('questionnaire/index')->with(compact('question_type', 'answer_1', 'answer_2', 'answer_3', 'answer_4', 'answer_5', 'answer_6', 'answer_7', 'answer_8', 'answer_9'));
    }
}
