<?php 
namespace Arostech\ApiControllerPackage;

class ApiController{
    public static function test(){
        echo 'hello from test in controller package';
         
    }

    public static function ApiContentGetAll(){
        return Content::all();
    }

    
}
