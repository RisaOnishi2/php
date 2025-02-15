<?php
for ($i = 2; $i <= 10; $i+=2) {
    echo $i . '</br>';
}

$count = 0;
While ($count < 20 ) {
    $count += 1;
    echo $count . '</br>';
}

$count = 0;
While ($count < 100) {
    if ($count%3 == 0) {
        $count++;
        continue;
    } elseif ($count == 20) {
        break;
    } else {
    echo $count . '</br>';
    $count++;
    }
}

$num = 0;
do {
    echo '$num =' . $num . '</br>';
    $num++;
} while ($num < 3);

for ($num = 0; $num <= 50; $num++) {
    if ($num%3 == 0 && $num%5 == 0) {
        echo 'FizzBuzz'. '</br>';
    } elseif ($num%3 == 0) {
        echo 'Fizz'. '</br>';
    } elseif ($num%5 == 0) {
        echo 'Buzz'. '</br>';
    } else {
        echo $num. '</br>';
    }
}

$loop = '●';
for ($i = 1; $i <= 25; $i++) {
    echo $loop;
    while ($i%5 == 0) {
        echo '</br>';
        break;
    }
}