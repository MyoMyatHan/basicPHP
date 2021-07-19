<?php
    error_reporting(E_ALL);
    ini_set("display_errors",1);
    include_once"classes/Page_Data.class.php";

    $pageData = new Page_Data();
    $pageData->title = "Form and Quizs";
    $pageData->content = include_once"views/navigations.php";
    $pageData->css = "<link href='css/layout.css' rel='stylesheet'>";

    $navIsClicked = isset($_GET['page']);
    if ($navIsClicked) {
        $fileToLoad = $_GET['page'];
    } else {
        $fileToLoad = 'search';
    }
    $pageData->content .= include_once"views/$fileToLoad.php";
    $pageData->embeddedStyle ="
    <style>
    nav a[href *= '?page=$fileToLoad']{
        padding: 3px;
        
        background-color: white;
        border-top-left-radius :3px;
        border-top-right-radius :3px;
    }
    </style>
    ";  

    $page = include_once"templates/page.php";
    echo $page;