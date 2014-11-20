<?php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
    public function showAction($id, $slug)
    {
        $em = $this->getDoctrine()->getManager();
        $blog = $em->getRepository('BloggerBlogBundle:Blog')->find($id);
        if(!$blog)
        {
            throw $this->createNotFoundException('Not Found');
        }
        $comments =$em->getRepository('BloggerBlogBundle:Comment')->getCommentsForBlog($blog->getId());
        return $this->render('BloggerBlogBundle:Blog:show.html.twig', array(
                'blog' =>$blog,
                'comments' =>$comments
            ));
    }

    public function createAction(Request $request)
    {
        $entity = new Blog();
        $form = $this->createForm(new EnquiryType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($entity);
            $em->flush();
        }
    }

    public function uploadAction(Request $request)
    {
        $blog = new Blog();
        $form = $this->createFormBuilder($blog)
            ->add('name')
            ->add('file')
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($blog);
            $em->flush();

            return $this->redirect($this->generateUrl());
        }

        return array('form' => $form->createView());
    }

}
