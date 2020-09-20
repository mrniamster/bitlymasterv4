<?
class Bitly{
    public $token;
    public function __construct($token){
         $this->token=$token;
    }
    public function getclicks($link){
     $linkfile=pathinfo($link)['filename'];
 $token =$this->token;
$clicks="https://api-ssl.bitly.com/v4/bitlinks/bit.ly/$linkfile/clicks/summary?unit=day";
 $ch=curl_init($clicks);
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
 $headers=["Authorization: Bearer $token"];
 curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
 $result=curl_exec($ch);
  $decode= json_decode($result);
 echo $sub=$decode->total_clicks; // to go within a json {}
// echo $sub;
    }
    public function create($longurl){
     $tokenx=$this->token;
     $jsonlink=json_encode(["long_url"=>$longurl]);
     $ch=curl_init("https://api-ssl.bitly.com/v4/bitlinks");
      curl_setopt($ch, CURLOPT_POST,1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,$jsonlink);
     $headers=["Authorization: Bearer $tokenx","Content-Type: application/json"];
     curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
     $res=curl_exec($ch);
      $result= json_decode($res);
      echo $result->link;
     // echo json_encode(["long_url"=>$result->long_url,"link"=>$result->link]);
    }
        
    }
    // usage
// $bitly=new Bitly('9be6f6a1f07bb880b475f49e07ea42e105bdbb07');
// $bitly->getclicks('https://bit.ly/3iII1vg');
//  $link= $bitly->create('https://us-files.hostinger.in/');

