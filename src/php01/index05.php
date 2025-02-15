<?php
$a = 5;

if ($a === 5) {
    echo '$aは5です';
    echo "<br/>";
    echo "\$aは5です";
    echo "<br/>";
    echo "aは5です";
    echo "<br/>";
}

$a = 7;

if ( $a === 5 ) {
    echo '$aは5です';
    echo "<br/>";
} else {
    echo '$aは5以外です';
    echo "<br/>";
}

if ( $a === 5 ) {
    echo '$aは5です';
    echo "<br/>";
} elseif ( $a === 7 ) {
    echo '$aは7です';
    echo "<br/>";
} else {
    echo '$aは5と7以外です';
    echo "<br/>";
}

$people = 'Saburo';

switch ( $people ) {
    case 'Saburo':
        echo '三郎です';
        echo "<br/>";
        break;
    default:
        echo '三郎ではないです';
        echo "<br/>";
        break;
}

echo $result = ( $a === 7 ) ? 'TRUE':'FALSE';
