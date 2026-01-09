<?php

namespace App\Controller;

use App\Entity\Cover;
use App\Form\CoverType;
use App\Repository\CoverRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/cover')]
class CoverController extends AbstractController
{
    #[Route('/', name: 'app_cover_index', methods: ['GET'])]
    public function index(CoverRepository $coverRepository): Response
    {
        return $this->render('cover/index.html.twig', [
            'covers' => $coverRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_cover_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $cover = new Cover();
        $form = $this->createForm(CoverType::class, $cover);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($cover);
            $entityManager->flush();

            return $this->redirectToRoute('app_cover_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('cover/new.html.twig', [
            'cover' => $cover,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_cover_show', methods: ['GET'])]
    public function show(Cover $cover): Response
    {
        return $this->render('cover/show.html.twig', [
            'cover' => $cover,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_cover_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Cover $cover, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CoverType::class, $cover);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_cover_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('cover/edit.html.twig', [
            'cover' => $cover,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_cover_delete', methods: ['POST'])]
    public function delete(Request $request, Cover $cover, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$cover->getId(), $request->request->get('_token'))) {
            $entityManager->remove($cover);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_cover_index', [], Response::HTTP_SEE_OTHER);
    }
}
