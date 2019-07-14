<?php
/**
 * Created by PhpStorm.
 * User: dadan
 * Date: 14/07/2019
 * Time: 23:27
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ApiResource()
 * @ORM\Table(name="Match")
 * @ORM\Entity(repositoryClass="App\Repository\MatchRepository")
 */
class Match
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="score_gagnant", type="integer")
     */
    private $winnerScore;

    /**
     * @var int
     *
     * @ORM\Column(name="score_perdant", type="integer")
     */
    private $loserScore;

    /**
     * @var /DateTime
     * @ORM\Column(name="date_match", type="date")
     */
    private $date;

    /**
     * @var /DateTime
     * @ORM\Column(name="heure_match", type="time")
     */
    private $time;

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
     * @return int
     */
    public function getWinnerScore(): int
    {
        return $this->winnerScore;
    }

    /**
     * @param int $winnerScore
     */
    public function setWinnerScore(int $winnerScore): void
    {
        $this->winnerScore = $winnerScore;
    }

    /**
     * @return int
     */
    public function getLoserScore(): int
    {
        return $this->loserScore;
    }

    /**
     * @param int $loserScore
     */
    public function setLoserScore(int $loserScore): void
    {
        $this->loserScore = $loserScore;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date): void
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param mixed $time
     */
    public function setTime($time): void
    {
        $this->time = $time;
    }





}