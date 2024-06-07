<?php
$n = 1e6 + 5;
$marked = array_fill(0, $n, false);

function sieve() {
    global $marked, $n;
    $marked[0] = $marked[1] = true;
    for ($i = 2; $i * $i <= $n; $i++) {
        if ($marked[$i]) continue;
        for ($j = $i * $i; $j <= $n; $j += $i) {
            $marked[$j] = true;
        }
    }
}

sieve();
$n=-1;
while($n<=199){
    $n++;
if (!$marked[$n]) {
    echo "$n Is a Prime Number<br>";
} 
else {
    echo "$n Is Not a Prime Number<br>";
}
}
?>