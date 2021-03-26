<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Tournoi;
use App\Entity\Tableau;
use App\Form\TournoiType;
use App\Entity\Jours;
use App\Entity\Desinscription;
use App\Entity\Paiement;
use App\Entity\PrixTableauTournoi;
use App\Repository\JoueurRepository;
use DateInterval;
use App\Repository\TournoiRepository;
use App\Repository\PaiementRepository;
use App\Repository\PaiementStatutRepository;
use App\Repository\JoursRepository;
use App\Repository\TableauRepository;
use App\Repository\PrixTableauTournoiRepository;
use App\Repository\InscriptionRepository;
use App\Repository\DossardRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpFoundation\Response;
use App\Form\NouveauPaiementType;
use App\Form\ParametresTournoiType;


class DefaultController extends AbstractController {

    /**
     * @Route("/", name="index")
     */
    public function index() {
        return $this->render('default/index.html.twig', []);
    }


}
