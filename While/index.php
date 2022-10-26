<?php
$v=30;
$c=20;
while($c<$v){
    echo $c;
    $c++;
}
?>
<hr/>
<?php
for ($c=10;$c<40;$c++){
    echo $c."-";
}
?>
<hr/>
<?php
$cursos=["CSS3", "PHP", "JS", "HTML5"];
for($c=0;$c<count($cursos);$c++){
    echo "Curso: ".$cursos[$c]."<br/>";
}
foreach($cursos as $nome){
    echo "Curso: ".$nome."<br/>";
}
?>
<hr/>
<?php
$cursos=[
    'Curso1' => 'PHP',
    'Curso2' => 'MySql',
    'Curso3' => 'HTML'
];
foreach($cursos as $chave => $valor){
    echo $chave . ": ".$valor."<br/>";
}
?>
<hr/>
<?php
$v=5;
$c=1;
while($c<=10){
    echo $v."x".$c."=".$v*$c."<br/>";
    $c++;
}
?>
<hr/>
<?php
$v=9;
for($c=1;$c<=10;$c++){
    echo $v."x".$c."=".$v*$c."<br/>";
}
?>
