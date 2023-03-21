<?php

namespace App\Animal\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Routing\Annotation\Route;

#[AsController]
class AnimalController extends AbstractController
{
    #[Route(
        name: 'animals.get.collection',
        path: '/api/animals',
        methods: ['GET'],
    )]
    public function getAnimalsCollection(Request $request): JsonResponse
    {
        $page = (int) $request->get('page');

        return $this->json([
            'message' => 'animals.get.collection',
            'path' => __CLASS__,
            'page' => $page,
        ]);
    }

    #[Route(
        name: 'animals.post',
        path: 'api/animals',
        methods: ['POST'],
    )]
    public function createAnimal(): JsonResponse
    {
        return $this->json([
            'message' => 'animals.post',
            'path' => __CLASS__,
        ]);
    }

    #[Route(
        name: 'animals.get',
        path: 'api/animals/{id}',
        methods: ['GET'],
    )]
    public function getById(Request $request, int $id): JsonResponse
    {
        return $this->json([
            'message' => 'animals.get',
            'path' => __CLASS__,
            'id' => $id,
        ]);
    }

    #[Route(
        name: 'animals.put',
        path: 'api/animals/{id}',
        methods: ['PUT'],
    )]
    public function putById(Request $request, int $id): JsonResponse
    {
        return $this->json([
            'message' => 'animals.put',
            'path' => __CLASS__,
            'id' => $id,
        ]);
    }

    #[Route(
        name: 'animals.delete',
        path: 'api/animals/{id}',
        methods: ['DELETE'],
    )]
    public function deleteById(Request $request, int $id): JsonResponse
    {
        return $this->json([
            'message' => 'animals.delete',
            'path' => __CLASS__,
            'id' => $id,
        ]);
    }

    #[Route(
        name: 'animals.patch',
        path: 'api/animals/{id}',
        methods: ['PATCH'],
    )]
    public function patchById(Request $request, int $id): JsonResponse
    {
        return $this->json([
            'message' => 'animals.patch',
            'path' => __CLASS__,
            'id' => $id,
        ]);
    }
}
