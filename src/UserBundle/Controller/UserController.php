<?php

namespace UserBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest;
use UserBundle\Entity\User;

class UserController extends FOSRestController
{
    /**
     * @Rest\View(statusCode=Response::HTTP_CREATED)
     * @Rest\Post("/users", name="new_user")
     */
    public function PostUsersAction(Request $request)
    {

        try {
            if (!is_null($request->get('lastname') && !is_null($request->get('firstname')))
                && $request->get('lastname') != '' && $request->get('firstname') != '') {
                $em = $this->getDoctrine()->getManager();
                $user = new User();
                $user->setFirstname($request->get('firstname'));
                $user->setLastname($request->get('lastname'));
                $user->setCreationdate(new \DateTime());
                $user->setUpdatedate(new \DateTime());
                $em->persist($user);
                $em->flush();
                $response = [
                    "code" => 201,
                    "message" => 'Enregistrement effectué avec succès'
                ];
            } else {
                $response = [
                    "code" => 400,
                    "message" => 'Echec.' . ' ' . 'Veuillez vérifier les données renseignées'
                ];
            }
            return $response;
        } catch (\Exception $ex) {
            return ('Error :' . ' ' . $ex->getCode() . ' ' . $ex->getMessage().'at line '.$ex->getLine());
        }
    }

    /**
     * @Rest\View(statusCode=200)
     * @Rest\Get("/users", name="index_users")
     */
    public function GetUsersAction(Request $request)
    {
        try {
            $em = $this->getDoctrine()->getManager();
            $users = $em->getRepository(User::class)->findAll();
            return $users;
        } catch (\Exception $ex) {
            return ('Error:' . ' ' . $ex->getCode() . ' ' . $ex->getMessage().'at line '.$ex->getLine());
        }
    }

    /**
     * @Rest\View(statusCode=200)
     * @Rest\Get("/users/{id}", name="show_user")
     */
    public function GetUserAction(Request $request)
    {
        try {
            if (!is_null($request->get('id'))) {
                $em = $this->getDoctrine()->getManager();
                $user = $em->getRepository(User::class)->findOneBy(array('id' => $request->get('id')));
                if (!is_null($user)) {
                    return $user;
                } else {
                    $response = [
                        "code" => 404,
                        "message" => 'Utilisateur non trouvé'
                    ];
                    return $response;
                }
            } else {
                $response = [
                    "code" => 400,
                    "message" => 'Paramètre ID Utilisateur manquant'
                ];
                return $response;
            }
        } catch (\Exception $ex) {
            return ('Error :' . ' ' . $ex->getCode() . ' ' . $ex->getMessage().'at line '.$ex->getLine());
        }
    }

    /**
     * @Rest\View(statusCode=200)
     * @Rest\Put("/users/{id}", name="edit_user")
     */
    public function editAction(Request $request)
    {
        try {
            if (!is_null($request->get('id'))) {
                $em = $this->getDoctrine()->getManager();
                $user = $em->getRepository(User::class)->findOneBy(array('id' => $request->get('id')));
                if (!is_null($user)) {

                    if (!is_null($request->get('firstname') &&  !is_null($request->get('lastname')))
                        && $request->get('lastname') != '' && $request->get('firstname') != '') {
                        $user->setFirstname($request->get('firstname'));
                        $user->setLastname($request->get('lastname'));
                        $user->setUpdatedate(new \DateTime());
                        $em->persist($user);
                        $em->flush();
                        $response = [
                            "code" => 200,
                            "message" => 'Modification effectuée avec succès'
                        ];
                    } else {
                        $response = [
                            "code" => 400,
                            "message" => 'Verifiez les champs renseignés'
                        ];
                    }
                } else {
                    $response = [
                        "code" => 400,
                        "message" => 'Utilisateur introuvable'
                    ];
                }
                return $response;
            } else {
                return 'Paramètre ID Utilisateur manquant';
            }
        } catch (\Exception $ex) {
            return ('Error :' . ' ' . $ex->getCode() . ' ' . $ex->getMessage().' at line '.$ex->getLine());
        }
    }

    /**
     * @Rest\View(statusCode=200)
     * @Rest\Delete("/users/{id}", name="delete_user")
     */
    public function deleteAction(Request $request)
    {
        try {
            if (!is_null($request->get('id'))) {
                $em = $this->getDoctrine()->getManager();
                $user = $em->getRepository(User::class)->findOneBy(array('id' => $request->get('id')));
                if (!is_null($user)) {
                    $em->persist($user);
                    $em->remove($user);
                    $em->flush();
                    $response = [
                        "code" => 204,
                        "message" => 'Suppression effectuée avec succès'
                    ];
                } else {
                    $response = [
                        "code" => 404,
                        "message" => 'Utilisateur introuvable'
                    ];
                }
            } else {
                $response = [
                    "code" => 400,
                    "message" => 'Paramètre ID Utilisateur manquant'
                ];
            }
            return $response;
        } catch (\Exception $ex) {
            return ('Error:' . ' ' . $ex->getCode() . ' ' . $ex->getMessage().' at line '.$ex->getLine());
        }
    }
}
