<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
use app\modules\admin\components\AuthHandler;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'auth' => [
                'class' => 'yii\authclient\AuthAction',
                'successCallback' => [$this, 'onAuthSuccess'],
            ],
        ];
    }

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * @return string
     */
    public function onAuthSuccess($client)
    {
        (new AuthHandler($client))->handle();
    }
}
