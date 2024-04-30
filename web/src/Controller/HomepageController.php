<?php

namespace App\Controller;

use App\Entity\Address;
use App\Entity\Cities;
use App\Entity\Users;
use App\Form\AddressFormType;
use App\Model\Strings;
use App\Repository\AddressRepository;
use App\Repository\CitiesRepository;
use App\Repository\UsersRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\MakerBundle\Str;
use Symfony\Component\Asset\UrlPackage;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HomepageController extends BaseController
{

    /**
     * @return Response
     */
    #[Route('/', name: 'homepage_default')]
    public function default(): Response
    {

        // preda data do sablony
        dump(Strings::addslashes("Test"));
        dump(Strings::chr(2));
        dump(Strings::explode(" ", "T E S T"));
        dump(Strings::implode(" ", array("T", "E", "S", "T")));
        dump(Strings::join(" ", array("T", "E", "S", "T")));
        dump(Strings::md5("aaaa"));
        dump(Strings::ord("Abc"));
        dump(Strings::strchr("A", "A"));
        dump(Strings::strlen("ABCD"));
        dump(Strings::strpos("Abc", "A"));
        dump(Strings::strrchr("Abc", "A"));
        dump(Strings::strrev("Abc"));
        dump(Strings::strstr("ABC", "ABC"));
        dump(Strings::strtolower("abc"));
        dump(Strings::strtoupper("abc"));
        dump(Strings::substr_replace("abc", "b", 0));
        dump(Strings::substr("Da", 1, 2));
        dump(Strings::ucfirst("Abc"));
        print_r(Strings::ucwords("ABADaaaaa"));
        return $this->render("Homepage/default.html.twig");
    }
}