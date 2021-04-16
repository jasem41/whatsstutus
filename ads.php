<?


	$set = array('erorr'=>'false',
	              'app_id' => 'ca-app-pub-3940256099942544~334751171',
				   'open_app'=>'ca-app-pub-3940256099942544/3419835294',
				  'bannar_id' => 'ca-app-pub-5590116308722088/1722065653',
				  'intersturial_id'=>'ca-app-pub-5590116308722088/4623561166',
				  'native_id'=>'ca-app-pub-5590116308722088/7058152817',
				  'inter_reword'=>'ca-app-pub-5590116308722088/1997397828',
				  'tital'=>'اشحن شدات بوبجي',
				  'img'=>'https://play-lh.googleusercontent.com/JRd05pyBH41qjgsJuWduRJpDeZG0Hnb0yjf2nWqO7VaGKL10-G5UIygxED-WNOc3pg',
				  'dsc'=>'اشحن شدات بوبجي الان',
				  'link'=>'https://www.shardnat.tech',
				  'version'=>'3');

 header( 'Content-Type: application/json; charset=utf-8' );
        			 $json = json_encode($set);	    
        			 echo $json;

?>