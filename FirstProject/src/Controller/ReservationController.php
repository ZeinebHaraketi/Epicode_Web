<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Reservation;
use App\Form\ReservationType;

class ReservationController extends AbstractController
{
    /**
     * @Route("/reservation", name="app_reservation")
     */
    public function index(): Response
    {
        return $this->render('reservation/index.html.twig', [
            'controller_name' => 'ReservationController',
        ]);
    }


/**
 * @Route("event/calendar", name="calendar")
 */
public function calendar(): Response
{
    // $event = $calendar->findAll();
    $event = $this->getDoctrine()->getRepository(Reservation::class)->findAll();
    $rdvs = [];
    $allDay = true;
    foreach ($event as $event) {
        $rdvs[] = [
            'id' => $event->getId(),
            'start' => $event->getDateR()->format('Y-m-d H:i:s'),
            'end' => $event->getDateFin()->format('Y-m-d H:i:s'),
            
            'title' => $event->getReservationCours()->getNomC(),
            'description' => $event->getReservationCoach()->getNomCoach(),
            'backgroundColor' => "#000000",
            'borderColor' => "#000000",
            'textColor' => "#ffffff",
            
        ];
    }
    $data = json_encode($rdvs);
    return $this->render('reservation/test.html.twig', compact('data'));
    /*  return $this->render('base_back/voyage/calendar.html.twig', [
            'controller_name' => 'VoyageController',
        ]);
    */
}
}
