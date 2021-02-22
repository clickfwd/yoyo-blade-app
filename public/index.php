<?php
require __DIR__.'/../vendor/autoload.php';

use Clickfwd\Yoyo\Blade\Application as Container;
use Slim\Factory\AppFactory;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Clickfwd\Yoyo\Yoyo;

require __DIR__.'/../app/bootloader.php';

$app = AppFactory::create();

$container = Container::getInstance();

$yoyo = new Yoyo($container);

$app->get('/', function (Request $request, Response $response, $args) use ($blade)
{
	$blade = Yoyo::getViewProvider()->getProviderInstance();

	$content = $blade->render('index');
    
    $response->getBody()->write($content);
    
    return $response;
});

$app->any('/yoyo', function (Request $request, Response $response, $args) use ($yoyo)
{
	$output = $yoyo->update();
	
  	$response->getBody()->write($output);
  
  	return $response;
});

$app->run();


