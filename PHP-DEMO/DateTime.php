<HTML>

<HEAD>

<TITLE> DATE And TIME </TITLE>

</HEAD>

<BODY>
      
      <?PHP
           $d=Date("D");
           $m=Date("M");
           $y=Date("Y");
           $t=time();
           echo"Today is<BR/>";
           echo"DD MM YY<BR/>";
           echo "\n$d $m $y";

           echo"Time is<BR/>";
           echo"HH MM SS<BR/>";
           echo"$t";


      ?>
</BODY>
</HTML>