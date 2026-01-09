<?php

namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Twig\Environment;

class ErrorPageSubscriber implements EventSubscriberInterface
{
    public function __construct(private Environment $twig) {}

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::EXCEPTION => 'onKernelException',
        ];
    }

    public function onKernelException(ExceptionEvent $event): void
    {
        $e = $event->getThrowable();

        if ($e instanceof NotFoundHttpException) {
            $event->setResponse(new Response($this->twig->render('Exceptions/error404.html.twig'), 404));
            return;
        }

        if ($e instanceof MethodNotAllowedHttpException) {
            $event->setResponse(new Response($this->twig->render('Exceptions/error405.html.twig'), 405));
            return;
        }

        if ($e instanceof AccessDeniedHttpException) {
            $event->setResponse(new Response($this->twig->render('Exceptions/error403.html.twig'), 403));
            return;
        }
    }
}
