<?php

$targets = array(
	'Ben Collins',
	'Yanks',
	'Vegetarians',
	'Tree Huggers',
	'Krauts',
	'Obama',
	'Cyclists',
	'Thieving Scouse Gits',
	'Greens',
	'Sheep Shaggers',
	'Students',
	'Muslims',
	'Environmentalists',
	'Toyota Prius Drivers',
	'The Disabled',
	'Poofters',
	'Dale Farm Residents',
	'One-Eyed Scottish Idiots',
	'Immigrants',
	'Johnny Foreigner',
	'The Unemployed',
	'Wishy Washy Liberals',
	'Single Mothers',
	'Public Sector Strikers',
	'Gypsies',
	'Benefit Scroungers',
	'Truck Drivers',
	'Caravaners',
	'Fatties',
	'Bus Wankers',
	'Jordan',
	'Lazy, Feckless, Flatulent Mexicans'
);

$retributions = array(
	'should be rolled in dog dirt and deep fried in the sump oil of a resonably priced car',
	'should be frozen in carbonite and hung in Eric Pickles\' living room',
	'should be taken outside and shot in front of their families',
	'should have their vote confiscated and given to Jim Davidson for safe keeping',
	'should have the Daily Mail shouted at them by Brian Blessed until they are brain dead',
	'should be put in the back seat of a Mercedes and driven through Paris at high speed by a drunk chauffeur',
	'should be seasoned with garlic, made into pies and fed to John Prescott',
	'should have a brown Morris Marina dropped on their head at an inconvenient moment',
	'should jolly well go out and get themselves a private pension, health insurance and an inflatable Sarah Palin doll',
	'should be dissected live on Channel 4 by Joy Reidenberg and Mark Evans',
	'should be dowsed in petrol and made to play drums for Spinal Tap',
	'should be strapped to the front of a dragster with dodgy brakes ddriven by a blind-folded Richard Hammond'
);

$message = $targets[mt_rand(0, count($targets) - 1)] . ' ' . $retributions[mt_rand(0, count($retributions) - 1)];
?>
<!DOCTYPE html>
<html>
<head>
<title>Clarksonator 2.0</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
<meta name="apple-touch-fullscreen" content="yes" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<link href='http://fonts.googleapis.com/css?family=Creepster+Caps' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Spinnaker' rel='stylesheet' type='text/css'>
<style type='text/css'>
body { background-color: #4aa; }
h1 { color: white; font-family: 'Creepster Caps', sans-serif; font-size: 3em; text-align: center; }
blockquote { align: center; background-color: #cca; padding: 20px; color: #444; font-size: 1.3em; -webkit-border-radius: 15px; -moz-border-radius: 15px; border-radius: 15px; max-width: 600px; border: 2px solid #400; margin: 0 auto; text-align: center; font-family: 'Spinnaker', sans-serif; }
.button { display: block; align: center; background-color: #c00; padding: 10px; color: #fff; text-decoration: none; font-size: 1em; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; max-width: 300px; border: 2px solid #fff; margin: 10px auto; text-align: center; font-family: 'Spinnaker', sans-serif; }
.link { display: block; align: center; background-color: #cc0; padding: 10px; color: #fff; text-decoration: none; font-size: 1em; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; max-width: 150px; border: 2px solid #fff; margin: 0 auto; text-align: center; font-family: 'Spinnaker', sans-serif; }
</style></head>
<body><h1>Clarksonator</h1>
<blockquote><?php echo $message; ?></blockquote>
<a class='button' href=''>Slap me again!</a>
<a class='link' href='http://crispian-jago.blogspot.com/2011/12/make-your-very-own-clarksonator.html'>The Original</a>
</body></html>
