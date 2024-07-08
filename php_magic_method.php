<?php
//this is changed in vs ocdeeded
class example{
    
    public function __call($fun,$arg){
        echo "this is vs code funtion name : $fun <br>";
        echo "Arguments <br>";
        print_r($arg);
    
    }
    //final push in vs code asas
    public  static function __callStatic($fun,$arg){
        echo "funtion name : $fun <br>";
        echo "Arguments <br>";
        print_r($arg);
    
    }
    public static function static_fun(){
        echo "this is static funtion<br>";
    }
    public function another_fun(){
        echo "this is another funtion<br>";
    }
}

$obj = new example();
$obj-> another_fun();
example::static_fun();
$obj->call_funtion("ellooe","asada","adklnak");
example::call_funtion2("elooe","aa","adkk");
