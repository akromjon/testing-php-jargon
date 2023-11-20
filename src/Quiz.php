<?php

namespace Akromjon\TestingPhpJargon;

use Akromjon\TestingPhpJargon\Question;

class Quiz {

    protected array $questions = [];
    
    public function addQuestion(Question $question):void
    {
        $this->questions[] = $question;
    }

    public function questions():array
    {
        return $this->questions;
    }

    public function nextQuestion():Question
    {
        return ($this->questions[0]);
    }

    public function nextQuestions():array
    {
        return ($this->questions);
    }

    public function grade():int
    {
        $correct=count(array_filter($this->questions, function($question){
            return $question->isCorrect();
        }));

        return ($correct/count($this->questions))*100;
    }
}