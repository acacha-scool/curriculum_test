<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Study;

/**
 * Class StudyTransformer
 * @package namespace App\Transformers;
 */
class StudyTransformer extends TransformerAbstract
{

    /**
     * Transform the \Study entity
     * @param \Study $model
     *
     * @return array
     */
    public function transform(Study $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
