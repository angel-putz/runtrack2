<?php
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";
$strCount = strlen($str);

$dic =array ("consonne" =>0 , "voyelle"=>0);

for($countFor=0;$countFor<$strCount;$countFor++){      //ca permet de savoir si la lettre est une voyelle sinon c est une conssonne
    if($str[$countFor]=='a'|| $str[$countFor]=='e'|| $str[$countFor]=='i'|| $str[$countFor]=='o'|| $str[$countFor]=='u'|| $str[$countFor]=='y'){
    $dic['voyelle'] = $dic["voyelle"]+1;
}
    else{
        $dic['consonne']=$dic['consonne']+1;
    }
}


echo"<table border ='1'>
    <thead>
    <tr>
        <th>voyelle</th>
        <th>consonnes</th>
    </tr>
    </thead>

    <tbody>
    <tr>
        <td>{$dic["voyelle"]}</td>
        <td>{$dic["consonne"]}</td>
    </tr>
    </tbody>
    </table>";