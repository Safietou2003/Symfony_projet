<?php

namespace App\Controller;

use App\Entity\Cours;
use App\Entity\Niveau;
use App\Form\CoursType;
use App\Repository\CoursRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    #[Route('/admin/cours/new', name: 'admin_cours_new')]
    public function newCours(Request $request, CoursRepository $coursRepository): Response
    {
        $cours = new Cours();
        $form = $this->createForm(CoursType::class, $cours);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $coursRepository->save($cours, true);
            return $this->redirectToRoute('create');
        }

        return $this->render('admin/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/admin/cours', name: 'afficher')]
    public function listCours(CoursRepository $coursRepository): Response
    {
        $cours = $coursRepository->findAll();
        return $this->render('admin/afficher.html.twig', [
            'cours' => $cours,
        ]);
    }

    #[Route('/admin/niveau/new', name: 'niveau')]
    public function newNiveau(Request $request, NiveauRepository $niveauRepository): Response
    {
        $niveau = new Niveau();
        $form = $this->createForm(NiveauType::class, $niveau);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $niveauRepository->save($niveau, true);
            return $this->redirectToRoute('niveau');
        }