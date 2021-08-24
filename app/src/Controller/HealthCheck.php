<?php declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

final class HealthCheck extends AbstractController {
    #[Route("/health", name: "health_check")]
    public function check(): JsonResponse {
        return $this->json(["status" => "up"]);
    }
}
