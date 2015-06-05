<?php
class Speed_Bumps_Oembed_Constraint extends Speed_Bumps_Element_Constraint {
	
	public function contains( $paragraph ) {
		preg_match_all( '|^\s*(https?://[^\s"]+)\s*$|im', $paragraph, $matches ); 
		foreach ( $matches[1] as $match ) {
			if ( wp_oembed_get( $match ) ) { 
				return true;
			} 
		} 
		return false; 
	}

}
