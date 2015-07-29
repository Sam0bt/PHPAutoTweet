<meta charset="UTF-8">
<title>Otomatik Tweet atma</title>
<?php  
 
 require_once('twitteroauth.php'); 
   $consumerKey = 'CClIhtV81V4i4k4GHioHvMKrD';
    $consumerSecret = 'pl62RrriVdPn5ew7rMv0HV4bMIoD931jGIsUrk4KK2EN3LdgsA';
     $accessToken = '2974044071-yLHcsYw3oVfx9umAkNAv0dtJY6OwhIef0fKfugH'; 
     $accessTokenSecret = 'CATHHUhLAg1MN4yjEHQAJhQFFaDsXsufWf6ORoV96nkTv';
         
         
         function randomline($twee)
          { $lines = file( $twee ); return $lines[array_rand( $lines )]; }
           $twee = $_POST["twit"];
           $tweet = new TwitterOAuth($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret); 
           
        if(strlen($twee) <= 140) {$tweet->post('statuses/update', array('status' => $twee)); }
        
        if ($_GET["tweet"]=="gonder")
        { randomline(); } 
          ?>
          <form method="post" action="index.php?tweet=gonder">
          	<textarea rows="4" cols="50" name="twit">
Birşeyler yaz..</textarea><br>
    		<button type="submit">Tweet At</button>
	  </form>
