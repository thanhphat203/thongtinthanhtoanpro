<?php
session_start();
function getClientIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        return $_SERVER['REMOTE_ADDR'];
    }
}

$ip_address = getClientIP();
if (isset($_SERVER['HTTP_CF_VISITOR']) && strpos($_SERVER['HTTP_CF_VISITOR'], 'https') !== false) {
    $_SERVER['HTTPS'] = 'on';
}
if (isset($_SERVER['HTTP_CF_CONNECTING_IP'])) {
    $_SERVER['REMOTE_ADDR'] = $_SERVER['HTTP_CF_CONNECTING_IP'];
}
if (!isset($_SESSION['anti-ddos'])) {
    $_SESSION['anti-ddos'] = 1;
    $current_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    header("refresh:5, $current_url");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ANTI DDOS — GIABAO DEV</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Tilt+Neon&display=swap" rel="stylesheet">
</head>
<style>
	* {
		text-decoration: none;
	}
	body {
		background-color: #001;
		background-size: cover;
    	background-position: center;
    	justify-content: center;
   	 	text-align: center;
   	 	align-items: center;
	}
	#anti-checking {
		padding: 15px;
	}
	.font-wiget {
		font-family: 'Tilt Neon', sans-serif;
		font-size: 40px;
		font-weight: 700;
		color: #fff;
		letter-spacing: 3px;
		background-image: 
  		linear-gradient(to right, indigo, aqua);
  		-webkit-background-clip: text;
  		-webkit-text-fill-color: transparent; 
  		animation: move 45s linear infinite;
	}
	@keyframes move {
		to {
			background-position: 4500vh;
		}
	}
	.no-color-full {
		font-family: 'Tilt Neon', sans-serif;
		color: #fff;
		font-size: 20px;
		letter-spacing: 5px;
		opacity: 0.4;
	}
	.muted-copyright {
		color: #fff;
		font-family: 'Tilt Neon', sans-serif;
	}
	.xanh-duong-text {
		color: dodgerblue;
	}
	.xanh-duong-text:hover {
		text-decoration: underline;
	}
	@media(max-width: 500px) {
		.font-wiget {
			font-size: 20px;
		}
		.no-color-full {
			font-size: 15px;
		}
	}
	.pulse-container {
                margin-top: 10px;
                margin-bottom: 10px;
                width: 75px;
                display: flex;
                justify-content: space-between;
                align-items: center
            }

            .pulse-bubble {
                width: 13px;
                height: 13px;
                border-radius: 50%;
                background-color: dodgerblue;
            }

            .pulse-bubble-1 {
                animation: pulse .4s ease 0s infinite alternate
            }

            .pulse-bubble-2 {
                animation: pulse .4s ease .2s infinite alternate
            }

            .pulse-bubble-3 {
                animation: pulse .4s ease .4s infinite alternate
            }

            @keyframes pulse {
                from {
                    opacity: 1;
                    transform: scale(1)
                }

                to {
                    opacity: .25;
                    transform: scale(.75)
                }
            }

</style>
<body>
	<div id="anti-checking">
		<img src="https://i.imgur.com/iAEqojF.gif" width="70" height="140">
		<h1 class="font-wiget">
			Checking Your Browser
		</h1>
		<p class="no-color-full">
				Please wait
			</p>
		<br>
		<center>
		<div class="pulse-container">
        	<div class="pulse-bubble pulse-bubble-1"></div>
        	<div class="pulse-bubble pulse-bubble-2"></div>
        	<div class="pulse-bubble pulse-bubble-3"></div>
    	</div></center>
	</div>
	<footer>
    		<p class="muted-copyright">Anti Security<a class="xanh-duong-text" href="https://www.facebook.com/Thanh.Phat.203">THANHPHAT DEV</a></p>
    	</footer>
</body>
</html>
<?php exit(); }
?>