<?php

namespace App\Controller;

use Dompdf\Dompdf;
use Dompdf\Options;
use App\Entity\Book;
use App\Entity\Room;
use App\Form\BookType;
use App\Form\RoomType;
use App\Repository\RoomRepository;
use Doctrine\ORM\EntityManagerInterface;
use SebastianBergmann\Environment\Console;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\ResponseHeaderBag;

// Include PhpSpreadsheet required namespaces
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
 
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
        return $this->render('book/index.html.twig', [
            'books' => $books,
        ]); 
       
    }

    /**
     * @Route("/new/{idroom}", name="app_book_new", methods={"GET", "POST"})
     */
    public function new( Request $request,RoomRepository $RoomRepository, EntityManagerInterface $entityManager ,$idroom): Response
    {
        $bookList = $entityManager->getRepository(Book::class)->findBy(['idroom'=>$idroom]);
        $book = new Book();
        // $book->idRoom = 44;
        //dd($book);
        $form = $this->createForm(BookType::class, $book);
        $form->handleRequest($request);
        // $user = $entityManager->getRepository(User::class)->find(90);
        $room = $entityManager->getRepository(Room::class)->find($idroom);

        if ($form->isSubmitted() && $form->isValid()) {
              foreach ($bookList as $books) {
                if ($books->getStartdate() <= $book->getStartdate() && $book->getStartdate() <= $books->getEnddate()) {
                    $this->addFlash('danger', 'Sorry , Room already Booked !');
                    return $this->redirectToRoute('app_book_new', ['idroom'=>$idroom ,'bookList'=>$bookList]);
                
             } elseif ($books->getStartdate() <= $book->getEnddate() && $book->getEnddate() <= $books->getEnddate()) {
                            $this->addFlash('danger', 'condit2');
                            return $this->redirectToRoute('app_book_new', ['idroom'=>$idroom, 'bookList'=>$bookList]);
                    } elseif ($books->getStartdate() <= $book->getStartdate() && $book->getEnddate() <= $books->getEnddate()) {
                            $this->addFlash('danger', 'Sorry , Room already Booked !');
                            return $this->redirectToRoute('app_book_new', ['idroom'=>$idroom, 'bookList'=>$bookList]);
                        } elseif ($books->getStartdate() <= $book->getStartdate() && $book->getStartdate() <= $books->getEnddate()) {
                            $this->addFlash('danger', 'Sorry , Room already Booked !');
                            return $this->redirectToRoute('app_book_new', ['idroom'=>$idroom, 'bookList'=>$bookList]);
                    //$book->setIdRoom($book->getIdroom());
                   //$book->setIdRoom($test);
                   } else {
                       $book->setIdroom($room);
                       $entityManager->persist($book);
                       $entityManager->flush();
                       return $this->redirectToRoute('app_book_index', ['idroom'=>$idroom , 'bookList'=>$bookList]);
                        }
                       } 
                   
            }
            //dd($book);
            return $this->render('book/new.html.twig', [
            'book' => $book,
            'room' =>$room,
            'form' => $form->createView(),
            'bookList'=>$bookList,
        ]);
    }
    /**
     * @Route("/{idbook}", name="app_book_show", methods={"GET"})
     */
    public function show(Book $book): Response
    {
        return $this->render('book/show.html.twig', [
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

        return $this->render('book/edit.html.twig', [
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
        $html = $this->renderView('book/liste.html.twig', [
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



