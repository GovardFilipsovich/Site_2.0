<button id="Settings" onClick="output();">
    <img src="button.svg">
</button >
	
<?php 
	$open_string = '<object width="25%" height="85%" class="Menu" hidden="hidden" id="Menu">';
	$close_string = '</object>';
	function menu($arr)
	{
		for ($i=0; $i < count($arr); $i++) { 
	    		echo "<center><button>".$arr[$i]."</button></center>";
	    	}
	}
?>
