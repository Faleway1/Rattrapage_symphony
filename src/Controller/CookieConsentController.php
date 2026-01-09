<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CookieConsentController extends AbstractController
{
    #[Route('/cookie/consent', name: 'app_cookie_consent', methods: ['GET'])]
    public function consent(Request $request): RedirectResponse
    {
        $response = $this->redirect($request->headers->get('referer') ?: '/');

        $cookie = Cookie::create('cookie_consent')
            ->withValue('true')
            ->withExpires(strtotime('+1 year'))
            ->withPath('/')
            ->withSecure($request->isSecure())
            ->withHttpOnly(false)
            ->withSameSite('Lax');

        $response->headers->setCookie($cookie);

        return $response;
    }
}
