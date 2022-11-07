<HTML>
<HEAD>
     <TITLE> Array Demo</TITLE>
</HEAD>
<BODY>
      <?PHP
         $Stud=array("Name"=>"Amol","Add"=>"Pune");
           $it=new ArrayIterator($Stud);
         while($it->valid())
          {
           print $it->key().":".$it->current()."\n";
           $it->next(); 
          }

      ?>
</BODY>
</HTML>

