<?php

use App\Util\CommonFields;

$path_helper = __DIR__ . "/../../";

require_once $path_helper."Modules/Users/app/helpers.php";
require_once $path_helper."Modules/Cms/app/helpers.php";
require_once $path_helper."Modules/GA/app/helpers.php";

if(!function_exists('relationships')){
 function relationships($relationships){
    return $relationships->whereNull(CommonFields::DELETED_AT)->whereNUll(CommonFields::DELETED_BY);
 }
}
