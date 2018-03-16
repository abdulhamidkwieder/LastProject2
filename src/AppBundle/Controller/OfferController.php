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
    use Symfony\Component\Security\Core\Exception\AccessDeniedException;
    use Symfony\Component\ExpressionLanguage\Expression;

    class OfferController extends Controller

{

    /**
     * @Route("/offers", name="offers")
     */
    public function listAction(){
      $offers = $this->getDoctrine()->getRepository('AppBundle:Offer')->findAll();
      return $this->render('offer/index.html.twig', array('offers'=>$offers));
    }

    /**
     * @Route("/offer/details/{id}", name="details_offer")
     */
    public function showAction($id)
    {
      $offer = $this->getDoctrine()->getRepository('AppBundle:Offer')->find($id);
      return $this->render('offer/details.html.twig', array('offer' => $offer));
    }

    /**
     * @Route("/offer/create/{postId}", name="create_offer")
     */
    public function createAction($postId, Request $request){
        
        $offer = new Offer;
        $form = $this->createFormBuilder($offer)
            ->add('description', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('quantity', IntegerType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('price', IntegerType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label'=> 'Create', 'attr' => array('class'=> 'btn btn-danger', 'style'=>'margin-bottom:15px')))
            ->getForm();

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $description = $form['description']->getData();
            $quantity = $form['quantity']->getData();
            $price = $form['price']->getData();
            $fkUserId = $this->get('security.token_storage')->getToken()->getUser()->getId();

            $offer->setDescription($description);
            $offer->setQuantity($quantity);
            $offer->setPrice($price);
            $offer->setFkPostId($postId);
            $offer->setFkUserId($fkUserId);

            $em = $this->getDoctrine()->getManager();
            $em->persist($offer);
            $em->flush();
                $this->addFlash('notice','Offer is successfully created!');
            return $this->redirectToRoute('post_details', array('id' => $postId));
        }
        return $this->render('offer/create.html.twig', array('form' => $form->createView()));
    }


    /**
     * @Route("/offer/edit/{id}", name="edit_offer")
     */
    public function editAction( $id, Request $request){

        $offer = $this->getDoctrine()->getRepository('AppBundle:Offer')->find($id);
        $this->checkIfAllowed($offer);
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


    public function checkIfAllowed($offer){
      $user= $this->getUser();
      if($offer == NULL){
       throw $this->createNotFoundException('The offer does not exist');
      }
      if($offer->getFkUserId() != $user->getId()){
        throw $this->createAccessDeniedException(new Expression('You arenot Offer Owner'));
      }
    }


    public function deleteAction($id){
        $em = $this->getDoctrine()->getManager();
        $offer = $em->getRepository('AppBundle:Offer')->find($id);
        $this->checkIfAllowed($offer);
        $em->remove($offer);
        $em->flush();
        $this->addFlash(
            'notice',
            'Offer Removed!'
        );
    return $this->redirectToRoute('offer_list');
    }

    
}
