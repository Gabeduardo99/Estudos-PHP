<?php
    $a=array('PHP','Java','C#');
    var_dump($a);
    echo "<br/>".$a[1].$a[2];
?>
<hr/>
<?php
    $a=['HTML','CSS','JS'];
    var_dump($a);
?>
<hr/>
<?php
    $a=['lord'=>2022,
    'hobbit'=>'teste'];
    echo $a['hobbit'];
?>
<hr/>
<?php
    $a=[
        1=>[
            11=>[
                111=>'dado1.1.1'
            ],
            12=>'dado1.2'
        ],
        2=>'dado2',
        3=>'dado3'
    ];
    echo $a[3]."<br/>";
    echo $a[1][12]."<br/>";
    echo $a[1][11][111];
?>
<hr/>
<?php
    var_dump((1+8)*3);
    $a=20;
    $a+=3;
    echo $a;
    $b='Aula de';
    $b.=' PHP';
    echo $b;
?>
<hr/>
<?php
    $a=40;
    $b=45;
    $c=$a==$b;
    var_dump($c);
?>
<hr/>
<?php
    $a=false;
    $b=true;
    $c=true;
    var_dump($a || $b);
    var_dump($a && $c);
?>
<hr/>
<?php
$n1 = 3;
$n2 = 2;
$s = $n1 + $n2;
echo 'A soma entre ' . $n1 . ' e '. $n2 . ' é igual a '. $s;
?>