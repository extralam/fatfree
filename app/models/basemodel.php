<?

abstract class BaseModel extends Illuminate\Database\Eloquent\Model{
    
    protected $table;
    abstract function getTableName();

    function __construct() {
        $this->table = $this->getTableName();
    }
    

}