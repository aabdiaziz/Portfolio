<?php

require('../php/aboutMe.php');

use PHPUnit\Framework\TestCase;

class aboutMe extends TestCase {

//    test 1: how the test should work
    public function testFetchContentSuccess() {
        $expected = "Hi, My name is Abdi.";
        $testArray = ["content"=>"Hi, My name is Abdi."];
        $case = fetchContent($testArray);
        $this->assertEquals($case, $expected);
}

//    test 1: how the test should work, with an unrelatedKey

    public function testFetchContentSuccessUnrelatedKey() {
        $expected = "Hi, My name is Abdi.";
        $testArray = ["content"=>"Hi, My name is Abdi.", "email"=>"Hi, My name is Abdi."];
        $case = fetchContent($testArray);
        $this->assertEquals($case, $expected);
    }

//    test 1: test with expected key no present and different key.

    public function testFetchContentFailDifferentKeys() {
        $expected = "error";
        $testArray = ["email"=>"Hi, My name is Abdi."];
        $case = fetchContent($testArray);
        $this->assertEquals($case, $expected);
    }


//    test 2: how the test should work
    public function testFetchTitleSuccess() {
        $expected = "About Me";
        $testArray = ["title_of_content"=>"About Me"];
        $case = fetchTitle($testArray);
        $this->assertEquals($case, $expected);
    }
//    test 1: how the test should work, with an unrelatedKey

    public function testFetchTitleSuccessUnrelatedKey() {
        $expected = "About Me";
        $testArray = ["content"=>"About Me"];
        $case = fetchContent($testArray);
        $this->assertEquals($case, $expected);
    }

//    test 1: test with expected key no present and different key.

    public function testFetchTitleFailDifferentKeys() {
        $expected = "error";
        $testArray = ["email"=>"About Me"];
        $case = fetchContent($testArray);
        $this->assertEquals($case, $expected);
    }
}