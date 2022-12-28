<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class GetAvatarController extends AbstractController
{
    public function __invoke(User $data): Response
    {
        return new Response(
            $data->getAvatar(),
            Response::HTTP_OK,
            ['content-type' => 'image/png']
        );
    }
}
