<?php

if(! function_exists('flash')){
	function flash($message, $type='success'){
		session()->flash('message.text',$message);
		session()->flash('message.type',$type);
	}
}

?>