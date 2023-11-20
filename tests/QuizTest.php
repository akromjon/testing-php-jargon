<?php

use Akromjon\TestingPhpJargon\Question;
use Akromjon\TestingPhpJargon\Quiz;
class QuizTest extends \PHPUnit\Framework\TestCase{
    public function test_it_cosists_of_questions()
    {
        $quiz = new Quiz;
        $quiz->addQuestion(new Question('What is 2+2?', '4'));
        $this->assertCount(1, $quiz->questions());
    }

    public function test_it_can_be_graded()
    {
        $quiz= new Quiz;
        $quiz->addQuestion(new Question('What is 2+2?', '4'));
        $question=$quiz->nextQuestion();  
        $question->answer('5');
        $this->assertEquals(100, $quiz->grade());     
    }

    public function test_it_can_be_graded_with_multiple_questions()
    {
        $quiz= new Quiz;
        $quiz->addQuestion(new Question('What is 2+2?', '4'));
        $quiz->addQuestion(new Question('What is 2+3?', '5'));
        $quiz->addQuestion(new Question('What is 3+3?', '6'));
        $questions=$quiz->nextQuestions();
        $answers=['4','5','6'];
        foreach($questions as $key=>$question){
            $question->answer($answers[$key]);
        } 
        $this->assertEquals(100, $quiz->grade());
    }
}