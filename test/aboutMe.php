<?php

require('../php/aboutMe.php');

use PHPUnit\Framework\TestCase;

class aboutMe extends TestCase {
    public $contentField = ["content"=>"Hi, My name is Abdi."];

//    how the test should work
    public function testFetchContentSuccess() {
        $expected = "Hi, My name is Abdi.";
        $testArray = ["content"=>"Hi, My name is Abdi."];
        $case = fetchContent($testArray);
        $this->assertEquals($case, $expected);
}

    public function testFetchContentSuccessUnrelatedKey() {
        $expected = "Hi, My name is Abdi.";
        $testArray = ["content"=>"Hi, My name is Abdi.", "email"=>"Hi, My name is Abdi."];
        $case = fetchContent($testArray);
        $this->assertEquals($case, $expected);
    }

//    test with different keys

    public function testFetchContentFailDifferentKeys() {
        $expected = "error";
        $testArray = ["email"=>"Hi, My name is Abdi."];
        $case = fetchContent($testArray);
        $this->assertEquals($case, $expected);
    }


}