<?php

namespace APP\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=45, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_address", type="string", length=45, nullable=false)
     */
    private $mailAddress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $type = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="active", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $active = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ban", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $ban = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $name = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="lastname", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $lastname = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $phone = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $image = 'NULL';


}
