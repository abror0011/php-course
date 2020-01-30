<?php

    include('tests.php');
    // echo $tests[1]['check'];
    // exit;
    // var_dump($_POST);
    $counter = 0;
    $xato = 0;
    $user_answers = $_POST['answer'];

    foreach ($user_answers as $index => $answer) {
        if ($answer == $tests[$index]['check']) {
            $counter++;
        }
        else
        $xato++;
    } 
    echo 'Siz to`g`ri javob berdingiz: ';
    echo $counter;
    echo '<br>';
    echo 'Siz xato javob berdingiz: '; 
    echo $xato;
    