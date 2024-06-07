<?php
$marks=array("CSE-2201"=>3.25, "CSE-2203"=>3.55,"CSE-2205"=>2.75,"CSE=2207"=>3.40,"MATH-2209"=>3.75);
$length=count($marks);
$credit=array("CSE-2201"=>3.00, "CSE-2203"=>3.00,"CSE-2205"=>3.00,"CSE=2207"=>2.75,"MATH-2209"=>3.00);

$totalCredit=0;
foreach($credit as $crd){
    $totalCredit+=$crd;
}

$totalResult = 0;
foreach ($marks as $course => $mark) {
    $totalResult += $mark * $credit[$course];
}
echo "Total Credit = ". $totalCredit."<br>";
echo "Total Result = ".$totalResult."<br>";
$gpa=$totalResult/$totalCredit;
echo "GPA = ".number_format($gpa,2);
?>