<?php

namespace App\Controller;

use App\Entity\Hotelchain;
use App\Form\HotelchainType;
use Doctrine\ORM\EntityManagerInterface;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;


/**
 * @Route("/hotelchain")
 */
class HotelchainController extends AbstractController
{
    /**
     * @Route("/", name="app_hotelchain_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $hotelchains = $entityManager
            ->getRepository(Hotelchain::class)
            ->findAll();

        return $this->render('hotelchain/index.html.twig', [
            'hotelchains' => $hotelchains,
        ]);
    }

    /**
     * @Route("/new", name="app_hotelchain_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $hotelchain = new Hotelchain();
        $form = $this->createForm(HotelchainType::class, $hotelchain);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($hotelchain);
            $entityManager->flush();
            $this->addFlash(
                'success',
                'Added Successfully!'
            );
            return $this->redirectToRoute('app_hotelchain_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('hotelchain/new.html.twig', [
            'hotelchain' => $hotelchain,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idHotelchain}", name="app_hotelchain_show", methods={"GET"})
     */
    public function show(Hotelchain $hotelchain): Response
    {
        return $this->render('hotelchain/show.html.twig', [
            'hotelchain' => $hotelchain,
        ]);
    }

    /**
     * @Route("/{idHotelchain}/edit", name="app_hotelchain_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Hotelchain $hotelchain, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(HotelchainType::class, $hotelchain);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash(
                'info',
                'Edited Successfully!'
            );

            return $this->redirectToRoute('app_hotelchain_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('hotelchain/edit.html.twig', [
            'hotelchain' => $hotelchain,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idHotelchain}", name="app_hotelchain_delete", methods={"GET","POST"})
     */
    public function delete($idHotelchain, Request $request, Hotelchain $hotelchain, EntityManagerInterface $entityManager): Response
    {
        $hotelchain = $entityManager->getRepository(Hotelchain::class)->find($idHotelchain);
            $entityManager->remove($hotelchain);
            $entityManager->flush();
        
            $this->addFlash(
                'danger',
                'Deleted Successfully!'
            );
        return $this->redirectToRoute('app_hotelchain_index');
    }



/**
      * @Route("/", name="excel", methods={"GET", "POST"})
     */
    public function Exceldownload()
    {
        $spreadsheet = new Spreadsheet();
        
        /* @var $sheet \PhpOffice\PhpSpreadsheet\Writer\Xlsx\Worksheet */
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'Hello World !');
        $sheet->setTitle("My First Worksheet");
        
        // Create your Office 2007 Excel (XLSX Format)
        $writer = new Xlsx($spreadsheet);
        
        // Create a Temporary file in the system
        $fileName = 'my_first_excel_symfony4.xlsx';
        $temp_file = tempnam(sys_get_temp_dir(), $fileName);
        
        // Create the excel file in the tmp directory of the system
        $writer->save($temp_file);

        // Return the excel file as an attachment
        return $this->file($temp_file, $fileName, ResponseHeaderBag::DISPOSITION_INLINE); }
    
}
