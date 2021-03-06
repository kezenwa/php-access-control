<?php namespace Dtkahl\AccessControlTests;

use Dtkahl\AccessControl\ObjectInterface;
use Dtkahl\AccessControl\UserAccessInterface;

class TestBlog implements ObjectInterface
{

    private $object_roles = [];
    private $related_object = [];

    public function getObjectIdentifier()
    {
        return "blog";
    }

    public function __construct(array $object_roles, array $related_object)
    {
        $this->object_roles = $object_roles;
        $this->related_object = $related_object;
    }

    public function getUserRoles(UserAccessInterface $user)
    {
        return $this->object_roles;
    }

    public function getRelatedObjects()
    {
        return $this->related_object;
    }

}