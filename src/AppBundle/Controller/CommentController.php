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
    use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
    use Symfony\Component\Form\Extension\Core\Type\SubmitType;

    class CommentController extends Controller

{
    /**
    * @Route("/comment", name="comment_show")
    */
    public function postAction()
    {
        $comments = $this->getDoctrine()->getRepository('AppBundle:Comment')->findAll();
        // $id = $this->getRepository('AppBundle:Offer')->find($id);
        // replace this example code with whatever you need
        return $this->render('comment/index.html.twig', array('comments'=>$comments));
    }

    /**
    * @Route("/comment/create", name="comment_create")
    */
    public function createCommentAction(Request $request){
        $comment = new Comment;


        $form = $this->createFormBuilder($comment)
            ->add('repliedcommentid', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('date', DateTimeType::class, array('attr' => array('style'=>'margin-bottom:15px')))
            ->add('content', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('fkpostid', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label'=> 'Create Comment', 'attr' => array('class'=> 'btn-primary', 'style'=>'margin-bottom:15px')))
            ->getForm(); 

        $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){
                //fetching data
                $repliedcommentid = $form['repliedcommentid']->getData();
                $date = $form['date']->getData();
                $content = $form['content']->getData();
                $fkpostid = $form['fkpostid']->getData();
                
                $comment->setDate($date);
                $comment->setRepliedCommentId($repliedcommentid);
                $comment->setFkPostId($fkpostid);
                $comment->setContent($content);
                $comment->setSublevel(0);

            $em = $this->getDoctrine()->getManager();
            $em->persist($comment);
            $em->flush();
                $this->addFlash('notice','comment Added');
            return $this->redirectToRoute('comment_show');
        }
        // replace this example code with whatever you need
        return $this->render('comment/create.html.twig', array('form' => $form->createView()));
    }
    /**
    * @Route("/comment/createsubm", name="comment_createsubm")
    */
    public function createsubmCommentAction(Request $request){
        $comment = new Comment;

        $form = $this->createFormBuilder($comment)
            ->add('repliedcommentid', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('date', DateTimeType::class, array('attr' => array('style'=>'margin-bottom:15px')))
            ->add('content', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('fkpostid', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label'=> 'Create Comment', 'attr' => array('class'=> 'btn-primary', 'style'=>'margin-bottom:15px')))
            ->getForm(); 

        $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){
                //fetching data
                $repliedcommentid = $form['repliedcommentid']->getData();
                $date = $form['date']->getData();
                $content = $form['content']->getData();
                $fkpostid = $form['fkpostid']->getData();
                
                $comment->setDate($date);
                $comment->setRepliedCommentId($repliedcommentid);
                $comment->setFkPostId($fkpostid);
                $comment->setContent($content);
                $comment->setSublevel(1);

            $em = $this->getDoctrine()->getManager();
            $em->persist($comment);
            $em->flush();
                $this->addFlash('notice','comment Added');
            return $this->redirectToRoute('comment_show');
        }
        // replace this example code with whatever you need
        return $this->render('comment/create.html.twig', array('form' => $form->createView()));
    }

    /**
    * @Route("/comment/createsub", name="comment_createsub")
    */
    public function createsubCommentAction(Request $request){
        $comment = new Comment;

        $form = $this->createFormBuilder($comment)
            ->add('repliedcommentid', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('date', DateTimeType::class, array('attr' => array('style'=>'margin-bottom:15px')))
            ->add('content', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('fkpostid', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label'=> 'Create Comment', 'attr' => array('class'=> 'btn-primary', 'style'=>'margin-bottom:15px')))
            ->getForm(); 

        $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){
                //fetching data
                $repliedcommentid = $form['repliedcommentid']->getData();
                $date = $form['date']->getData();
                $content = $form['content']->getData();
                $fkpostid = $form['fkpostid']->getData();
                
                $comment->setDate($date);
                $comment->setRepliedCommentId($repliedcommentid);
                $comment->setFkPostId($fkpostid);
                $comment->setContent($content);
                $comment->setSublevel(2);

            $em = $this->getDoctrine()->getManager();
            $em->persist($comment);
            $em->flush();
                $this->addFlash('notice','comment Added');
            return $this->redirectToRoute('comment_show');
        }
        // replace this example code with whatever you need
        return $this->render('comment/create.html.twig', array('form' => $form->createView()));
    }

}