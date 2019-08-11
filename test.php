<?php

function random_code($limit)
{
    return substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit);
}
 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Lorem</title>
	<script type="text/javascript">
     setTimeout( function(){ 
    window.stop() 
  }  , 2 );
    </script>
</head>
<body>
	    <?php 
        echo "adeleye%ayodeji".substr(rand(),0,4);
    ?>
		
	strtolower(str_replace(' ', '%', trim($row['title'])))
</body>
</html>