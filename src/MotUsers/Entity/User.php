<?php

/**
 * The MIT License
 *
 * Copyright (c) 2012-2015, Mega Mitch, Inc.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace MotUsers\Entity;

use ZfcUser\Entity\User AS ZfcUserEntity;
use ZfcRbac\Identity\IdentityInterface AS ZfcRbacIdentityInterface;

/**
 * MotUsers\Entity\User
 *
 * @package MotUsers\Entity
 */
class User extends ZfcUserEntity implements ZfcRbacIdentityInterface
{
    /**
     * @var string
     */
    protected $employeeId;
    
    protected $givenName;
    
    protected $middleName;
    
    protected $lastName;
    
    protected $position;
    
    protected $avatar;
    
    /**
     * Super Admin, Admin, User
     * 
     * @var string
     */
    protected $roles;
    
    public function setEmployeeId($employee_id)
    {
        $this->employeeId = $employee_id;
        return $this;
    }
    
    public function getEmployeeId()
    {
        return $this->employeeId;
    }
    
    public function setGivenName($given_name)
    {
        $this->givenName = $given_name;
        return $this;
    }
    
    public function getGivenName()
    {
        return $this->givenName;
    }
    
    public function setMiddleName($middle_name)
    {
        $this->middleName = $middle_name;
        return $this;
    }
    
    public function getMiddleName()
    {
        return $this->middleName;
    }

    public function setLastName($last_name)
    {
        $this->lastName = $last_name;
        return $this;
    }
    
    public function getLastName()
    {
        return $this->lastName;
    }
    
    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }
    
    public function getPosition()
    {
        return $this->position;
    }
    
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
        return $this;
    }
    
    public function getAvatar()
    {
        return "data:image/jpeg;base64," . base64_encode($this->avatar);
    }
    
    /**
     * 
     * @param type $roles
     * @return \MotUsers\Entity\User
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;        
        return $this;
    }

    /**
     * Get user roles
     * 
     * @return string
     */
    public function getRoles()
    {
        return $this->roles;
    }
}
