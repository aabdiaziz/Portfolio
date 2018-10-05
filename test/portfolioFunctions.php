<?php

require_once('../php/portfolioFunctions.php');

use PHPUnit\Framework\TestCase;

class portfolioFunctions extends TestCase {

    //test 1: displayPortfolioItems

    public function testDisplayPortfolioItemsSuccess(){
        $expected =  '<div class="card"><a href=mini/pilotshop/pilot-shop.html><div class="item" style="background-image:url(images/pilot.png)"></div></a>Pilot shop</div><div class="card"><a href=mini/html+css/helloworld.html><div class="item" style="background-image:url(images/htmlcss.png)"></div></a>HTML + CSS</div>';
        $testArray = [["project_title"=>"Pilot shop","img_url"=>"images/pilot.png","url_location"=>"mini/pilotshop/pilot-shop.html"],["project_title"=>"HTML + CSS","img_url"=>"images/htmlcss.png","url_location"=>"mini/html+css/helloworld.html"]];
        $case = displayPortfolioItems($testArray);
        $this->assertEquals($case, $expected);

    }

    public function testDisplayPortfolioItemsFail(){
        $expected =  "ERROR PLEASE ENTER A VALID KEY";
        $testArray = [["wrongKey1"=>"Pilot shop","wrongKey2"=>"images/pilot.png","wrongKey3"=>"mini/pilotshop/pilot-shop.html"],["wrongKey1"=>"HTML + CSS","wrongKey2"=>"images/htmlcss.png","wrongKey3"=>"mini/html+css/helloworld.html"]];
        $case = displayPortfolioItems($testArray);
        $this->assertEquals($case, $expected);
    }

}
