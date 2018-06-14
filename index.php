<?php

require_once __DIR__ . "/vendor/autoload.php";

use GuzzleHttp\Psr7\ServerRequest;
use Mykapo\Jakku\Core\FrontController;
use function Mykapo\Jakku\Core\Helper\send;

$frontController = new FrontController(ServerRequest::fromGlobals());
send($frontController->getResponse());

//$response = new \GuzzleHttp\Psr7\Response();
//
//if ($response->getBody()->write("
//    <html>
//        <body>
//            <div style=\"background: " . (rand(0, 1) > 0.5 ? 'blue;' : 'red;') . "\"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci asperiores at atque consequatur consequuntur dicta dolore, ea eveniet id illo labore laborum magni maxime molestias nulla sapiente similique voluptas!</div>
//            <div style=\"background: " . (rand(0, 1) > 0.5 ? 'blue;' : 'red;') . "\"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci asperiores at atque consequatur consequuntur dicta dolore, ea eveniet id illo labore laborum magni maxime molestias nulla sapiente similique voluptas!</div>
//            <div style=\"background: " . (rand(0, 1) > 0.5 ? 'blue;' : 'red;') . "\"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci asperiores at atque consequatur consequuntur dicta dolore, ea eveniet id illo labore laborum magni maxime molestias nulla sapiente similique voluptas!</div>
//            <div style=\"background: " . (rand(0, 1) > 0.5 ? 'blue;' : 'red;') . "\"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci asperiores at atque consequatur consequuntur dicta dolore, ea eveniet id illo labore laborum magni maxime molestias nulla sapiente similique voluptas!</div>
//            <div style=\"background: " . (rand(0, 1) > 0.5 ? 'blue;' : 'red;') . "\"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci asperiores at atque consequatur consequuntur dicta dolore, ea eveniet id illo labore laborum magni maxime molestias nulla sapiente similique voluptas!</div>
//            <div style=\"background: " . (rand(0, 1) > 0.5 ? 'blue;' : 'red;') . "\"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci asperiores at atque consequatur consequuntur dicta dolore, ea eveniet id illo labore laborum magni maxime molestias nulla sapiente similique voluptas!</div>
//            <div style=\"background: " . (rand(0, 1) > 0.5 ? 'blue;' : 'red;') . "\"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci asperiores at atque consequatur consequuntur dicta dolore, ea eveniet id illo labore laborum magni maxime molestias nulla sapiente similique voluptas!</div>
//            <div style=\"background: " . (rand(0, 1) > 0.5 ? 'blue;' : 'red;') . "\"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci asperiores at atque consequatur consequuntur dicta dolore, ea eveniet id illo labore laborum magni maxime molestias nulla sapiente similique voluptas!</div>
//            <div style=\"background: " . (rand(0, 1) > 0.5 ? 'blue;' : 'red;') . "\"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci asperiores at atque consequatur consequuntur dicta dolore, ea eveniet id illo labore laborum magni maxime molestias nulla sapiente similique voluptas!</div>
//            <div style=\"background: " . (rand(0, 1) > 0.5 ? 'blue;' : 'red;') . "\"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci asperiores at atque consequatur consequuntur dicta dolore, ea eveniet id illo labore laborum magni maxime molestias nulla sapiente similique voluptas!</div>
//            <div style=\"background: " . (rand(0, 1) > 0.5 ? 'blue;' : 'red;') . "\"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci asperiores at atque consequatur consequuntur dicta dolore, ea eveniet id illo labore laborum magni maxime molestias nulla sapiente similique voluptas!</div>
//            <div style=\"background: " . (rand(0, 1) > 0.5 ? 'blue;' : 'red;') . "\"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci asperiores at atque consequatur consequuntur dicta dolore, ea eveniet id illo labore laborum magni maxime molestias nulla sapiente similique voluptas!</div>
//            <div style=\"background: " . (rand(0, 1) > 0.5 ? 'blue;' : 'red;') . "\"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci asperiores at atque consequatur consequuntur dicta dolore, ea eveniet id illo labore laborum magni maxime molestias nulla sapiente similique voluptas!</div>
//            <div style=\"background: " . (rand(0, 1) > 0.5 ? 'blue;' : 'red;') . "\"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci asperiores at atque consequatur consequuntur dicta dolore, ea eveniet id illo labore laborum magni maxime molestias nulla sapiente similique voluptas!</div>
//            <div style=\"background: " . (rand(0, 1) > 0.5 ? 'blue;' : 'red;') . "\"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci asperiores at atque consequatur consequuntur dicta dolore, ea eveniet id illo labore laborum magni maxime molestias nulla sapiente similique voluptas!</div>
//            <div style=\"background: " . (rand(0, 1) > 0.5 ? 'blue;' : 'red;') . "\"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci asperiores at atque consequatur consequuntur dicta dolore, ea eveniet id illo labore laborum magni maxime molestias nulla sapiente similique voluptas!</div>
//            <div style=\"background: " . (rand(0, 1) > 0.5 ? 'blue;' : 'red;') . "\"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci asperiores at atque consequatur consequuntur dicta dolore, ea eveniet id illo labore laborum magni maxime molestias nulla sapiente similique voluptas!</div>
//            <div style=\"background: " . (rand(0, 1) > 0.5 ? 'blue;' : 'red;') . "\"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci asperiores at atque consequatur consequuntur dicta dolore, ea eveniet id illo labore laborum magni maxime molestias nulla sapiente similique voluptas!</div>
//
//        </body>
//    </html>")) {
//    send($response);
//}





