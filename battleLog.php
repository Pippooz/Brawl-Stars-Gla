<?php
//require('curl.php')
class BattleLog{

    private $json;

    function __construct($tag, $source) {
        require_once('curl.php');
        $curl = new Curl($source, $tag);
        $this->json = json_decode($curl->getResult('battlelog'), true);

    }

    function getJson()
    {
        return $this->json;
    }

    function getModes()
    {
        $list = new ArrayObject();
        foreach ($this->json['items'] as $key => $value)
            $list->append($value['battle']['mode']);
        
        return $list;
    }

    function getVictories(){

        $list = new ArrayObject();
        foreach ($this->json['items'] as $key => $value)
            if(isset($value['battle']['result']))
                $list->append($value['battle']['result']);
        
        return $list;
    }

    function getRanks(){
        $list = new ArrayObject();
        foreach ($this->json['items'] as $key => $value)
            if(isset($value['battle']['rank']))
                $list->append($value['battle']['rank']);
        
        return /*json_encode*/($list);
    }

    function getIDs(){
        $list = new ArrayObject();
        foreach ($this->json['items'] as $key => $value)
            $list->append($value['event']['id']);
        
        return $list;
    }


}

?>