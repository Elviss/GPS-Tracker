<?php declare(strict_types=1);

namespace App\Domains\Configuration\Test\Controller;

use App\Domains\Configuration\Model\Configuration as Model;
use App\Domains\CoreApp\Test\Feature\FeatureAbstract;

abstract class ControllerAbstract extends FeatureAbstract
{
    /**
     * @return string
     */
    protected function getModelClass(): string
    {
        return Model::class;
    }
}
