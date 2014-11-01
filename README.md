# Yii2 Bootstrap checkbox list widget

## Usage example

~~~php
echo $form->field($model,'list')->widget
(
    'kolyunya\yii2\widgets\bootstrap\CheckboxList',
    [
        'items' => $listItems,
        'type' => 'primary',
        'size' => 'default'
    ]
);
~~~