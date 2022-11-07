<HTML>
    <HEAD>
	    <TITLE> Remove duplicate element in an array </TITLE>
	</HEAD>
	
	<BODY>
	     <?PHP
		    $num=array(10,22,10,54,20,30,45,90,20,54);
			echo join(",",array_unique($num));
			
		?>
	</BODY>
</HTML>