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


    public function listAction(){
      $offers = $this->getDoctrine()->getRepository('AppBundle:Offer')->findAll();
      return $this->render('offer/list.html.twig', array('offers'=>$offers));
    }


    public function showAction()
    {
      $offer = $this->getDoctrine()->getRepository('AppBundle:Offer')->find($id);
      return $this->render('offer/details.html.twig', array('offer' => $offer));
    }


    public function createAction($postId, Request $request){
      $user= $this->getUser();
        $offer = new Offer;
        $form = $this->createFormBuilder($offer)
            ->add('description', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('quantity', IntegerType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('price', IntegerType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label'=> 'Create Offer', 'attr' => array('class'=> 'btn btn-danger', 'style'=>'margin-bottom:15px')))
            ->getForm();

        $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){

              $offer->setFkUserId($user->getId());
              $offer->setFkPostId((int)$postId);

            $em = $this->getDoctrine()->getManager();
            $em->persist($offer);
            $em->flush();
                $this->addFlash('notice','Offer Added');
            return $this->redirectToRoute('offer_list');
        }
        return $this->render('offer/create.html.twig', array('form' => $form->createView()));
    }



    public function editAction( $id, Request $request){

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



    public function deleteAction($id){
        $user= $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $offer = $em->getRepository('AppBundle:Offer')->find($id);
        if($offer == NULL){
         throw $this->createNotFoundException('The offer does not exist');
        }
        if($offer->getFkUserId() != $user->getId()){
          $this->denyAccessUnlessGranted(new Expression('You arenot Offer Owner'));
        }
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
