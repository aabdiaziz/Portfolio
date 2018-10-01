<?php

$db = new PDO('mysql:host=127.0.0.1;dbname=Portfolio','root');

$content = $query = $dp->prepare("SELECT `content` FROM `about_content`;");

