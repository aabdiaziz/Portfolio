<?php

//pull out the portfolio items from db


/**
 * @param PDO $db is to input the new instance of my database.
 * @return array $results of the fields project_title,img_url,url_location.
 */
function getPortfolioItems($db){
    $query = $db->prepare("SELECT `project_title`,`img_url`, `url_location` FROM `portfolio`;");

    $query->setFetchMode(PDO::FETCH_ASSOC);

    $query->execute();
    $results = $query->fetchAll();
    return $results;
};



//display on the front end

/**
 * @param array $portfolioItems
 * @return string
 */
function displayPortfolioItems(array $portfolioItems) :string {

        $result = '';
        foreach ($portfolioItems as $portfolioItem) {
            if(array_key_exists('project_title',$portfolioItem) &&
                array_key_exists('img_url',$portfolioItem) &&
                array_key_exists('url_location',$portfolioItem)){
                $url = $portfolioItem["img_url"];
                $result .= '<div class="card">' .
                    '<a href=' . $portfolioItem["url_location"] . '><div class="item" style="background-image:url(' . $url . ')"></div></a>'
                    . $portfolioItem["project_title"] .
                    '</div>';
            } else {
                return "ERROR PLEASE ENTER A VALID KEY";
                }
            }
            return $result;
}