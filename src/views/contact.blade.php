<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mirxan Contact Package</title>
    </head>
    <body>
        <h3>Mirxan contact</h3>
    	<form action="{{ route('contact') }}" method="POST">
    		<div>
    			<input type="name" name="name" placeholder="Enter name...">
    		</div>
    		<div>
    			<input type="email" name="email" placeholder="Enter email...">
    		</div>
    		<div>
    			<textarea name="message" placeholder="Enter text..." cols="22" rows="5"></textarea>
    		</div>
    		<div>
    			<button type="submit">Send</button>	
    		</div>
    	</form>
    </body>
</html>
