<?php
namespace esportify\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Compenent\HttpFoundation\Response;

class HomeController
{
   #[Route('/')]
Public function number() : Response
    {
return new Response(rand(0,100));
    }
}
