<HTML>
<HEAD>
     <TITLE> Array Demo</TITLE>
</HEAD>
<BODY>
      <?PHP
         $Currency=array("India"=>"INR","US"=>"USD","UK"=>"GBP");
           
          foreach($Currency as $Country=>$Curr)
            {
             echo "$Country : $Curr"; 
             echo "</BR>";
            }
          
      ?>
</BODY>
</HTML>