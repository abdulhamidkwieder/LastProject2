<?php
    namespace AppBundle\Controller;

    use AppBundle\Entity\Admin;
    use AppBundle\Entity\Offer;
    use AppBundle\Entity\User;
    use AppBundle\Entity\Post;
    use AppBundle\Entity\PostType;
    use AppBundle\Entity\PostTag;
    use AppBundle\Entity\Category;
    use AppBundle\Entity\Comment;
    use AppBundle\Entity\PostCategory;
    use AppBundle\Entity\PostMedia;
    use AppBundle\Entity\Tag;
    use AppBundle\Entity\UserCategory;
    use AppBundle\Entity\UserMedia;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\Form\Extension\Core\Type\TextType;
    use Symfony\Component\Form\Extension\Core\Type\IntegerType;
    use Symfony\Component\Form\Extension\Core\Type\TextareaType;
    use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
    use Symfony\Component\Form\Extension\Core\Type\DateType;
    use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
    use Symfony\Component\Form\Extension\Core\Type\SubmitType;
    use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

    class PostController extends Controller

{
    /**
    * @Route("/posts", name="post_list")
    */
    public function postAction()
    {
        $posts = $this->getDoctrine()->getRepository('AppBundle:Post')->findAll();
        return $this->render('post/index.html.twig', array('posts'=>$posts));
        
    }


    /**
    * @Route("/post/create", name="post_create")
    */
    public function createAction(Request $request){
        $post = new Post;
        $form = $this->createFormBuilder($post)
        ->add('title', TextType::class, array('attr' => array('class'=> 'form-control mb-2', 'style'=>'margin-botton:15px')))
        ->add('description', TextareaType::class, array('attr' => array('class' => 'form-control', 'style'=>'margin-bottom:15px')))
        ->add('quantity', IntegerType::class, array('attr' => array('class'=> 'form-control mb-2', 'style'=>'margin-botton:15px')))
        ->add('minPrice', IntegerType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
        ->add('maxPrice', IntegerType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
        ->add('openingDate', DateType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
        ->add('closingDate', DateType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
        ->add('resultDate', DateType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
        ->add('fkPostTypeId', ChoiceType::class, array('label' => 'Post type', 'choices'=>array('Bidding'=>'1', 'Auction '=>'2'),'attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))
        ->add('save', SubmitType::class, array('label'=> 'Create Post', 'attr' => array('class'=> 'btn btn-danger mt-3', 'style'=>'margin-botton:15px')))
        ->getForm();

        $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){
                //fetching data
                $title = $form['title']->getData();
                $description = $form['description']->getData();
                $quantity = $form['quantity']->getData();
                $minPrice = $form['minPrice']->getData();
                $maxPrice = $form['maxPrice']->getData();
                $creationDate = new \DateTime('now');
                $openingDate = $form['openingDate']->getData();
                $closingDate = $form['closingDate']->getData();
                $resultDate = $form['resultDate']->getData();
                $fkPostTypeId = $form['fkPostTypeId']->getData();
                $fkUserId = $this->get('security.token_storage')->getToken()->getUser()->getId();

                $post->setTitle($title);
                $post->setDescription($description);
                $post->setQuantity($quantity);
                $post->setMinPrice($minPrice);
                $post->setMaxPrice($maxPrice);
                $post->setCreationDate($creationDate);
                $post->setOpeningDate($openingDate);
                $post->setClosingDate($closingDate);
                $post->setResultDate($resultDate);
                $post->setStatus(1);
                $post->setFkUserId($fkUserId);
                $post->setFkPostTypeId($fkPostTypeId);

                $em = $this->getDoctrine()->getManager();
                $em->persist($post);
                $em->flush();
                    $this->addFlash('notice','Post Added!');
                return $this->redirectToRoute('post_create');
        }
        // replace this example code with whatever you need
        return $this->render('post/create.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("/post/edit/{id}", name="post_edit")
     */
    public function editAction( $id, Request $request){
    $PostFile = $this->getDoctrine()->getRepository('AppBundle:Post')->find($id);
            $PostFile->setTitle($PostFile->getTitle());
            $PostFile->setDescription($PostFile->getDescription());
            $PostFile->setQuantity($PostFile->getQuantity());
            $PostFile->setMinPrice($PostFile->getMinPrice());
            $PostFile->setMaxPrice($PostFile->getMaxPrice());
            $PostFile->setCreationDate($PostFile->getCreationDate());
            $PostFile->setOpeningDate($PostFile->getOpeningDate());
            $PostFile->setClosingDate($PostFile->getClosingDate());
            $PostFile->setResultDate($PostFile->getResultDate());
            $PostFile->setStatus($PostFile->getStatus());
            $PostFile->setFkPostTypeId($PostFile->getFkPostTypeId());
            
        $form = $this->createFormBuilder($PostFile)
        ->add('title', TextType::class, array('attr' => array('class'=> 'form-control mb-3', 'style'=>'margin-botton:15px')))
        ->add('description', TextareaType::class, array('attr' => array('class' => 'form-control', 'style'=>'min-height: 200px; margin-bottom:15px')))
        ->add('quantity', IntegerType::class, array('attr' => array('class'=> 'form-control mb-3', 'style'=>'margin-botton:15px')))
        ->add('minPrice', IntegerType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
        ->add('maxPrice', IntegerType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
        ->add('openingDate', DateType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
        ->add('closingDate', DateType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
        ->add('resultDate', DateType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
        ->add('fkPostTypeId', ChoiceType::class, array('label' => 'Post type', 'choices' => array('Bidding' => '1', 'Auction ' => '2'), 'attr' => array('class' => 'form-control', 'style' => 'margin-botton:15px')))
        ->add('save', SubmitType::class, array('label' => 'Create Post', 'attr' => array('class' => 'btn btn-danger mt-3', 'style' => 'margin-botton:15px')))
        ->getForm();

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            //fetching data
            $title = $form['title']->getData();
            $description = $form['description']->getData();
            $quantity = $form['quantity']->getData();
            $minPrice = $form['minPrice']->getData();
            $maxPrice = $form['maxPrice']->getData();
            $creationDate = $form['creation_date']->getData();
            $openingDate = $form['openingDate']->getData();
            $closingDate = $form['closingDate']->getData();
            $resultDate = $form['resultDate']->getData();
            $status = $form['status']->getData();
            $fkPostType = $form['fkPostTypeId']->getData();

            $em = $this->getDoctrine()->getManager();
            $PostFile = $em->getRepository('AppBundle:Post')->find($id);

            $PostFile->setTitle($title);
            $PostFile->setDescription($description);
            $PostFile->setQuantity($quantity);
            $PostFile->setMinPrice($minPrice);
            $PostFile->setMaxPrice($maxPrice);
            $PostFile->setCreationDate($creationDate);
            $PostFile->setOpeningDate($openingDate);
            $PostFile->setClosingDate($closingDate);
            $PostFile->setResultDate($resultDate);
            $PostFile->setStatus($status);
            $PostFile->setFkPostTypeId($fkPostType);

            $em->flush();
            $this->addFlash(
                    'notice',
                    'Post Updated'
                    );
            return $this->redirectToRoute('post_list');
        }
        return $this->render('post/edit.html.twig', array('PostFile' => $PostFile, 'form' => $form->createView()));
    }

     /**
     * @Route("/post/delete/{id}", name="post_delete")
     */
    public function deleteAction($id){
            $em = $this->getDoctrine()->getManager();
            $post = $em->getRepository('AppBundle:Post')->find($id);
            $em->remove($post);
            $em->flush();
            $this->addFlash(
                    'notice',
                    'Post Removed'
                    );
             return $this->redirectToRoute('post_list');
    }

    /**
     * @Route("/post/details/{id}", name="post_details")
     */
    public function detailsAction($id){
                $offers = new Offer;
                $post = $this->getDoctrine()->getRepository('AppBundle:Post')->find($id);
                $offers = $this->getDoctrine()->getRepository('AppBundle:Offer')->findByFkPostId($id);

        return $this->render('post/details.html.twig', array('post' => $post, 'offers' => $offers));
    }
}