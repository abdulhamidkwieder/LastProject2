<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;

use AppBundle\Entity\Contact;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array('request' => $request));
    }


    /**
     * @Route("/contact", name="contact")
     */
    public function createAction(Request $request)
    {
        $contact = new Contact;
        $form = $this->createFormBuilder($contact)
            ->add('name', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('email', EmailType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('subject', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('message', TextareaType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('send', SubmitType::class, array('label' => 'Send', 'attr' => array('class' => 'btn btn-danger', 'style' => 'margin-bottom:15px')))
            ->getForm();

        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
                //fetching data

            $name = $form['name']->getData();
            $email = $form['email']->getData();
            $subject = $form['subject']->getData();
            $message = $form['message']->getData();

            $contact->setName($name);
            $contact->setEmail($email);
            $contact->setSubject($subject);
            $contact->setMessage($message);

            $em = $this->getDoctrine()->getManager();
            $em->persist($contact);
            $em->flush();
            
            $this->addFlash('notice', 'Successfully sent, Thank you for contacting us.');
            return $this->redirect($this->generateUrl('contact'));
        }
        return $this->render('default/contact.html.twig', array('form' => $form->createView()));
    }

}
