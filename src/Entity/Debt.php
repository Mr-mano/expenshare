<?php

namespace ‘App\Entity’;

use Doctrine\ORM\Mapping as ORM;

/**
 * Debt
 *
 * @ORM\Table(name="debt", indexes={@ORM\Index(name="fk_debt_person2_idx", columns={"to_id"}), @ORM\Index(name="fk_debt_person1_idx", columns={"from_id"})})
 * @ORM\Entity
 */
class Debt
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
    public function getAmount(): string
    {
        return $this->amount;
    }

    /**
     * @param string $amount
     */
    public function setAmount(string $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return bool
     */
    public function isPaid(): bool
    {
        return $this->paid;
    }

    /**
     * @param bool $paid
     */
    public function setPaid(bool $paid): void
    {
        $this->paid = $paid;
    }

    /**
     * @return \Person
     */
    public function getFrom(): \Person
    {
        return $this->from;
    }

    /**
     * @param \Person $from
     */
    public function setFrom(\Person $from): void
    {
        $this->from = $from;
    }

    /**
     * @return \Person
     */
    public function getTo(): \Person
    {
        return $this->to;
    }

    /**
     * @param \Person $to
     */
    public function setTo(\Person $to): void
    {
        $this->to = $to;
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
     * @ORM\Column(name="amount", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $amount;

    /**
     * @var bool
     *
     * @ORM\Column(name="paid", type="boolean", nullable=false)
     */
    private $paid = '0';

    /**
     * @var \Person
     *
     * @ORM\ManyToOne(targetEntity="Person")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="from_id", referencedColumnName="id")
     * })
     */
    private $from;

    /**
     * @var \Person
     *
     * @ORM\ManyToOne(targetEntity="Person")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_id", referencedColumnName="id")
     * })
     */
    private $to;


}
