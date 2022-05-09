<?php

namespace App\Controller;

use Dompdf\Dompdf;
use Dompdf\Options;
use App\Entity\Book;
use App\Entity\User;
use App\Entity\Room;
use App\Form\BookType;
use App\Form\RoomType;
use App\Repository\BookRepository;
use App\Repository\RoomRepository;
use Doctrine\ORM\EntityManagerInterface;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use SebastianBergmann\Environment\Console;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Response;

// Include PhpSpreadsheet required namespaces
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
 
/** 
 * @Route("/book")
 */
class BookController extends AbstractController
{
    /**
     * @Route("/", name="app_book_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    { 
       $books = $entityManager
            ->getRepository(Book::class)
            ->findAll();
           // dd($books);
        return $this->render('frontOffice/book/index.html.twig', [
            'books' => $books,
        ]); 
       
    }

    /**
     * @Route("/new/{idRoom}", name="app_book_new", methods={"GET", "POST"})
     */
    public function new( Request $request,BookRepository $bookRepository, EntityManagerInterface $entityManager ,$idRoom): Response
    {
    $bookList = $entityManager->getRepository(Book::class)->findBy(['idRoom'=>$idRoom]);

        $book = new Book();
        $form = $this->createForm(BookType::class, $book);
        $form->handleRequest($request);
        // $user = $em->getRepository(User::class)->find(90);
        $user = $this->getUser()->getId();
        $user1= $entityManager->getRepository(User::class)->find($user);

        $room = $entityManager->getRepository(Room::class)->findOneBy(['idRoom'=>$idRoom]);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($bookList == null) {
                $book->setIduser($user1);

                //$rent->setIduser($user);
                //dd($room);
                $book->setIdRoom($room);
                
                $bookRepository->add($book);
                return $this->redirectToRoute('app_book_new', ['idRoom' => $idRoom, 'bookList' => $bookList]);
            } else {
                for ($i = 0; $i < count($bookList); $i++) {
                    if ($form->get('startdate')->getData() == $bookList[$i]->getStartdate() && $form->get('startdate')->getData() < $bookList[$i]->getEnddate()) {
                        $this->addFlash('danger', 'Room is already booked at this date');
                        return $this->redirectToRoute('app_book_new', [ 'idRoom' => $idRoom, 'bookList' => $bookList]);
                    } elseif ($form->get('startdate')->getData() == $bookList[$i]->getStartdate() && $form->get('startdate')->getData() == $bookList[$i]->getEnddate()) {
                        $this->addFlash('danger', 'Room is already booked at this date');
                        return $this->redirectToRoute('app_book_new', ['idRoom' => $idRoom, 'bookList' => $bookList]);
                    } elseif ($form->get('enddate')->getData() == $bookList[$i]->getEnddate() && $form->get('startdate')->getData() > $bookList[$i]->getStartdate()) {
                        $this->addFlash('danger', 'Room is already booked at this date');
                        return $this->redirectToRoute('app_book_new', ['idRoom' => $idRoom, 'bookList' => $bookList]);
                    } elseif ($form->get('startdate')->getData() == $bookList[$i]->getStartdate() && $form->get('startdate')->getData() > $bookList[$i]->getEnddate()) {
                        $this->addFlash('danger', 'Room is already booked at this date');
                        return $this->redirectToRoute('app_book_new', ['idRoom' => $idRoom, 'bookList' => $bookList]);
                    } elseif ($form->get('enddate')->getData() == $bookList[$i]->getEnddate() && $form->get('enddate')->getData() < $bookList[$i]->getStartdate()) {
                        $this->addFlash('danger', 'Room is already booked  at this date');
                        return $this->redirectToRoute('app_book_new', ['idRoom' => $idRoom, 'bookList' => $bookList]);
                    } elseif ($form->get('startdate')->getData() < $bookList[$i]->getStartdate() && $form->get('enddate')->getData() > $bookList[$i]->getEnddate()) {
                        $this->addFlash('danger', 'Room is already booked at this date');
                        return $this->redirectToRoute('app_book_new', ['idRoom' => $idRoom, 'bookList' => $bookList]);
                    } elseif ($form->get('startdate')->getData() < $bookList[$i]->getStartdate() && $form->get('startdate')->getData() > $bookList[$i]->getEnddate()) {
                        $this->addFlash('danger', 'Room is already booked at this date');
                        return $this->redirectToRoute('app_book_new', ['idRoom' => $idRoom, 'bookList' => $bookList]);
                    } elseif ($form->get('enddate')->getData() < $bookList[$i]->getEnddate() && $form->get('enddate')->getData() > $bookList[$i]->getStartdate()) {
                        $this->addFlash('danger', 'Room is already booked  at this date');
                        return $this->redirectToRoute('app_book_new', ['idRoom' => $idRoom, 'bookList' => $bookList]);
                    } elseif ($form->get('startdate')->getData() < $bookList[$i]->getStartdate() && $form->get('enddate')->getData() < $bookList[$i]->getEnddate()) {
                        $this->addFlash('danger', 'Room is already booked  at this date');
                        return $this->redirectToRoute('app_book_new', ['idRoom' => $idRoom, 'bookList' => $bookList]);
                    } else {
                        $book->setIduser($user1);

                        //$rent->setIduser($user);
                        $book->setIdRoom($room);
                        // $rent->setIdagency($agency);
                        
                        $bookRepository->add($book);
                        return $this->redirectToRoute('app_book_new', ['idRoom' => $idRoom, 'bookList' => $bookList]);
                    }
                }
            }
        }
        return $this->render('Frontoffice/book/new.html.twig', [
            'book' => $book,
            'form' => $form->createView(),
            'bookList'=>$bookList
        ]);
    }
    

            
    /**
     * @Route("/{idbook}", name="app_book_show", methods={"GET"})
     */
    public function show(Book $book): Response
    {
        return $this->render('frontOffice/book/show.html.twig', [
            'book' => $book,
        ]);
    }

    /**
     * @Route("/{idbook}/edit", name="app_book_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Book $book, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(BookType::class, $book);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_book_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('frontOffice/book/edit.html.twig', [
            'book' => $book,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idbook}", name="app_book_delete", methods={"POST"})
     */
    public function delete(Request $request, Book $book, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$book->getIdbook(), $request->request->get('_token'))) {
            $entityManager->remove($book);
            $entityManager->flush();
            $this->addFlash(
                'danger',
                'Deleted Successfully!'
            );
        }

        return $this->redirectToRoute('app_book_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
      * @Route("/{idbook}/list", name="book_list", methods={"GET"})
     */
    public function list(Book $book, RoomRepository $roomRepository): Response
    {
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        
        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        $png = file_get_contents("logo2.png");
        $png2 = file_get_contents("logo2.png");
        $pngbase64 = base64_encode($png);
        $pngbase643 = base64_encode($png2);
 
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('frontOffice/book/liste.html.twig', [
            'book' => $book,
            "img64"=>$pngbase64,
            "img643"=>$pngbase643,
            'rooms' => $roomRepository->findAll(),
        ]);
        
        // Load HTML to Dompdf
        $dompdf->loadHtml($html);
        
        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("invoice.pdf", [
            "Attachment" => true
        ]);
    }
/**
      * @Route("/", name="excel", methods={"GET"})
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
        return $this->file($temp_file, $fileName,
        ResponseHeaderBag::DISPOSITION_INLINE);
    }
}



