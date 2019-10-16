<?php
//練習問題１
echo '<meta charset="utf-8">';

for($i = 1; $i <= 100; $i++){
    if(($i % 15) == 0){
        echo 'both';
    }elseif(($i % 5) == 0){
        echo 'five';
    }elseif(($i % 3) == 0){
        echo 'three';
    }else{
        echo $i;
    }
        echo '<br>';
}
?>


<?php
//練習問題１と２の境界の改行
echo '<br>';
?>

<?php  
//練習問題２
echo '<meta charset="utf-8">';

$like = array(
    array(
        '果物' => 'りんご',
        '炭水化物' => '米',
        'ゲーム' => 'ドラゴンクエスト',
        'お金' => '一万円札',
    ),
    array(
        '果物' => 'ぶどう',
        '炭水化物' => 'うどん',
        'ゲーム' => 'ファイナルファンタジー',
        'お金' => '一円玉',
    ),
);
    //１行目
    foreach($like as $key => $val){
        foreach($val as $key2 => $val2){
            if($key2 == '果物'){
                echo $val2 .'<br>';
            }
        }
    }
    echo '<br>';
    //２行目
    foreach($like as $key => $val){
        foreach($val as $key2 => $val2){
            if($key2 == '炭水化物'){
                echo $val2 .'<br>';
            }
        }
    }
    echo '<br>';
    //３行目
    foreach($like as $key => $val){
        foreach($val as $key2 => $val2){
            if($key2 == 'ゲーム'){
                echo $val2 .'<br>';
            }
        }
    }
    echo '<br>';
    //４行目
    foreach($like as $key => $val){
        foreach($val as $key2 => $val2){
            if($key2 == 'お金'){
                echo $val2 .'<br>';
            }
        }
    }
?>