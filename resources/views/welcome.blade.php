<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Addresses application</title>
        <link href="{{mix('css/app.css')}}" rel="stylesheet" type="text/css">
			<style>
				.leftDiv {
					width: 300px;
					float: left;
				}
				
				.leftDiv li {
					cursor: pointer;
					list-style: none;
					background-color: rgba(0, 0, 0,0.1);
					margin-bottom: 2px;
					padding: 2px;
				}
				
				.leftDiv li:hover {
					font-weight: 600;
					background-color: rgba(0, 0, 0,0.2);
				}
				
			</style>
    </head>
    <body>
    <h2 style="text-align: center"> Addresses application </h2>
        <div id="root"></div>
        <script src="{{mix('js/app.js')}}" ></script>
			
			
			
    </body>
</html>
