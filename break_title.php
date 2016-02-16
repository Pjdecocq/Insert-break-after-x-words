if (! function_exists( 'break_title' ) ) {
	
	function break_title( $string, $num = 0 ) {
		
		$output = '';
		$sentence = explode(' ', $string); // Explode words on spaces
		
		for($i=0;$i < count($sentence);$i++) {
			// Loop through the sentence array() and add break when num is reached
			$output.= $sentence[$i].' '.($i==$num-1?'<br>':'');
		}
		
		print $output;
		
	}
	
}
