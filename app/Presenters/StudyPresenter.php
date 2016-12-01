<?php

namespace App\Presenters;

use App\Transformers\StudyTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class StudyPresenter
 *
 * @package namespace App\Presenters;
 */
class StudyPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new StudyTransformer();
    }
}
