<?
function arr_vals(array $arr, int $arrays){
$code = "";
foreach( range(0, $arrays) as $tr){
$code .= '$lo_'.$tr.' = array();'._BR_;
}
$code .= '$x = 0;
while($x<' . (count($arr)/$arrays) . '){' . _BR_;
foreach( range(0, $arrays) as $trr){
if( $trr>0){
$la = ' $arr[$x+'.$trr.'];';
}else{
$la = ' $arr[$x];';
}
$code .= '$lo_'.$trr.'[] ='.$la._BR_;
}
$code .= '$x++;
}
$res=array();';
foreach( range(0, $arrays) as $tmr){
$code .= '$res[] = $lo_'.$tmr.';';
}
eval($code);
return $res;
}

function array_repeat(array $arr, int $times){
$res = "";
$x = 0;
while( $x < $times ){  $res .= $arr; $x++; };
return $res;
}

function string_repeat(string $str, int $times){
$res = "";
$x = 0;
while( $x < $times ){ $res .= $str; $x++; };
return $res;
}

function array_del_c(array $arr){
$res = array();
foreach($arr as $val){
if(!array_exists($res, $val)){
$res[] = $val;
}
}
}

function array_get_last($arr){
  end($arr);
  return key($arr);
}

function array_read_last($arr){
  return $arr[array_get_last($arr)];
}
