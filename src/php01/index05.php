<?php
for($i=0; $i<4; $i++){
    echo $i;
    echo "<br />";
}
for($i=1; $i<=5; $i++){
    echo $i*2 . '<br />';
}
$count=0;
while($count<20){
    $count+=1;
    echo $count .'<br />';
}
$count=0;
while($count<=100){
    if($count===20){
        break;
    }
    if($count%3===0){
        $count++;
        continue;
    }
    echo $count .'<br />';
    $count++;
}
$num=0;
do{
    echo 'num= '.$num .'<br />';
    $num+=1;
} while ($num<3);
    echo '<br />';

$count=0;
while($count<20){
    $count+=1;
    echo $count .'<br />';
}