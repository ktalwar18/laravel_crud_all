<!DOCTYPE html>
<html lang ="en">
<head>
	<meta charset="UTF-8">
	<title>Create</title>
	</head>
	<body>
         <form action="store" method="post">
         	<label for="name">Name</label>
         	<input type="text" name="name"><br/>
         	<br><label for="email">Email</label>
         	<input type="email" name="email"><br/>
         	<br><label for="mobile">Mobile</label>
         	<input type="number" name="mobile"><br/>
         	
         	<br>Gender<input type="radio" name="gender" value="male">Male
         	<input type="radio" name="gender" value="female">Female


         	<br><br><select name="os" id="os">
         		<option value="Windows">Windows</option>
         		<option value="Linux">Linux</option>
         		<option value="MAC">MAC</option>
         	</select>

         	<br><input type="hidden" name="_token" value="{{csrf_token()}}">


         	<label for=""></label>
         	<input type="submit" name="submit" value="Submit">
         </form>

	</body>
	</html>