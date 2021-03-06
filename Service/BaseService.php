<?php

/**
 * Copyright (c) Thomas Potaire
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @category   Teapotio
 * @package    BaseUserBundle
 * @author     Thomas Potaire
 */

namespace Teapotio\Base\UserBundle\Service;

use Symfony\Component\DependencyInjection\ContainerInterface;

class BaseService {

    protected $container;
    protected $em;

    protected $userRepositoryClass;
    protected $userTokenRepositoryClass;

    public function __construct (ContainerInterface $container)
    {
        $this->container = $container;
        $this->em = $container->get('doctrine')->getManager();

        $this->userRepositoryClass = $this->container->getParameter('teapotio_user.user_repository.class');
        $this->userGroupRepositoryClass = $this->container->getParameter('teapotio_user.user_group_repository.class');
        $this->userTokenRepositoryClass = $this->container->getParameter('teapotio_user.user_token_repository.class');
    }


}