<?php
namespace App\Controller;

use App\EntityManager\ApplicationManager;
use JMS\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class ApplicationController
{
    public function create(ApplicationManager $applicationManager, SerializerInterface $serializer)
    {
        $application = $applicationManager->createApplication();

        $applicationManager->save($application);

        return JsonResponse::create()->setContent($serializer->serialize(['data' => $application], 'json'));
    }
}