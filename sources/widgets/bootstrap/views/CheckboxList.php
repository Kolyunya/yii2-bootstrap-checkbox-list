<?php

echo \yii\helpers\Html::activeCheckboxList
(
    $model,
    $attribute,
    $items,
    [
        'class' => 'btn-group',
        'data-toggle' => 'buttons',
        'item' => function ( $index , $label , $name , $checked , $value )
        {
            return \yii\helpers\Html::checkbox
            (
                $name,
                $checked,
                [
                    'value' => $value,
                    'label' => $label,
                    'container' => false,
                    'labelOptions' =>
                    [
                        'class' => "btn btn-{$this->context->type} btn-{$this->context->size}" . $checked ? 'active' : '',
                    ],
                ]
            );
        }
    ]
);
