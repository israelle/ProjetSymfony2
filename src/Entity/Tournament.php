<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ApiResource()
 * @ORM\Table(name="Tournoi")
 * @ORM\Entity(repositoryClass="App\Repository\TournamentRepository")
 */
class Tournament
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
     * @var string
     * @ORM\Column(name="nom", type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @var /DateTime
     * @ORM\Column(name="date_debut", type="date")
     */
    private $startDate;

    /**
     * @var /DateTime
     * @ORM\Column(name="date_fin", type="date", )
     */
    private $endDate;

    /**
     * @ORM\ManyToOne(targetEntity="CompetitionType", inversedBy="tournament")
     * @ORM\JoinColumn(name="id_type_competition", referencedColumnName="id")
     */
    private $competitionType;

    /**
     * @ORM\OneToMany(targetEntity="Member", mappedBy="tournoi")
     * @ORM\JoinColumn(name="id_membre", referencedColumnName="id")
     */
    private $members;

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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * @param mixed $members
     */
    public function setMembers($members): void
    {
        $this->members = $members;
    }

    /**
     * @return array
     */
    public function getTeams(): array
    {
        return $this->teams;
    }

    /**
     * @param array $teams
     */
    public function setTeams(array $teams): void
    {
        $this->teams = $teams;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param mixed $startDate
     */
    public function setStartDate($startDate): void
    {
        $this->startDate = $startDate;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param mixed $endDate
     */
    public function setEndDate($endDate): void
    {
        $this->endDate = $endDate;
    }

    /**
     * @return mixed
     */
    public function getCompetitionType()
    {
        return $this->competitionType;
    }

    /**
     * @param mixed $competitionType
     */
    public function setCompetitionType($competitionType): void
    {
        $this->competitionType = $competitionType;
    }

}