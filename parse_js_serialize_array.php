<?php

public function parseJsSerializedArray($req)
{
    $arData = [];
    foreach($req as $row){
        if(isset($arData[$row['name']])){
            if(is_array($arData[$row['name']])){
                $tmp = $arData[$row['name']];
                $arData[$row['name']] = [];
                $arData[$row['name']][] = $tmp;
            }
            $arData[$row['name']][] = $row['value'];
        }else{
            $arData[$row['name']] = $row['value'];
        }
    }
    return $arData;
}
