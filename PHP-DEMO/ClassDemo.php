<HTMl>
<HEAD>
      <TITLE> Class Example</TITLE>
</HTML>
<BODY>
      <?PHP
	       class Demo
		    {
			   public $Name;
			   public $Rno;
			   
			   public function setInfo()
			    {
				  $this->Name="AmolBK";
				  $this->Rno=227;
				}
				public function ShowInfo()
				{
				  echo  "Student Name:".$this->Name."</BR>Roll No.:".$this->Rno;
				}
				
			}
			$D=new Demo();
			$D->setInfo();
			$D->ShowInfo();
		?>
</BODY>
</HTML>