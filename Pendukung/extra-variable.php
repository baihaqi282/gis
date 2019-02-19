<html>
<head>
<title>Adding variables to a form to be passed as parameters of a script</title>
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
		text-align:center;
	}
</style>

</head>

<body bgcolor="#FFFFFF">
<div id="content"> 
  <h1>Demo - Extra Variables to a Form</h1>
  <p>What is you want to call a script with parameters that are not in the form?<br>
    A solution is to create hidden objects and to assign them some value with 
    a JavaScript function.</p>
  <p>In this demo, the text &quot;Content of the extra variable&quot; is assigned 
    as value to the hidden object, and its name and this text are added automatically 
    to other names and values of objects of the form, as additional parameter 
    for the called script.</p>
  
<fieldset>  

<form  method="post" name="myform" action="extra-code.php">
	<br>

	<input type="hidden" name="extra" value="Content of extra variable" />
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

</div>

<div class="legal"> 
(c)2007-2008 <a href="http://www.xul.fr/javascript/" target="_parent" >Xul.fr</a>
</div>


</body>
</html>
