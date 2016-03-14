<?php
	function select_q($q){
		global $conn;
		$output = [];
		if ($result = $conn->query($q)){
			if ($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
					$output[] = $row;
				}
			} else{
			  return [];
			}
			
		} else{
			return 'Error: '.$conn->error;
		}

		//$output = json_encode($output);
		return $output;
	}

	// this can be used to insert or update
	function insert_q($q){
		global $conn;
		if ($conn->query($q))
	    return 'success';
	  else
	    return 'Error: '.$conn->error;
	}
?>