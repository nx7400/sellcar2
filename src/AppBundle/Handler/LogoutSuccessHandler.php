<?php
/**
 * Created by PhpStorm.
 * User: Michał
 * Date: 21.10.2016
 * Time: 02:08
 */

namespace AppBundle\Handler;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Http\Logout\LogoutSuccessHandlerInterface;


class LogoutSuccessHandler implements LogoutSuccessHandlerInterface
{
    /**
     * @var \Symfony\Component\Routing\RouterInterface
     */
    private $router;
    /**
     * @var \Symfony\Component\Security\Core\Security
     */
    private $security;
    /**
     * @param Security $security
     */
    public function __construct(RouterInterface $router)
    {
        $this->router = $router;

    }
    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function onLogoutSuccess(Request $request)
    {
            $response = new RedirectResponse($this->router->generate('homepage'));
        return $response;
    }

}