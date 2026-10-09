<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

class BaseController extends AbstractController
{
    protected function getUserOrThrow(): User
    {
        $user = $this->getUser();

        if (!$user instanceof User) {
            throw new UnauthorizedHttpException('Bearer', 'User not found or not authenticated.');
        }

        return $user;
    }

    protected function jsonSuccess(mixed $data = null, ?string $message = null, int $status = Response::HTTP_OK): JsonResponse
    {
        $response = ['success' => true];
        if ($message !== null) {
            $response['message'] = $message;
        }
        if ($data !== null) {
            if (is_array($data)) {
                $response = array_merge($response, $data);
            } else {
                $response['data'] = $data;
            }
        }

        return $this->json($response, $status);
    }

    protected function jsonError(string $message, int $status = Response::HTTP_BAD_REQUEST): JsonResponse
    {
        return $this->json([
            'success' => false,
            'message' => $message
        ], $status);
    }
}
