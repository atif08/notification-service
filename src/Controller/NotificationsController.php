<?php

namespace App\Controller;

use App\Repository\UserRepository;
use OldSound\RabbitMqBundle\RabbitMq\Producer;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;


class NotificationsController extends  AbstractController
{

    public function __construct(private readonly LoggerInterface $logger)
    {
    }

    #[Route('/notifications',methods: 'post')]

    public function handleEvent(Request $request): JsonResponse
    {
        // Parse JSON request body
        $data = json_decode($request->getContent(), true);

        // Log the event data
        $this->logger->info('Event received', ['data' => $data]);

        return $this->json(['message' => 'Event received']);
    }

}