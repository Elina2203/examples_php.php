<link rel="stylesheet" href="style.css">
<!-- 1 example -->
<?php
 $entries = [
    ['', '', ''],
    ['', '', ''],
    ['', '', '']
];
for ($col = 0; $col < 3; $col++){
    for ($row = 0; $row < 3; $row++){

        $entries[$row][$col] ='x';
    }       
}
?>

<?php
 $entries = [
    ['0', '0', '0'],
    ['0', '0', '0'],
    ['0', '0', '0']
];

for ($col = 0; $col < 3; $col++){
    for ($row = 0; $row < 3; $row++){

        $entries[$row][$col] ='x';
    }       
}
?>
<?php output ($entries);?>
<?php function output ($entries) { ?>
    <pre><?=print_r ($entries, true)?></pre>

    <table>
        <?php for ($row = 0; $row < 3; $row++): ?>  
            <tr>  
            <?php for ($col = 0; $col < 3; $col++): ?>
                <td><?=$entries[$row][$col] ; ?></td>
            <?php endfor;?>
            </tr>
        <?php endfor;?>
    </table>

            <?php  }?>
<!-- 2 example -->
            <div style="width:100px;display:inline-block;">
        <h1>2)</h1>
        <?php
 $entries= [
    ['0', '0', '0'],
    ['0', '0', '0'],
    ['0', '0', '0']
]; 
for($col = 1; $col < 3; $col++){
    for($row = 0; $row < 3; $row++){

        $entries[$row][$col] ='x';
    }       
}
?>
<?php output($entries);?>
</div>
<br>
<!-- 3 example -->
<div style="width:100px;display:inline-block;">
        <h1>3)</h1>
        <?php
 $entries= [
    ['0', '0', '0'],
    ['0', '0', '0'],
    ['0', '0', '0']
];
for ($col = 0; $col < 3; $col++){
    for ($row = 0; $row < 3; $row++){
        if ($row === 1 && $col === 1){
            continue;
        }
        $entries[$row][$col] ='x';
    }       
}
?>
<?php output($entries);?>
</div>
<br>
<!-- 4 example -->
<div style="width:100px;display:inline-block;">
        <h1>4)</h1>
        <?php
 $entries= [
    ['0', '0', '0'],
    ['0', '0', '0'],
    ['0', '0', '0']
];
for ($col = 0; $col < 3; $col++) {
    for ($row = 0; $row < 3; $row++) {
        if ($row === 1 && $col >= 0) {
            continue;
        }
        $entries[$row][$col] ='x';
    }       
}
?>
<?php output($entries);?>
</div>
<br>
<!-- 5 example -->
<div style="width:100px;display:inline-block;">
        <h1>5)</h1>
        <?php
 $entries= [
    ['0', '0', '0'],
    ['0', '0', '0'],
    ['0', '0', '0']
];
for ($col = 0; $col < 3; $col++) {
    for ($row = 0; $row < 3; $row++) {
        if ($row === 2 && $col >= 1) {
            continue;
        }
        $entries [$row][$col] ='x';
    } 
}
?>
<?php output($entries);?>
</div>
<br>
<!-- 6 example -->
<div style="width:100px;display:inline-block;">
        <h1>6)</h1>
        <?php
 $entries= [
    ['0', '0', '0'],
    ['0', '0', '0'],
    ['0', '0', '0']
];
for ($col = 0; $col < 3; $col++) {
    for ($row = 0; $row < 3; $row++) {
        if ($row>=1 && $col>=1) {
            continue;
        }
        $entries[$row][$col] ='x';
    }       
}
?>
<?php output($entries);?>
</div>
<br>
<!-- 7 example -->
<div style="width:100px;display:inline-block;">
        <h1>7)</h1>
        <?php
 $entries= [
    ['0', '0', '0'],
    ['0', '0', '0'],
    ['0', '0', '0']
];
for ($col = 0; $col < 3; $col++){
    for ($row = 0; $row < 3; $row++){
        if ($row === 0 && $col === 1 ||$row === 2 && $col === 1 ||$row === 1) {
            continue;
        }
        $entries[$row][$col] ='x';
    }        
}
?>
<?php output($entries);?>
</div>
<br>
<!-- 8 example -->
<div style="width:100px;display:inline-block;">
        <h1>8)</h1>
        <?php
 $entries= [
    ['0', '0', '0'],
    ['0', '0', '0'],
    ['0', '0', '0']
];
for ($col = 0; $col < 3; $col++) {
    for ($row = 0; $row < 3; $row++) {  
        if ($row === 1 && $col >= 0) {
            $entries[$row][$col] ='m';   
        }
        if ($row === 0 && $col > 0 || $row === 1 || $row === 2 && $col > 0 ) {
           continue;  
        }
        $entries[$row][$col] ='x';
    }        
}
?>
<?php output($entries);?>
</div>
<br>
<br>
<!-- 9 example -->
<div style="width:100px;display:inline-block;">
        <h1>9)</h1>
        <?php
 $entries= [
    ['0', '0', '0'],
    ['0', '0', '0'],
    ['0', '0', '0']
];
$i=1;
for ($row = 2; $row >= 0; $row--){
    for ($col = 2; $col >= 0; $col = $col - 2) {
        $entries[$row][$col] = $i++;
    }
}
?>
<?php output($entries);?>
</div>
<br>
<!-- 10 example -->
<div style="width:100px;display:inline-block;">
        <h1>10)</h1>
        <?php
 $entries= [
    ['0', '0', '0'],
    ['0', '0', '0'],
    ['0', '0', '0']
];
$i_new=0;
$i_old=1;
for ($row = 2; $row >= 0; $row--){
    for ($col = 2; $col >= 0; $col = $col - 2) {
        $a = $i_new;
        $i_new = $i_new + $i_old;
        $i_old = $a;

        $entries[$row][$col] = $i_new;
    }      
}
?>
<?php output($entries);?>
</div>