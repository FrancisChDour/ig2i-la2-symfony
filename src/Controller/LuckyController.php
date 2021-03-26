<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Exception;
use Symfony\Component\HttpFoundation\Request;;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController
{
    /**
     * @Route("/lucky_number", name="app_lucky_number")
     * @param Request $request
     * @return Response
     * @throws Exception
     */
    public function number(Request $request): Response
    {
        $number = random_int(0, 100);

        $user = [
            'name' => 'John Doe',
            'place' => 'Lens',
        ];

        $name = $request->query->get('name');
        $name != null ? $name = '<p>Name : ' . $name . '<p>' : null;

        dump($user);

        return new Response(
            "<html><body><p>Lucky number: $number</p>$name</body></html>"
        );
    }
}