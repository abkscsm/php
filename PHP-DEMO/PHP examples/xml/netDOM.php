<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
  <?php
  $doc = new DOMDocument();
  $doc->load( 'books.xml' );
  
  $books = $doc->getElementsByTagName( "book" );
  foreach( $books as $book )
  {
  $authors = $book->getElementsByTagName( "author" );
  $author = $authors->item(0)->nodeValue;
  
  $publishers = $book->getElementsByTagName( "publisher" );
  $publisher = $publishers->item(0)->nodeValue;
  
  $titles = $book->getElementsByTagName( "title" );
  $title = $titles->item(0)->nodeValue;
  
  echo "$title - $author - $publisher\n";
  }
  ?>

</body>
</html>
