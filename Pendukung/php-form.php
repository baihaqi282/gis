<!DOCTYPE html>
<html>
<head>
<title>Demo of JavaScript variables used directly by PHP </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style>
	#content
	{
		margin: 64px;
	}
	h1
	{
		border-bottom:1px solid black;
	}
	.legal
	{
		color: #666;
		margin: 32px;
		font-size: 80%;
	}
</style>

</head>


<body bgcolor="#FFFFFF">
<div id="content"> 
  <h1>Demo - JavaScript Variable Used By PHP</h1>
  <p>The names of the elements of a form may be used directly by a PHP script 
    when this script is the action of the form.<br>
    Enter a text below and click on Submit, the text is used by a script and displayed 
    on another page.<br>
    The text input object below has for name &quot;mytext&quot; and $mytext becomes 
    automatically a variable of the PHP script.<br>

  
<fieldset>  

<form  method="post" name="myform" action="php-form-code.php">
	<br>
      <p align="center"><b>Enter some text:</b> 
        <input type="text" name="mytext" maxlength="80" size="30">
        <br>
      <p align="center"> 
      <div align="center">
	<input type="submit" width="120" height="24" name="phpvar" value="Submit" >
        <br>
      </div>
    </form>

</fieldset>
<br>

<div class="legal" align="center"> (c)2007-2008 <a href="http://www.xul.fr/javascript/" target="_parent" >Xul.fr</a></div>
    
</div>

</body>
</html>
