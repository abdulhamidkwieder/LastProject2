<?php
  namespace AppBundle\Controller;

  use AppBundle\Form\UserType;
  use AppBundle\Entity\User;
  use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
  use Symfony\Bundle\FrameworkBundle\Controller\Controller;
  use Symfony\Component\HttpFoundation\Request;
  use Symfony\Component\Routing\Annotation\Route;
  use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

  class SecurityController extends Controller
  {
    public function loginAction(Request $request, AuthenticationUtils $authenticationUtils)
    {
    $error = $authenticationUtils->getLastAuthenticationError();
    $lastUsername = $authenticationUtils->getLastUsername();

      return $this->render('user/login.html.twig', array(
          'last_username' => $lastUsername,
          'error'         => $error,
    ));
  }


public function registerAction(Request $request, UserPasswordEncoderInterface $passwordEncoder)
{
    // 1) build the form
    $user = new User();
    $user->setAvatar('/');
    $user->setRole('ROLE_USER');
    $user->setBlocked(0);
    $form = $this->createForm(UserType::class, $user);

    // 2) handle the submit (will only happen on POST)
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {

        // 3) Encode the password (you could also do this via Doctrine listener)
        $password = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
        $user->setPassword($password);

        // 4) save the User!
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($user);
        $entityManager->flush();

        // ... do any other work - like sending them an email, etc
        // maybe set a "flash" success message for the user

            $this->addFlash('notice', 'Successfully registered!');
            return $this->redirect($this->generateUrl('register'));
    }

    return $this->render(
        'user/register.html.twig',
        array('form' => $form->createView())
    );
  }


}
?>
