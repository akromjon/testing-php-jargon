<?php

namespace Akromjon\TestingPhpJargon;

class Question{
    protected string $question;
    protected string $answer;
    protected string $correctAnswer;
    public function __construct(string $question, string $correctAnswer)
    {
        $this->question = $question;
        $this->correctAnswer = $correctAnswer;
    }
    public function question():string
    {
        return $this->question;
    }
    public function answer(string $answer):void
    {
        $this->answer = $answer;       
    }    

    public function isCorrect():bool
    {
        return $this->correctAnswer === $this->answer;
    }


}