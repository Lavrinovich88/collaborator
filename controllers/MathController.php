<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\dto\NumbersDto;
use app\services\interfaces\MathServiceInterface;

class MathController extends Controller
{
    private MathServiceInterface $mathService;

    public function __construct($id, $module, MathServiceInterface $mathService, $config = [])
    {
        $this->mathService = $mathService;
        parent::__construct($id, $module, $config);
    }

    public function actionSum()
    {
        $dto = new NumbersDto();
        $dto->setAttributes(Yii::$app->request->bodyParams);

        if (!$dto->validate()) {
            Yii::$app->response->statusCode = 422;
            return [
                'success' => false,
                'errors' => $dto->getErrors()
            ];
        }

        $result = $this->mathService->execute($dto);

        return [
            'success' => true,
            'result' => $result
        ];
    }
}