<?php
function printFruits($fruitList, $arr_heystk){
     $selected = '';
    foreach($fruitList as $fruitLists){
        if(isset($arr_heystk) && in_array($fruitList, $arr_heystk) && is_array($arr_heystk)){
          $selected = "selected";
        }
        printf("<option value='%s' %s >%s</option>",strtolower($fruitLists),$selected, ucwords($fruitLists));
    }
}
// ====================== firstName Function =======================

function fristname(){
    $fristName = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
    if(isset($fristName)){
        echo $fristName;
    }
}
function lastname(){
    $lasname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
    if(isset($lasname)){
        echo $lasname;
    }
}
// ======================== checked Function ===================
function isChecked($value){
    $SelectedValues = filter_input(INPUT_POST,'film',FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY);
    if(isset($SelectedValues) && is_array($SelectedValues) && in_array($value,$SelectedValues)){
        echo "checked";
    }
}






























































                   