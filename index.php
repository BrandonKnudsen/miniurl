<?php
	include'func.inc.php';
	 if(isset($_GET['code']) && !empty($_GET['code']))
	 {
		 $code = $_GET['code'];
		 redirect($code);
		 die();
	 }
	 ?>
     
     
<!DOCTYPE html>
<head>
<title>miniurl</title>
<link href="/css/style.css" rel="stylesheet" type="text/css">
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
<style type="text/css">
/*{background-image:url('background.png');}*/
</style>
</head>
<body>

<div id="container">
  <img src="/images/logo.png" width="551px" height="161px">
  <br>
  <p><h2>Enter a long URL and have it shortened.</h2></p>
  <p><center><input type="text" name="url" id="url" placeholder="Enter long URL here..."> <input type="submit" id="submit" value="Shorten" ></center></p>

  <div id="message"><p>&nbsp;</p></div>

  <!--<div id="copyright">&copy; 2013</div>-->

</div>


<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.1.min.js"></script>
<script type="text/javascript">

$(document).ready(function() {
   $('#url').focus();
});

function go(url){
    $.post('url.php', 
        {url: url}, 
            function(data) {

                if (data == 'error_no_url') {
                    $('#message').html('<p>NO URL specified</p>');
                }
                else if (data == 'error_invalid_url') {
                    $('#message').html('<p> Not a valid URL</p>');
                }
				else if (data == 'encrypted_url') {
                    $('#message').html('<p>Encrypted URLs are not allowed. <br> Delete the S in https://</p>');
        
                }
                else if (data == 'error_is_min') {
                    $('#message').html('<p> Already a mstrnet.co URL</p>');
        
                }
                else {
                    $('#url').val(data);
                    $('#url').select();
                    $('#message').html('<p>Successfully shortened!</p>');
                }


        });

}
    $('#submit').click(function(){
        var url = $('#url').val();
        go(url);
    });

</script>

</body>
</html