<?php
include "./config.php";

class Avatar{

  const JSON = URL;

  function __construct(){

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, self::JSON);
    $data=curl_exec($ch);
    curl_close($ch);

    $obj = json_decode($data);
    $this->obj = $obj;

  }


  function show__avatar(){

    if (!empty($this->obj->{"API-Key"}->uuid)) {
        $avatar = "<img src=\"". $this->obj->avatar->src ."\" alt=\"".$this->obj->avatar->title."\" title=\"".$this->obj->avatar->title."\">";
        return $avatar;

    } else {

      echo "Keine API-Key vorhanden.";

    }

  }


}


$img = new Avatar();
echo $img->show__avatar();


?>
