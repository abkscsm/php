<HTML>
<HEAD>
     <TITLE> Array Demo</TITLE>
</HEAD>
<BODY>
      <?PHP
         $Stud=array("Stud1"=>array("Name"=>"Amol","Rno"=>"227","Age"=>"22"),
                     "Stud2"=>array("Name"=>"Sandip","Rno"=>"204","Age"=>"23"),
                     "Stud3"=>array("Name"=>"Satish","Rno"=>"212","Age"=>"25"));

         foreach($Stud as $k)
          {
            foreach($k as $key=>$val)
            {
             echo "$key : $val"; 
             echo "</BR>";
            }
           echo "</BR>";
          }
      ?>
</BODY>
</HTML>

