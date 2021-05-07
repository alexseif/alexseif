<?php

namespace AppBundle\Controller;

use AppBundle\Model\Package;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class PackageController
 * @package AppBundle\Controller
 * @Route("/packages", name="package_")
 */
class PackageController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        $packages = [
            new Package("STORMTROPER <br>HELMET", "https://res.cloudinary.com/muhammederdem/image/upload/v1536405217/starwars/item-1.png", 1299.99, "https://res.cloudinary.com/muhammederdem/image/upload/v1536405223/starwars/item-4-bg.jpg"),
            new Package("IMPERIAL ARMY’S <br> TIE FIGHTER", "https://res.cloudinary.com/muhammederdem/image/upload/v1536405217/starwars/item-2.png", 9999.99, "https://res.cloudinary.com/muhammederdem/image/upload/v1536405222/starwars/item-1-bg.jpg"),
            new Package("KYLO REN'S <br> LIGHTSABER", "https://res.cloudinary.com/muhammederdem/image/upload/v1536405218/starwars/item-3.png", 1699.99, "https://res.cloudinary.com/muhammederdem/image/upload/v1536405222/starwars/item-2-bg.jpg"),
            new Package("IMPERIAL ARMY'S <br>
                                    DEATH STAR", "https://res.cloudinary.com/muhammederdem/image/upload/v1536405215/starwars/item-4.png", 9999.99, "https://res.cloudinary.com/muhammederdem/image/upload/v1536405222/starwars/item-3-bg.jpg")
        ];

        return $this->render('package/index.html.twig', [
            'packages' => $packages,
        ]);
    }
}
