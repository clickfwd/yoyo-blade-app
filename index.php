<?php
require 'vendor/autoload.php';

use Slim\Factory\AppFactory;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Clickfwd\Yoyo\Yoyo;

require __DIR__.'/app/bootloader.php';

$app = AppFactory::create();

$app->get('/', function (Request $request, Response $response, $args) use ($blade)
{
	$blade = Yoyo::getViewProvider()->getProviderInstance();

	$content = $blade->render('index');
    
    $response->getBody()->write($content);
    
    return $response;
});

$app->any('/yoyo', function (Request $request, Response $response, $args) use ($blade)
{
	$output = (new Yoyo())->update();
	
  	$response->getBody()->write($output);
  
  	return $response;
});

$app->run();


