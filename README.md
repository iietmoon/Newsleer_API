# Newsleer_API

## what is?
Newsleer_API is an open api of a project called "Newsleer", and the API side is "open-source".

## How it work?
the API use the "Privacy-respecting metasearch engine".
You can specify the url with 4 rules with the GET method on the URL,

```php
// Keyword
$query = $_GET["q"];
// Category "News, music, social media, images ..."
$categories = $_GET["categories"];
// languages, +30 language supported
$language = $_GET["language"];
// format of query "json, csv, rss"
$format = $_GET["api"];
```

## Url

use the GET data from url to format your url of search and you can get the "Privacy-respecting metasearch engine" hosted url in the folder "Helpers/url_helper.php"

```php
$url = file_get_contents("".$url_1."/?q=".$query."&categories=".$categories."&language=".$language."&format=".$format."");
```

## Why ?

You need to use it inside your server because if you used directly the "Privacy-respecting metasearch engine" links to your app or your website to get data you blocked in some ads Providers like "adsense..." or if your Have an Mobile app you will get suspended from "google play, Appstore, Admob...".

## License
Open source 