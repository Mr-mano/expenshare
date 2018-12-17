<?php

namespace ‘App\Entity’;

use Doctrine\ORM\Mapping as ORM;

/**
 * Person
 *
 * @ORM\Table(name="person", indexes={@ORM\Index(name="fk_person_share_group_idx", columns={"share_group_id"})})
 * @ORM\Entity
 */
class Person
{
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    /**
     * @return \ShareGroup
     */
    public function getShareGroup(): \ShareGroup
    {
        return $this->shareGroup;
    }

    /**
     * @param \ShareGroup $shareGroup
     */
    public function setShareGroup(\ShareGroup $shareGroup): void
    {
        $this->shareGroup = $shareGroup;
    }
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255, nullable=false)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255, nullable=false)
     */
    private $lastname;

    /**
     * @var \ShareGroup
     *
     * @ORM\ManyToOne(targetEntity="ShareGroup")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="share_group_id", referencedColumnName="id")
     * })
     */
    private $shareGroup;


}
