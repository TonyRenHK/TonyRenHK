<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>selected demo</title>
  <style>
  div {
    color: red;
  }
  </style>
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
 
<select name="garden" multiple="multiple">
  <option>Flowers</option>
  <option selected="selected">Shrubs</option>
  <option>Trees</option>
  <option selected="selected">Bushes</option>
  <option>Grass</option>
  <option>Dirt</option>
</select>
<div></div>
 
<script>
$( "select" ).change(function() {
    var str = "";
    $( "select option:selected" ).each(function() {
      str += $( this ).text() + " ";
    });
    $( "div" ).text( str );
  })
  .trigger( "change" );
</script>
 
</body>
</html>