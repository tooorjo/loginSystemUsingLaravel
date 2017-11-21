<!DOCTYPE html>
<html>
<head>
<title>Registration page</title>
</head>
<body>
<h4>Please fill up the given form:</h4>
<form method="post"  action="/project1">
Username:
<input type="text" name="username">
<br>Password:
<input type="password" name="password">
<br>Occupation:
<input type="text" name="occupation">
<br>
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="submit" value="submit">

</form>

<br><br>
<h4>Already have an account?? <a href='project1'>login</a> here.
</body>
</html>