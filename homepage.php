<?php
    //TO-DO not tested
    $brawl_id = $_GET['brwal_id'];

    echo $brawl_id;
    $headers = "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiIsImtpZCI6IjI4YTMxOGY3LTAwMDAtYTFlYi03ZmExLTJjNzQzM2M2Y2NhNSJ9.eyJpc3MiOiJzdXBlcmNlbGwiLCJhdWQiOiJzdXBlcmNlbGw6Z2FtZWFwaSIsImp0aSI6IjkyZjU3ZWI5LTE4ZDEtNDM1NS1hNzBhLTZjMjZhMjY2YTZkZiIsImlhdCI6MTY0NjIyNTcyOCwic3ViIjoiZGV2ZWxvcGVyLzNjYzIzMGI4LTFmMjUtOTA0OC0wZGZlLTQwNWI5YmEzZjMyMyIsInNjb3BlcyI6WyJicmF3bHN0YXJzIl0sImxpbWl0cyI6W3sidGllciI6ImRldmVsb3Blci9zaWx2ZXIiLCJ0eXBlIjoidGhyb3R0bGluZyJ9LHsiY2lkcnMiOlsiMi4yMzcuNzUuMjUiXSwidHlwZSI6ImNsaWVudCJ9XX0.hVut_T3_-d5wLJwipQAPqDigpFZKLzqIZ1640LH8WodXSRXBm0KP4P7gJQ_OIEqhDqNuI73jgO0oJyC4c_9jLg";
    $url = "https://api.brawlstars.com/v1/players/".$brawl_id."/battlelog";
    $ch = curl_init($url);
    
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_exec($ch);
    curl_close($ch);


?>