<?php

require_once 'dbConn.php';
require_once 'portfolioFunctions.php';

$db = dbConn();
$portfolioItems = getPortfolioItems($db);
$portfolioThing = displayPortfolioItems($portfolioItems);