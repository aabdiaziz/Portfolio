<?php

require_once('../php/portfolioFunctions.php');

use PHPUnit\Framework\TestCase;

class portfolioFunctions extends TestCase {

    //test 1: displayPortfolioItems

    public function testDisplayPortfolioItemsSuccess(){
        $expected =  '<div class="card"><a href="mini/pilotshop/pilot-shop.html"><div class="item" style="background-image:url(images/pilot.png)"></div></a>Pilot shop</div>
                      <div class="card"><a href="mini/html+css/helloworld.html"><div class="item" style="background-image:url(images/htmlcss.png)"></div></a>HTML + CSS</div>';
        $testArray = [["Project_title"=>"Pilot shop","img_url"=>"images/pilot.png","url_location"=>"mini/pilotshop/pilot-shop.html"],["Project_title"=>"HTML + CSS","img_url"=>"images/htmlcss.png","url_location"=>"mini/html+css/helloworld.html"]];
        $case = displayPortfolioItems($testArray);
        $this->assertEquals($case, $expected);

    }

}