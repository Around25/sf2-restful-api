<?php

namespace EC\AuthBundle\Controller;

use EC\AuthBundle\Entity\User;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Request\ParamFetcher;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;

class UsersController extends Controller
{

    /**
     * Search for multiple users
     * @ApiDoc(
     *  description="Get a list of users"
     * )
     * @Rest\View(templateVar="users")
     * @Rest\QueryParam(name="sort", description="Sort users by a property")
     */
    public function getUsersAction(ParamFetcher $paramFetcher)
    {
        return array();
    }

    /**
     * @ApiDoc(
     *  description="Create a new user"
     * )
     * @Rest\View
     */
    public function  postUsersAction(Request $request)
    {
        $params = $request->request->all();
        return array('params'=>$params);
    }

    /**
     * @ApiDoc(
     *  description="Get a single user by id",
     *  resource=true
     * )
     * @ParamConverter("user", class="ECAuthBundle:User")
     * @Rest\View(templateVar="user")
     */
    public function getUserAction(User $user)
    {
        return $user;
    }

    /**
     * @ApiDoc(
     *  description="Delete a user by id"
     * )
     * @ParamConverter("user", class="ECAuthBundle:User")
     * @Rest\View(statusCode=204)
     */
    public function  deleteUserAction(User $user)
    {
        $this->getDoctrine()->getManager()->remove($user);
        $this->getDoctrine()->getManager()->flush();
        return array();
    }
}
