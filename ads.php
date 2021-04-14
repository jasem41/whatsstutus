<?


	$set = array('erorr'=>'false',
	              'app_id' => 'ca-app-pub-3940256099942544~334751171',
				   'open_app'=>'ca-app-pub-3940256099942544/3419835294',
				  'bannar_id' => 'ca-app-pub-3940256099942544/6300978111',
				  'intersturial_id'=>'ca-app-pub-3940256099942544/1033173712',
				  'native_id'=>'ca-app-pub-3940256099942544/2247696110',
				  'inter_reword'=>'ca-app-pub-3940256099942544/5354046379',
				  'tital'=>'اشحن شدات بوبجي',
				  'img'=>'https://play-lh.googleusercontent.com/JRd05pyBH41qjgsJuWduRJpDeZG0Hnb0yjf2nWqO7VaGKL10-G5UIygxED-WNOc3pg',
				  'dsc'=>'اشحن شدات بوبجي الان',
				  'link'=>'https://www.shardnat.tech',
				  'version'=>'3');

 header( 'Content-Type: application/json; charset=utf-8' );
        			 $json = json_encode($set);	    
        			 echo $json;

?>