<?php

//pull out the portfolio items from db



function getPortfolioItems($db){
    $query = $db->prepare("SELECT `project_title`,`img_url`, `url_location` FROM `portfolio`;");

    $query->setFetchMode(PDO::FETCH_ASSOC);

    $query->execute();
    $results = $query->fetchAll();
    return $results;
};



//display on the front end

function displayPortfolioItems($portfolioItems){
    $result = '';
    foreach ($portfolioItems as $portfolioItem){
        $url = $portfolioItem["img_url"];
        $result .= '<div class="card">'.
                   '<a href=' . $portfolioItem["url_location"] . '><div class="item" style="background-image:url(' . $url . ')"></div></a>'
                    . $portfolioItem["project_title"] .
                '</div>';
    }
    return $result;
}