<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Página Expirada</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Kanit:200" rel="stylesheet">

	<style>

        * {
        -webkit-box-sizing: border-box;
                box-sizing: border-box;
        }

        body {
        padding: 0;
        margin: 0;
        }

        #expired {
        position: relative;
        height: 100vh;
        }

        #expired .expired {
        position: absolute;
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
        }

        .expired {
        max-width: 767px;
        width: 100%;
        line-height: 1.4;
        text-align: center;
        padding: 15px;
        }

        .expired .expired-419 {
        position: relative;
        height: 220px;
        }

        .expired .expired-419 h1 {
        font-family: 'Kanit', sans-serif;
        position: absolute;
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
        font-size: 186px;
        font-weight: 200;
        margin: 0px;
        background: linear-gradient(130deg, #ffa34f, #ff6f68);
        color:transparent;
        -webkit-background-clip: text;
        background-clip: text;
        text-transform: uppercase;
        }

        .expired h2 {
        font-family: 'Kanit', sans-serif;
        font-size: 33px;
        font-weight: 200;
        text-transform: uppercase;
        margin-top: 0px;
        margin-bottom: 25px;
        letter-spacing: 3px;
        }


        .expired p {
        font-family: 'Kanit', sans-serif;
        font-size: 16px;
        font-weight: 200;
        margin-top: 0px;
        margin-bottom: 25px;
        }


        .expired a {
        font-family: 'Kanit', sans-serif;
        color: #ff6f68;
        font-weight: 200;
        text-decoration: none;
        border-bottom: 1px dashed #ff6f68;
        border-radius: 2px;
        }

        .expired-social>a {
        display: inline-block;
        height: 40px;
        line-height: 40px;
        width: 40px;
        font-size: 14px;
        color: #ff6f68;
        border: 1px solid #efefef;
        border-radius: 50%;
        margin: 3px;
        -webkit-transition: 0.2s all;
        transition: 0.2s all;
        }
        .expired-social>a:hover {
        color: #fff;
        background-color: #ff6f68;
        border-color: #ff6f68;
        }

        @media only screen and (max-width: 480px) {
        .expired .expired-419 {
            position: relative;
            height: 168px;
        }

        .expired .expired-419 h1 {
            font-size: 142px;
        }

        .expired h2 {
            font-size: 22px;
        }
        }

    </style>

</head>

<body>

	<div id="expired">
		<div class="expired">
			<div class="expired-419">
				<h1>419</h1>
			</div>
			<h2>Página Expirada</h2>
			<p>Parece que você não passou bastante tempo inativo. <a href="/">Retornar para a Home</a></p>
		</div>
	</div>

</body>

</html>
