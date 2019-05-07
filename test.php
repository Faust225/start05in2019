<?php 

// Read JSON file
$json = file_get_contents('json/input.json');

//Decode JSON
$json_data = json_decode($json,true);

$sum = 0;
$arr_index = 0;
$reuslt = '';

foreach($json_data as $data_key => $data) {
    
  // $value = 0-3 arrays with values 'price' 'income'
    foreach($data as $value_key => $value) {
        
        $a = count($value) - 1;
        
        // this for goes 4 times I think I need to make empty arr[] and add all incomes
        foreach($value as $inside_val_key => $inside_val){
            
            if($sum + $value[$a]['income'] < $data['required_income']) {
                
                 while($sum + $value[$a]['income'] < $data['required_income']) {
                $sum += $value[$a]['income'];
                $reuslt .= $value[$a]['income'] . ' ';
                }
                
            } elseif($sum < $data['required_income']) {
                
                while ($sum + $value[$a]['income'] > $data['required_income']){
                     $value[$a--]['income'];
                }
            }
        }
       
    }
}
  // 0.41
$json_data[0]['sms_list'][0]['income'];

// 11
var_dump($json_data[0]);

print $sum;

print '<br>' .  $reuslt;