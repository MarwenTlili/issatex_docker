<?php

namespace App\Controller;

use App\Entity\Taille;
use App\Form\TailleType;
use App\Repository\TailleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/taille")
 */
class TailleController extends AbstractController
{
    /**
     * @Route("/", name="taille_index", methods={"GET"})
     */
    public function index(TailleRepository $tailleRepository): Response
    {
        return $this->render('taille/index.html.twig', [
            'tailles' => $tailleRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="taille_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $taille = new Taille();
        $form = $this->createForm(TailleType::class, $taille);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($taille);
            $entityManager->flush();

            return $this->redirectToRoute('taille_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('taille/new.html.twig', [
            'taille' => $taille,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="taille_show", methods={"GET"})
     */
    public function show(Taille $taille): Response
    {
        return $this->render('taille/show.html.twig', [
            'taille' => $taille,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="taille_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Taille $taille, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(TailleType::class, $taille);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('taille_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('taille/edit.html.twig', [
            'taille' => $taille,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="taille_delete", methods={"POST"})
     */
    public function delete(Request $request, Taille $taille, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$taille->getId(), $request->request->get('_token'))) {
            $entityManager->remove($taille);
            $entityManager->flush();
        }

        return $this->redirectToRoute('taille_index', [], Response::HTTP_SEE_OTHER);
    }
}
