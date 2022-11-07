<Html>
<head>
     <title>Encode String</title>
</head>
<body>
<?PHP
function strencode($name)
{
  $code="";
  for($i=0;$i<strlen($name);$i++)
  {
   $char=$name[$i];
   switch($char)
   {
    case 'a': $code=$code.'1';
	          break;
    case 'b': $code=$code.'2';
	          break;
    case 'c': $code=$code.'3';
	          break;
    case 'd': $code=$code.'4';
	          break;
	case 'e': $code=$code.'5';
	          break;
    case 'f': $code=$code.'6';
	          break;
    case 'g': $code=$code.'7';
	          break;
    case 'h': $code=$code.'8';
	          break;			  
	case 'i': $code=$code.'9';
	          break;
    case 'j': $code=$code.'10';
	          break;
    case 'k': $code=$code.'11';
	          break;
    case 'l': $code=$code.'12';
	          break;
	case 'm': $code=$code.'13';
	          break;
    case 'n': $code=$code.'14';
	          break;
    case 'o': $code=$code.'15';
	          break;
    case 'p': $code=$code.'16';
	          break;
	case 'q': $code=$code.'17';
	          break;
    case 'r': $code=$code.'18';
	          break;
    case 's': $code=$code.'19';
	          break;
    case 't': $code=$code.'20';
	          break;
	case 'u': $code=$code.'21';
	          break;
    case 'v': $code=$code.'22';
	          break;
    case 'w': $code=$code.'23';
	          break;
    case 'x': $code=$code.'24';
	          break;
	case 'y': $code=$code.'25';
	          break;
    case 'z': $code=$code.'26';
	          break;
	}
  }
  return $code;
 }
echo strencode("amol");
?>
</body>
</html>
