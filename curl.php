<?php

class Curl {

    private $url;
    private $token;
    private $tag;
    private $domain;

    function __construct($domain, $tag) {
        $this->tag = $tag;
        $this->domain = $domain;
        $this->url = "https://api.brawlstars.com/v1/".$this->domain."/".$this->tag."/";
        $this->token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiIsImtpZCI6IjI4YTMxOGY3LTAwMDAtYTFlYi03ZmExLTJjNzQzM2M2Y2NhNSJ9.eyJpc3MiOiJzdXBlcmNlbGwiLCJhdWQiOiJzdXBlcmNlbGw6Z2FtZWFwaSIsImp0aSI6IjJlMTRhYzg2LWE3NmQtNDBhYS1hOTcxLTBmZGRjMjkxNjczOCIsImlhdCI6MTY1NDU5NjU2NSwic3ViIjoiZGV2ZWxvcGVyLzNjYzIzMGI4LTFmMjUtOTA0OC0wZGZlLTQwNWI5YmEzZjMyMyIsInNjb3BlcyI6WyJicmF3bHN0YXJzIl0sImxpbWl0cyI6W3sidGllciI6ImRldmVsb3Blci9zaWx2ZXIiLCJ0eXBlIjoidGhyb3R0bGluZyJ9LHsiY2lkcnMiOlsiMTkzLjIwNC4xODkuMTQiXSwidHlwZSI6ImNsaWVudCJ9XX0.hpwP1tJ5jCOYDcUvcmpNHOZnotzN2BbfN0OYxUROYjSGN8QlBRA4YXj_iZhLF7hzFWrFxk_4RRvD7sAjDUxHrg";

    }

    function getResult($mode){
        header('Content-Type: text/html; charset=UTF-8');
        $ch = curl_init($this->url.$mode);

        $headr = array();
        $headr[] = "Accept: application/json";
        $headr[] = "Authorization: Bearer ".$this->token;
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headr);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $res = curl_exec($ch);

        return $res;
    }


}

?>