Intro:
------------
This is a simple wrapper  of bit.ly api.
Updated to : Bit.ly API v4 (Support added);
features:
1. Short url.
2. Get link info.

USAGE:
--------------------
$bitly=new Bitly('9be6f6fgh1f07bb880b475fdsdf49e07ea42e105bdbb07'); //your token

To Get links data:
---------------------
$bitly->getclicks('https://bit.ly/3iII1vg');

To Shorturl
----------------------
$link= $bitly->shorturl('https://us-files.hostinger.in/');