<?php
    namespace AppBundle\Controller;

    use AppBundle\Entity\Offer;

    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\Form\Extension\Core\Type\TextType;
    use Symfony\Component\Form\Extension\Core\Type\IntegerType;
    use Symfony\Component\Form\Extension\Core\Type\TextareaType;
    use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
    use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
    use Symfony\Component\Form\Extension\Core\Type\SubmitType;

    class OfferController extends Controller

{

    /**
     * @Route("/", name="offer_list")
     */
    public function listAction(){
        return $this->render('default/index.html.twig');
    }

    /**
    * @Route("/offer", name="offer_show")
    */
    public function showOfferAction()
    {
        $offers = $this->getDoctrine()->getRepository('AppBundle:Offer')->findAll();
        return $this->render('offer/index.html.twig', array('offers'=>$offers));
    }

    /**
    * @Route("/offer/create", name="offer_create")
    */
    public function createOfferAction(Request $request){
        $offer = new Offer;
        $form = $this->createFormBuilder($offer)
            ->add('description', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('quantity', IntegerType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('price', IntegerType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label'=> 'Create Offer', 'attr' => array('class'=> 'btn btn-danger', 'style'=>'margin-bottom:15px')))
            ->getForm(); 

        $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){
                //fetching data
                $description = $form['description']->getData();
                $quantity = $form['quantity']->getData();
                $price = $form['price']->getData();
                $fkUserId = $form['fk_user_id']->getData();
                $fkPostId = $form['fk_post_id']->getData();

                $offer->setDescription($description);
                $offer->setQuantity($quantity);
                $offer->setPrice($price);
                $offer->setFkUserId($fkUserId);
                $offer->setFkPostId($fkPostId);

            $em = $this->getDoctrine()->getManager();
            $em->persist($offer);
            $em->flush();
                $this->addFlash('notice','Offer Added');
            return $this->redirectToRoute('offer_list');
        }
        return $this->render('offer/create.html.twig', array('form' => $form->createView()));
    }
    
    
    /**
     * @Route("/offer/edit/{id}", name="Offer_edit")
     */
    public function editOfferAction( $id, Request $request){

        $offer = $this->getDoctrine()->getRepository('AppBundle:Offer')->find($id);
        $offer->setDescription($offer->getDescription());
        $offer->setQuantity($offer->getQuantity());
        $offer->setPrice($offer->getPrice());

        $form = $this->createFormBuilder($offer)
            ->add('description', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('quantity', IntegerType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('price', IntegerType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label'=> 'Save', 'attr' => array('class'=> 'btn-danger btn', 'style'=>'margin-bottom:15px')))
            ->getForm(); 

        $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){
                //fetching data
                $description = $form['description']->getData();
                $quantity = $form['quantity']->getData();
                $price = $form['price']->getData();
                $em = $this->getDoctrine()->getManager();

                $offer = $em->getRepository('AppBundle:Offer')->find($id);
                $offer->setDescription($description);
                $offer->setQuantity($quantity);
                $offer->setPrice($price);

                $em->flush();
                        $this->addFlash('notice','Offer Updated');
                return $this->redirectToRoute('offer_list');
            }
        return $this->render('offer/edit.html.twig', array('offer' => $offer, 'form' => $form->createView()));
    }
    
    /**
     * @Route("/offer/details/{id}", name="offer_details")
     */
    public function detailsOfferAction($id){
        $offer = $this->getDoctrine()->getRepository('AppBundle:Offer')->find($id);
        return $this->render('offer/details.html.twig', array('offer' => $offer));
    }

    /**
     * @Route("/offer/delete/{id}", name="offer_delete")
     */
    public function deleteAction($id){
        $em = $this->getDoctrine()->getManager();
        $offer = $em->getRepository('AppBundle:Offer')->find($id);
        $em->remove($offer);
         $em->flush();
    $this->addFlash(
            'notice',
        'Offer Removed'
        );
    return $this->redirectToRoute('offer_list');
    }
    
    // /**
    //  * @Route("/search", name="post_search")
    //  * @Method("GET")
    //  *
    //  * @return Response|JsonResponse
    //  */
    // public function searchAction(Request $request)
    // {
    //     if (!$request->isXmlHttpRequest()) {
    //         return $this->render('offer/search.html.twig');
    //     }

    //     $query = $request->query->get('q', '');
    //     $posts = $this->getDoctrine()->getRepository(Offer::class)->findBySearchQuery($query);

    //     $results = [];
    //     foreach ($offers as $offer) {
    //         $results[] = [
    //             'title' => htmlspecialchars($offer->getTitle()),
    //             'url' => htmlspecialchars($offer->getUrl()),
    //             'summary' => htmlspecialchars($offer->getSummary()),
    //             'url' => $this->generateUrl('offer_post', ['slug' => $offer->getSlug()]),
    //         ];
    //     }

    //     return $this->json($results);
    // }
}
