<?php

function calcfs($fsize) {

	{
	    if ($fsize >= 1073741824)
	    {
	        $fsize = round($fsize / 1073741824, 1) . ' G';
	    }
	    elseif ($fsize >= 1048576)
	    {
	        $fsize = round($fsize / 1048576, 1) . ' M';
	    }
	    elseif ($fsize >= 1024)
	    {
	        $fsize = round($fsize / 1024, 1) . ' K';
	    }
	    elseif ($fsize < 1024)
	    {
	        $fsize = $fsize . ' B';
	    }

	return $fsize;
	}
}
