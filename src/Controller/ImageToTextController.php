<?php declare(strict_types=1);

namespace DrdPlus\Ocr\Controller;

use Symfony\Component\HttpFoundation\Response;

class ImageToTextController
{
    public function imageToText(): Response
    {
        return new Response('A co jako');
    }
}
