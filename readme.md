# AvatarAPImg
AvatarAPImg is a tiny PHP based API. It's your central avatar hub for selfhosted webapps.

You can easily configure it with a json file.


## Setup
Easily configure AvatarAPImg within the config.php
```PHP
const URL = "https://avatar.yourdomain.tld/data/ego.json";
```


## API-Key
Make your personal uuid with a sha1- or md5-hash
```javascript
"API-Key": {
      "uuid" : "5085867adc42fc7d09297f018244d28a"
  }
```


## API Properties
```PHP
stdClass Object
(
    [avatar] => stdClass Object
        (
            [user] => Rej
            [src] => ./assets/ego.jpg
            [format] => jpg
            [width] => 250
            [height] => 250
            [title] => Rej
        )

    [API-Key] => stdClass Object
        (
            [uuid] => 5085867adc42fc7d09297f018244d28a
        )

)
```


## API Call
```PHP
$cUrl = curl_init();
curl_setopt_array($cUrl, array(
  CURLOPT_RETURNTRANSFER => 1,
  CURLOPT_URL => 'https://avatar.yourdomain.tld/api.php'
));

$avatar = curl_exec($cUrl);
```


## Simple Usage
```PHP
<?= $avatar; ?>
```


Demo: [avatar.cctrl.de](http://avatar.cctrl.de)

—
Version 1.0

^Rej

made with ❤ by shiftctrl
