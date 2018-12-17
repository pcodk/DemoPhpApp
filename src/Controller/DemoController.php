<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DemoController
{

    /**
     * @Route("/")
     */
    public function home()
    {
        $hostname = $_SERVER['HTTP_HOST'];

        return new Response(
            $hostname = '
<html><body>This is a very simple Demo App running on hostname: ' . $hostname . '
</body></html>'
        );
    }
}