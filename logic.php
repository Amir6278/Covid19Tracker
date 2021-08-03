<?php 


  //using cURL to call API




  $url="https://pomber.github.io/covid19/timeseries.json";
  $ch =curl_init();
  curl_setopt($ch,CURLOPT_URL,$url);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
  $result = curl_exec($ch);
  curl_close($ch);
  // decoding JSON data in php array
  $result= json_decode($result,true); 
  
//   echo "<pre>"; 
//  print_r($result);



// handling php array here result is the full data
// key's are country array
// valus are array of each sitation
    
    foreach($result as $key => $value){    
     $days_count = count($value) - 1 ;    
       $prev_day = $days_count - 1;
      }


// total number calc worldwide :
$total_num_death = 0;
$total_num_recover = 0;
$total_num_confirm = 0;
  foreach($result as $key => $value){

 $total_num_death = $total_num_death + $value[$days_count]['deaths'];
 $total_num_recover = $total_num_recover + $value[$days_count]['recovered'];
 $total_num_confirm = $total_num_confirm + $value[$days_count]['confirmed'];
  }


 ?>