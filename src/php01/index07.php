<?php
function outputNumber()
{
    echo 5 . '</br>';
}
outputNumber();

function Score($score1, $score2, $score3)
{
    $total = $score1+$score2+$score3;
    if ($total > 210) {
        echo '合計点は' . $total . 'なので合格です'. '</br>';
    } else {
        echo '合計点は' . $total . 'なので不合格です'. '</br>';
    }
}

Score(100,100,70);

function triangle($bottom, $height)
{
    $total = $bottom*$height/2;
    echo $total . '</br>';
}

triangle(5,10);

function square($bottom, $height)
{
    $total = $bottom*$height;
    echo $total . '</br>'; 
}

square(20,15);

function trapezoid($top, $bottom, $height)
{
    $total = ($top+$bottom)*$height/2;
    echo $total . '</br>'; 
}

trapezoid(3,4,5);
