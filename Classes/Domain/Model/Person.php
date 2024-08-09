<?php

declare(strict_types=1);

namespace Hda\Projects\Domain\Model;


/**
 * This file is part of the "Personen Plugin" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2022 Michael Lang <info@mediadesign-ffm.de>, Mediadesign
 */

/**
 * Person
 */
class Person extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    
    
    /**
     * name
     *
     * @var string
     */
    protected $name = '';
    
    /**
     * firstName
     *
     * @var string
     */
    protected $firstName = '';
    
    /**
     * lastName
     *
     * @var string
     */
    protected $lastName = '';
    
    
    /**
     * email
     *
     * @var string
     */
    protected $email = '';
    
    // getter/setter ------------------------------------------
    
    
    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }
    
    
    /**
     * Returns the last_name
     *
     * @return string $lastname
     */
    public function getLastName()
    {
        return $this->lastName;
    }
    
    
    /**
     * Returns the first_name
     *
     * @return string $firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }
    
    
    /**
     * Returns the email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }
    
    
    
    
}
