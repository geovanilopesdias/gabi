<?php
  function is_cpf_valid($cpf){
    $cpf = preg_replace('/[^0-9]/', '', $cpf);
    
    if(strlen($cpf) != 11){
      return false;
    }
    if(preg_match('/(\d)\1{10}/', $cpf)){
      return false;
    }
    for($i = 9; $i < 11; $i++){
      for($j = 0, $k = 0; $j < $i; $j++){
        $k += $cpf[$j] * (($i + 1) - $j);
      }
      $k = ((10 * $k) % 11) % 10;
      if($cpf[$i] != $k){
        return false;
      }
    }
    return true;
  }

  function is_phone_valid($phone){
    $phone = preg_replace('/[^0-9]/', '', $phone);
    if(strlen($phone) != 11) return false;
    if(preg_match('/(\d)\1{10}/', $phone)) return false;
    if ($phone[2] != '9') return false;
    
    return true;
  }

function is_name_valid($name){
  if(strlen($name) < 3) return false;
  if (is_numeric($name)) return false;
  if (empty($name)) return false;
  return true;
}

function is_isbn_valid($isbn){
  $isbn = preg_replace('/[^0-9]/', '', $isbn);
  if(strlen($isbn) != 13) return false;
  if(preg_match('/(\d)\1{12}/', $isbn)) return false;
  
  return true;
}

function get_cutter_sanborn_code(string $name){

}

?>