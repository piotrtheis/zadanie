<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Comment;
use AppBundle\Entity\User;
use AppBundle\Form\CommentType;
use AppBundle\Repository\CommentRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            /** @var Comment $comment */
            $comment = $form->getData();
            $comment->setUser($this->getUser());

            /** @var CommentRepository $commentRepository */
            $commentRepository = $this->getDoctrine()->getRepository("AppBundle:Comment");

            $commentRepository->createComment($comment);

            $this->addFlash("alert", $this->get("translator")->trans("Comment added successfully."));
            return $this->redirectToRoute("homepage");
        }

        return $this->render("default/index.html.twig", [
            "form" => $form->createView(),
        ]);
    }

    /**
     * @inheritdoc
     */
    protected function getUser()
    {
        $user = $this->getDoctrine()->getRepository('AppBundle:User')->find(1);

        if(null === $user)
        {
            $user = new User();
            $user->setName("Piotr");

            $em = $this->get("doctrine.orm.default_entity_manager");

            $em->persist($user);
            $em->flush();
        }

        return $user;
    }
}
