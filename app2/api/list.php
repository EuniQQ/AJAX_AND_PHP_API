<?php
//處理新增資料的請求
include_once "base.php";

$sql="SELECT `classroom`as '班級',count(`id`) as '人數' FROM `students` GROUP by `classroom`; "
$rows=$Stu->q($sql);
// echo json_encode($rows);  //把jason的字串轉為陣列
$list="";

foreach($rows as $row){
    $list.="<div class='card'>";
    $list.="<div class='card-body'>";
    $list.="  <h5 class='card-title'>{$row['班級']}</h5>";
    $list.="  <p class='card-text'>{$row['人數']}</p>";
    $list.="</div>";
    $list.="</div>";
    
}




?>