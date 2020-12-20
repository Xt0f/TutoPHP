<?php
class MonObjet {

    public $propriete1;

    public $propriete2;

    public function __construct (int $param1, int $param2) 
    {
        $this->propriete1 = $param1;
        $this->propriete2 = $param2;
    }

    public function MaMethode(int $param): bool
    {
        return $param >= $this->propriete1 && $param<= $this->propriete2;
    }

    public function intersect(MonObjet $param): boolval
    {
        return  $this->MaMethode($param->propriete1) ||
                $this->MaMethode($param->propriete2) ||
                ($this->propriete1 > $param->propriete1 && $this->propriete2 < $param->propriete2);
    }
}
?>