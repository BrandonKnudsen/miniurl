<?php

include('func.inc.php');





if(isset($_POST['url']))
{
	
	
	
$url = trim($_POST['url']);


$http = "http://";
$https = "https://";

			$cos = strpos($url, $https);
			

			$pos = strpos($url,$http);
			if($pos === false)
			{
			$url = $http.$url;	
	
			}
			else
			{
			$url = $url;	

			}
			
			

		if(empty($url))
		{
			echo 'error_no_url';
			
		}
		elseif(filter_var($url, FILTER_VALIDATE_URL) == false)
		{
			echo 'error_invalid_url';
		}
		elseif(is_min($url))
		{
			echo 'error_is_min';
			
		}
		else if(cos === true)
		{
		echo 'encrypted_url';	
		}
		else
		{
			
			
			
			
			
			while(!exists($code = gen_code())){
			
			echo 'http://mstrnet.co/'.shorten($url, $code);
			
			break 1; 
			}
			
		}
		
	
}

?>