# AvatarAPImg
AvatarAPImg is a tiny PHP based API. It's your central avatar hub for selfhosted webapps. 
You can easily configure it with a json file.

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
  CURLOPT_URL => ‚https://avatar.yourdomain.tld/api.php'
));

$avatar = curl_exec($cUrl);
```

## Basic Usage
```PHP
<?= $avatar; ?>
```
 

Demo: [avatar.cctrl.de](http://avatar.cctrl.de){:target=„_blank“}

—
Version 0.1<br />
^Rej
made with ❤ by shiftctrl