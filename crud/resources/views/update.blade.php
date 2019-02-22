<!DOCTYPE html>
<html lang ="en">
<head>
	<meta charset="UTF-8">
	<title>Update</title>
	</head>
	<body>
     
     {{ Form::open(array('route' => array('update', $user->id)))}}

     {{Form::label('name','Name')}}
     {{Form::text('name')}}<br/><br/>

     {{Form::label('email','email')}}
     {{Form::text('email')}}<br/><br/>

     {{Form::label('mobile','mobile')}}
     {{Form::text('mobile')}}<br/><br/>

    Gender {{Form::radio("gender",'male')}}Male
    {{Form::radio("gender",'female')}}Female<br/><br/>
     
     {{Form::label('os','Operating System')}}
     {{Form::select('os',[
     'Windows'=>'Windows',
     'Linux'=>'Linux',
     'MAC'=>'MAC'

     ])}}
     <br/><br/>
     {{Form::submit("Update")}}

     {{Form::close()}}

     
	</body>
	</html>