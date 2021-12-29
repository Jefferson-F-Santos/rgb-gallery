<?php

namespace Src\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Src\Models\Image;

class ImageController {
    // public function getImages(Request $request, Response $response, array $args): Response {
    //     $images = Image::all();
    //     $response->getBody()->write(json_encode($images));

    //     return $response
    //         ->withHeader('Content-Type', 'application/json')
    //         ->withStatus(200);
    // }

    public function getImages(Request $request, Response $response, array $args): Response {
        $images = Image::all();
        $response->getBody()->write(json_encode($images));

        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(200);
    }
}