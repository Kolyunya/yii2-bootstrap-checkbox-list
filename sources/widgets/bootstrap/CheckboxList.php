<?php

namespace kolyunya\yii2\widgets\bootstrap;

use yii\widgets\InputWidget;

class CheckboxList extends InputWidget
{

    public $items = array();

    public $type = 'primary';

    public function run()
    {
        return $this->render
        (
            'CheckboxList',
            [
                'model' => $this->model,
                'attribute' => $this->attribute,
                'items' => $this->items,
            ]
        );
    }

}
