<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title></title>
<meta name="" content="">
<meta name="vs_targetSchema" content="http://schemas.microsoft.com/intellisense/ie5">
<style>
label {
 font-weight: bold;
 color: #300ACC;
 }



</style>
</head>
<body>
<form action="book2.php"
method="post">

 <fieldset><legend>Enter your
information in the form below:
</legend>

 <p><label>Name: <input type="text"
name="name" size="20" maxlength=
"40" /></label></p>

 <p><label>Email Address: <input
type="text" name="email" size="40"
maxlength="60" /></label></p>

 <p><label for="gender">Gender:
</label><input type="radio"
name="gender" value="M" /> Male
<input type="radio" name="gender"
value="F" /> Female</p>

 <p><label>Age:
 <select name="age">
 <option value="0-29">Under 30
</option>
 <option value="30-60">Between 30
and 60</option>
<option value="60+">Over 60
</option>
 </select></label></p>

 <p><label>Comments: <textarea
name="comments" rows="3" cols="40"></textarea></label></p>

 </fieldset>

 <p align="center"><input type=
"submit" name="submit" value=
"Submit My Information" /></p>

</form>


</body>
</html>