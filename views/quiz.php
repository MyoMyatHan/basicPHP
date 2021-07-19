<?php

    $quizIsSubmitted = isset($_POST['quiz-submitted']);
    if ( $quizIsSubmitted ) {
        $answer = $_POST['answer'];
        $output = showQuizResponse( $answer );
        // $output .= "<pre>";
        // $output .= print_r($_POST, true);
        // $output .= "</pre>";
    } else {
        $output = include_once"views/quiz-form.php";
    }
    
    return $output;

    function showQuizResponse( $answer ) {
        $response = "<p>You clicked $answer </p>";

        if ( $answer === "yes" ) {
            $response .= " You know Nothing. Learn more ,Wank !";
        } else {
            $response .= " Ma Aye Loe Min Aung Hlaing";
        }
        $response .= "</p>";

        $response .= "<p> <a href='index.php?page=quiz'> Try again? </a> </p>";
        return $response;
    }

    