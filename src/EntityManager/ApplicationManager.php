<?php
namespace App\EntityManager;

use App\Entity\Application;
use App\Identifier\Generator;
use Doctrine\ORM\EntityManagerInterface;

class ApplicationManager
{
    /**
     * @var Generator
     */
    private $generator;

    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(EntityManagerInterface $em, Generator $generator)
    {
        $this->em = $em;
        $this->generator = $generator;
    }

    public function createApplication(): Application
    {
        return (new Application)
            ->setIdentifier($this->generator->createIdentifier())
        ;
    }

    public function save(Application $application): void
    {
        $this->em->persist($application);
        $this->em->flush();
    }
}