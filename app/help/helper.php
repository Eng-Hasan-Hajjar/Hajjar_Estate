<?php



function test(){
	echo 'test helper for hasan';
}
function getSetting($settingname ='sitename'){
	return \App\SiteSetting::where('namesetting',$settingname)->get()[0]->value;
}
function contact()
{

     $array[0] ='';
    $array[1] ='Like';
    $array[2] ='Problem';
    $array[3] ='Suggestion';
    $array[4] ='Question';

 return $array;
}

function checkIfImageexist($imageName,$pathImage='/public/website/estateimages/',$url='/website/estateimages/'){
	if($imageName != ''){
	$path = base_path().$pathImage.$imageName;
	if(file_exists($path)) {
		return Request::root().$url.$imageName;
			  }
	}else{
		return getSetting('no_image');
	}
}

   function countallestatesAppendTostatus($status){
	   return \App\Es::where('es_status' , $status)->count();
   
   }
function es_type(){
	$array=['flat','villa','normal',];
	return $array;
}
function es_rent(){
	$array=['for buy','for rent','for mort',];
	return $array;
}
function status(){
	$array=['active','non active',];
	return $array;
}


function es_room_number(){
	$array=[];
	for ($i=0; $i <=22 ; $i++) { 
		$array[$i]=$i;
	}
	return $array;

}
function search_name_field(){
		
	return[
		'es_price'=>'Price',
		'es_es_place'=>'Place',
		'es_rooms'=>'Number of rooms',
		'es_type'=>'Type',
		'es_rent'=>'Rent',
		'es_sequar'=>'Square',
		'es_price_from'=>'Price from',
		'es_price_to'=>'Price to',
	];
	 
}
function es_place(){
	$array=['allepo','dama','homs','lattakia',];
	return $array;

}


function setActive($array , $class = "active"){
	if(!empty($array)){
		$seg_array = [];
		foreach ($array as $key => $url){
			if(Request::segment($key+1) == $url){
				$seg_array[] = $url;
			}
		}
		if(count($seg_array) == count(Request::segments())){
			if(isset($seg_array[0])){
			return $class;
		 }
		}
	}
}

function estateforusercount($user_id , $status){
	return \App\Es::where('es_status' , $status)->where('user_id' , $user_id)->count();
	}