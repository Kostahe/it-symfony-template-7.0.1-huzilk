<?php

namespace App\Controller;

use App\Model\Strings;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HuzilController extends BaseController
{

    /**
     * @return Response
     */
    #[Route('/huzil', name: 'default')]
    public function default(): Response
    {
        $title = "Homepage default";
        return $this->render("Huzil/default.html.twig", ["title" => $title]);
    }

    /**
     * @return Response
     */
    #[Route('/huzil/detail', name: 'detail')]
    public function detail(): Response
    {
        $title = "Homepage detail";
        return $this->render("Huzil/detail.html.twig", ["title" => $title]);
    }

    /**
     * @return Response
     */
    #[Route('/huzil/delete', name: 'delete')]
    public function delete(): Response
    {
        $title = "Homepage delete";
        return $this->render("Huzil/delete.html.twig", ["title" => $title]);
    }

    /**
     * @return Response
     */
    #[Route('/huzil/edit', name: 'edit')]
    public function edit(): Response
    {
        $title = "Homepage edit";
        return $this->render("Huzil/edit.html.twig", ["title" => $title]);
    }
}