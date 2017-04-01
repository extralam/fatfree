<?php
use Illuminate\Database\Capsule\Manager as Capsule;

class Phpq extends BaseModel{

    function getTableName(){
        return "phpqs";
    }

    public static function add($token , $status = 0){
        $db = new Phpq();
        $db->token = $token;
        $db->status = $status;
        $db->save();
    }

    public static function list($limit = -1){
        return Phpq::all();
    }

    public static function up(){
        Capsule::schema()->dropIfExists("phpqs");
        Capsule::schema()->create("phpqs", function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('token');
            $table->tinyInteger('status');
            $table->timestamps();
        });
    }

    public static function down(){
        Capsule::schema()->drop("phpqs");
    }
}

?>