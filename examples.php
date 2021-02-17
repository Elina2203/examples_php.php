<link rel="stylesheet" href="style.css">
<?php
 $entries= [
    ['', '', ''],
    ['', '', ''],
    ['', '', '']
];
for($col = 0; $col < 3; $col++){
    for($row = 0; $row < 3; $row++){

        $entries[$row][$col] ='x';}
        
    }

?>
<?php
 $entries= [
    ['0', '0', '0'],
    ['0', '0', '0'],
    ['0', '0', '0']
];
for($col = 0; $col < 3; $col++){
    for($row = 0; $row < 3; $row++){

        $entries[$row][$col] ='x';}

        
    }

?>
<?php output($entries);?>
<?php function output($entries) { ?>
    <pre><?=print_r($entries, true)?></pre>

    <table>
        <?php for($row = 0; $row < 3; $row++): ?>
            
            <tr>
                
            <?php for($col = 0; $col < 3; $col++): ?>
                <td><?=$entries[$row][$col] ; ?></td>
            <?php endfor;?>
            </tr>
        <?php endfor;?>
    </table>
            <?php  }?>

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

        $entries[$row][$col] ='x';}

        
    }

?>
<?php output($entries);?>
</div>
<br>


<div style="width:100px;display:inline-block;">
        <h1>3)</h1>
        <?php
 $entries= [
    ['0', '0', '0'],
    ['0', '0', '0'],
    ['0', '0', '0']
];
for($col = 0; $col < 3; $col++){
    for($row = 0; $row < 3; $row++){
        if($row===1 && $col===1){
        continue;
        }
        $entries[$row][$col] ='x';}

        
    }

?>
<?php output($entries);?>
</div>
<br>

<div style="width:100px;display:inline-block;">
        <h1>4)</h1>
        <?php
 $entries= [
    ['0', '0', '0'],
    ['0', '0', '0'],
    ['0', '0', '0']
];
for($col = 0; $col < 3; $col++){
    for($row = 0; $row < 3; $row++){
        if($row===1 && $col>=0){
        continue;
        }
        $entries[$row][$col] ='x';}

        
    }

?>
<?php output($entries);?>
</div>

<br>

<div style="width:100px;display:inline-block;">
        <h1>5)</h1>
        <?php
 $entries= [
    ['0', '0', '0'],
    ['0', '0', '0'],
    ['0', '0', '0']
];
for($col = 0; $col < 3; $col++){
    for($row = 0; $row < 3; $row++){
        if($row===2 && $col>=1){
        continue;
        }
        $entries[$row][$col] ='x';}

        
    }

?>
<?php output($entries);?>
</div>
<br>
<div style="width:100px;display:inline-block;">
        <h1>6)</h1>
        <?php
 $entries= [
    ['0', '0', '0'],
    ['0', '0', '0'],
    ['0', '0', '0']
];
for($col = 0; $col < 3; $col++){
    for($row = 0; $row < 3; $row++){
        if($row>=1 && $col>=1){
        continue;
    }
        $entries[$row][$col] ='x';}

        
    }

?>
<?php output($entries);?>
</div>
<br>
<div style="width:100px;display:inline-block;">
        <h1>7)</h1>
        <?php
 $entries= [
    ['0', '0', '0'],
    ['0', '0', '0'],
    ['0', '0', '0']
];
for($col = 0; $col < 3; $col++){
    for($row = 0; $row < 3; $row++){
        if($row===0 && $col===1 ||$row===2 && $col===1 ||$row===1)
{
        continue;
        }
    
        $entries[$row][$col] ='x';}

        
    }

?>
<?php output($entries);?>
</div>
<br>
<div style="width:100px;display:inline-block;">
        <h1>8)</h1>
        <?php
 $entries= [
    ['0', '0', '0'],
    ['0', '0', '0'],
    ['0', '0', '0']
];

for($col = 0; $col < 3; $col++){
    for($row = 0; $row < 3; $row++){
  
        if($row===0 && $col>0 || $row===1||$row===2 && $col>0 )
           
        {
           
        continue;
        
         }
         $entries[1][0]=$entries[1][1]=$entries[1][2]='m';
        $entries[$row][$col] ='x';
    }

        
}

?>
<?php output($entries);?>
</div>

<br>

<br>
<div style="width:100px;display:inline-block;">
        <h1>9)</h1>
        <?php
 $entries= [
    ['0', '0', '0'],
    ['0', '0', '0'],
    ['0', '0', '0']
];

for($col = 0; $col < 3; $col++){
    for($row = 0; $row < 3; $row++){
  
        if($row===0 && $col>0 || $row===1||$row===2 && $col>0 )
           
        {
           
        continue;
        
         }
         $entries[1][0]=$entries[1][1]=$entries[1][2]='m';
        $entries[$row][$col] ='x';
    }

        
}

?>
<?php output($entries);?>
</div>

<br>
	