<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class UsualController extends AbstractController
{
    private function returnRouteInfo(Request $request): JsonResponse
    {
        return $this->json([
            'path' => $request->getPathInfo(),
            'method' => $request->getMethod(),
            'class_method' => __METHOD__,
        ]);
    }

    public function configRouteAction(Request $request): JsonResponse
    {
        return $this->returnRouteInfo($request);
    }

    #[Route('/usual/attribute', name: 'usual.attribute')]
    public function index(Request $request): JsonResponse
    {
        return $this->returnRouteInfo($request);
    }

    public function apiTypeAction(Request $request, string $type): JsonResponse
    {
        return $this->json([
            'path' => $request->getPathInfo(),
            'method' => $request->getMethod(),
            'class_method' => __METHOD__,
            'type' => $type,
        ]);
    }

    public function getByIdAction(Request $request, int $id): JsonResponse
    {
        return $this->json([
            'path' => $request->getPathInfo(),
            'method' => $request->getMethod(),
            'class_method' => __METHOD__,
            'id' => $id,
        ]);
    }
}
