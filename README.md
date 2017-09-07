Drexlerux - Yii2 ICheck
================================

### Description:
### Check Boxes to verification customize and radio buttons.
### [DEMO](http://icheck.fronteed.com/)

------------

Setup:

------------

```
php composer.phar require "drexlerux/yii2-icheck" "*"
```
or

```
composer require drexlerux/yii2-icheck
```

or add to composer.json

```
"drexlerux/yii2-icheck": "*"
```

### How to implement:
------------
```php
use drexlerux\ui\ICheck;
```
```html
<h3>STYLE_MIMIMAL (colors for STYLE_MIMIMAL - minimal (the black), red, green, blue, aero, grey, orange, yellow, pink, purple)</h3>
<div class="col-md-6">
    <?= $form->field($model, 'checkbox', ['template' => '{label} {input}'])->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX,
        'style'  => ICheck::STYLE_MIMIMAL,
        'color'  => 'green'                  // Color theme
    ]) ?>
    <?= $form->field($model, 'checkbox2')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX_LIST,
        'style'  => ICheck::STYLE_MIMIMAL,
        'items'    => [1 => 'Item 1', 2 => 'Item 2', 3 => 'Item 3']
        'color'  => 'minimal',              // Color theme
        'options' => [
            'item' => function ($index, $label, $name, $checked, $value){
                return '<input type="checkbox" id="check-1-'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="check-1-'.$index.'">'.$label.'</label><br>';
            }
        ]]) ?>

    <?= $form->field($model, 'checkbox3')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX_LIST,
        'style'  => ICheck::STYLE_MIMIMAL,
        'items'    => [1 => 'Item 1', 2 => 'Item 2', 3 => 'Item 3']
        'color'  => 'red',                  // Color theme
        'options' => [
            'item' => function ($index, $label, $name, $checked, $value){
                return '<input type="checkbox" id="check-2-'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="check-2-'.$index.'">'.$label.'</label>';
            }
        ]]) ?>
</div>
<div class="col-md-6">
    <?= $form->field($model, 'radio')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO,
        'style'  => ICheck::STYLE_MIMIMAL,
        'color'  => 'green'                  // Color theme
    ]) ?>

    <?= $form->field($model, 'radio2')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_MIMIMAL,
        'items'    => [1 => 'Item 1', 2 => 'Item 2', 3 => 'Item 3']
        'color'  => 'purple',                  // Color theme
        'options' => [
            'item' => function ($index, $label, $name, $checked, $value){
                return '<input type="radio" id="check-3-'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="check-3-'.$index.'">'.$label.'</label><br>';
            }
        ]]) ?>

    <?= $form->field($model, 'radio3')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_MIMIMAL,
        'items'    => [1 => 'Item 1', 2 => 'Item 2', 3 => 'Item 3']
        'color'  => 'blue',                  // Color theme
        'options' => [
            'item' => function ($index, $label, $name, $checked, $value){
                return '<input type="radio" id="check-4-'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="check-4-'.$index.'">'.$label.'</label>';
            }
        ]]) ?>
</div>
<h3>STYLE_SQUARE (Colors for STYLE_SQUARE - square (the black), red, green, blue, aero, grey, orange, yellow, pink, purple)</h3>
<div class="col-md-6">
    <?= $form->field($model, 'checkbox4', ['template' => '{label} {input}'])->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX,
        'style'  => ICheck::STYLE_SQUARE,
        'color'  => 'square'                  // Color theme
    ]) ?>
    <?= $form->field($model, 'checkbox5')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX_LIST,
        'style'  => ICheck::STYLE_SQUARE,
        'items'    => [1 => 'Item 1', 2 => 'Item 2', 3 => 'Item 3']
        'color'  => 'green',                  // Color theme
        'options' => [
            'item' => function ($index, $label, $name, $checked, $value){
                return '<input type="checkbox" id="check-5-'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="check-5-'.$index.'">'.$label.'</label>';
            }
        ]]) ?>
    <?= $form->field($model, 'checkbox6')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX_LIST,
        'style'  => ICheck::STYLE_SQUARE,
        'items'    => [1 => 'Item 1', 2 => 'Item 2', 3 => 'Item 3']
        'color'  => 'red',                  // Color theme
        'options' => [
            'item' => function ($index, $label, $name, $checked, $value){
                return '<input type="checkbox" id="check-6-'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="check-6-'.$index.'">'.$label.'</label><br>';
            }
        ]]) ?>
</div>
<div class="col-md-6">
    <?= $form->field($model, 'radio4')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO,
        'style'  => ICheck::STYLE_SQUARE,
        'color'  => 'blue'                  // Color theme
    ]) ?>
    <?= $form->field($model, 'radio5')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_SQUARE,
        'items'    => [1 => 'Item 1', 2 => 'Item 2', 3 => 'Item 3']
        'color'  => 'yellow',               // Color theme
        'options' => [
            'item' => function ($index, $label, $name, $checked, $value){
                return '<input type="radio" id="check-7-'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="check-7-'.$index.'">'.$label.'</label><br>';
            }
        ]]) ?>
    <?= $form->field($model, 'radio6')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_SQUARE,
        'items'    => [1 => 'Item 1', 2 => 'Item 2', 3 => 'Item 3']
        'color'  => 'aero',                  // Color theme
        'options' => [
            'item' => function ($index, $label, $name, $checked, $value){
                return '<input type="radio" id="check-8-'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="check-8-'.$index.'">'.$label.'</label>';
            }
        ]]) ?>
</div>
<h3>STYLE_FLAT (Colors for STYLE_SQUARE - flat (the black), red, green, blue, aero, grey, orange, yellow, pink, purple)</h3>
<div class="col-md-6">
    <?= $form->field($model, 'checkbox7', ['template' => '{label} {input}'])->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX,
        'style'  => ICheck::STYLE_FLAT,
        'color'  => 'flat'                  // Color theme
    ]) ?>
    <?= $form->field($model, 'checkbox8')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [1 => 'Item 1', 2 => 'Item 2', 3 => 'Item 3']
        'color'  => 'green',                // Color theme
        'options' => [
            'item' => function ($index, $label, $name, $checked, $value){
                return '<input type="checkbox" id="check-9-'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="check-9-'.$index.'">'.$label.'</label>';
            }
        ]]) ?>
    <?= $form->field($model, 'checkbox9')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [1 => 'Item 1', 2 => 'Item 2', 3 => 'Item 3']
        'color'  => 'red',                  // Color theme
        'options' => [
            'item' => function ($index, $label, $name, $checked, $value){
                return '<input type="checkbox" id="check-10-'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="check-10-'.$index.'">'.$label.'</label><br>';
            }
        ]]) ?>
</div>
<div class="col-md-6">
    <?= $form->field($model, 'radio7')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO,
        'style'  => ICheck::STYLE_FLAT,
        'color'  => 'blue'                      // Color theme
    ]) ?>
    <?= $form->field($model, 'radio8')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [1 => 'Item 1', 2 => 'Item 2', 3 => 'Item 3']
        'color'  => 'yellow',                  // Color theme
        'options' => [
            'item' => function ($index, $label, $name, $checked, $value){
                return '<input type="radio" id="radio-7-'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="radio-7-'.$index.'">'.$label.'</label><br>';
            }
        ]]) ?>
    <?= $form->field($model, 'radio9')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [1 => 'Item 1', 2 => 'Item 2', 3 => 'Item 3']
        'color'  => 'aero',                     // Color theme
        'options' => [
            'item' => function ($index, $label, $name, $checked, $value){
                return '<input type="radio" id="radio-8-'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="radio-8-'.$index.'">'.$label.'</label>';
            }
        ]]) ?>
</div>
<h3>STYLE_LINE (Colors for STYLE_LINE - line (the black), red, green, blue, aero, grey, orange, yellow, pink, purple)</h3>
<div class="col-md-6">
    <?= $form->field($model, 'checkbox10')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX_LIST,
        'style'  => ICheck::STYLE_LINE,
        'items'    => [1 => 'Вася'],
        'color'  => 'yellow',                  // Color theme
        'options' => [
            'item' => function ($index, $label, $name, $checked, $value){
                return '<input type="checkbox" id="check-10-'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'>
                        <label for="check-7-'.$index.'">'.$label.'</label>';
            },
        ]]) ?>
    <?= $form->field($model, 'checkbox11')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX_LIST,
        'style'  => ICheck::STYLE_LINE,
        'items'    => [1 => 'Item 1', 2 => 'Item 2', 3 => 'Item 3']
        'color'  => 'red',                  // Color theme
        'options' => [
            'item' => function ($index, $label, $name, $checked, $value){
                return '<input type="checkbox" id="check-11-'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'>
                        <label for="check-7-'.$index.'">'.$label.'</label>';
            },
        ]]) ?>
</div>
<div class="col-md-6">
    <?= $form->field($model, 'radio10')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_LINE,
        'items'    => [1 => 'Item 1', 2 => 'Item 2', 3 => 'Item 3']
        'color'  => 'pink',                  // Color theme
        'options' => [
            'item' => function ($index, $label, $name, $checked, $value){
                return '<input type="radio" id="radio-10-'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'>
                        <label for="check-7-'.$index.'">'.$label.'</label>';
            },
        ]]) ?>
</div>
<h3>STYLE_POLARIS</h3>
<div class="col-md-6" style="background-color: #2c323c; padding: 20px;">
    <?= $form->field($model, 'checkbox12', ['template' => '{label} {input}'])->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX,
        'style'  => ICheck::STYLE_POLARIS,
    ]) ?>
    <?= $form->field($model, 'checkbox13')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX_LIST,
        'style'  => ICheck::STYLE_POLARIS,
        'items'    => [1 => 'Item 1', 2 => 'Item 2', 3 => 'Item 3']
        'options' => [
            'item' => function ($index, $label, $name, $checked, $value){
                return '<input type="checkbox" id="check-13-'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="check-13-'.$index.'">'.$label.'</label>';
            }
        ]]) ?>
    <?= $form->field($model, 'checkbox14')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX_LIST,
        'style'  => ICheck::STYLE_POLARIS,
        'items'    => [1 => 'Item 1', 2 => 'Item 2', 3 => 'Item 3']
        'options' => [
            'item' => function ($index, $label, $name, $checked, $value){
                return '<input type="checkbox" id="check-14-'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="check-14-'.$index.'">'.$label.'</label><br>';
            }
        ]]) ?>
</div>
<div class="col-md-6" style="background-color: #2c323c; padding: 20px;">
    <?= $form->field($model, 'radio11')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO,
        'style'  => ICheck::STYLE_POLARIS,
    ]) ?>
    <?= $form->field($model, 'radio12')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_POLARIS,
        'items'    => [1 => 'Item 1', 2 => 'Item 2', 3 => 'Item 3']
        'options' => [
            'item' => function ($index, $label, $name, $checked, $value){
                return '<input type="radio" id="radio-12-'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="radio-12-'.$index.'">'.$label.'</label><br>';
            }
        ]]) ?>
    <?= $form->field($model, 'radio13')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_POLARIS,
        'items'    => [1 => 'Item 1', 2 => 'Item 2', 3 => 'Item 3']
        'options' => [
            'item' => function ($index, $label, $name, $checked, $value){
                return '<input type="radio" id="radio-13-'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="radio-13-'.$index.'">'.$label.'</label>';
            }
        ]]) ?>
</div>
<h3>STYLE_FUTURICO</h3>
<div class="col-md-6" style="background-color: #2c323c; padding: 20px;">
    <?= $form->field($model, 'checkbox15', ['template' => '{label} {input}'])->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX,
        'style'  => ICheck::STYLE_FUTURICO,
    ]) ?>
    <?= $form->field($model, 'checkbox16')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX_LIST,
        'style'  => ICheck::STYLE_FUTURICO,
        'items'    => [1 => 'Item 1', 2 => 'Item 2', 3 => 'Item 3']
        'options' => [
            'item' => function ($index, $label, $name, $checked, $value){
                return '<input type="checkbox" id="check-16-'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="check-16-'.$index.'">'.$label.'</label>';
            }
        ]]) ?>
    <?= $form->field($model, 'checkbox17')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX_LIST,
        'style'  => ICheck::STYLE_FUTURICO,
        'items'    => [1 => 'Item 1', 2 => 'Item 2', 3 => 'Item 3']
        'options' => [
            'item' => function ($index, $label, $name, $checked, $value){
                return '<input type="checkbox" id="check-17-'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="check-17-'.$index.'">'.$label.'</label><br>';
            }
        ]]) ?>
</div>
<div class="col-md-6" style="background-color: #2c323c; padding: 20px;">
    <?= $form->field($model, 'radio14')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO,
        'style'  => ICheck::STYLE_FUTURICO,
    ]) ?>
    <?= $form->field($model, 'radio15')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FUTURICO,
        'items'    => [1 => 'Item 1', 2 => 'Item 2', 3 => 'Item 3']
        'options' => [
            'item' => function ($index, $label, $name, $checked, $value){
                return '<input type="radio" id="radio-15-'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="radio-15-'.$index.'">'.$label.'</label><br>';
            }
        ]]) ?>
    <?= $form->field($model, 'radio16')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FUTURICO,
        'items'    => [1 => 'Item 1', 2 => 'Item 2', 3 => 'Item 3']
        'options' => [
            'item' => function ($index, $label, $name, $checked, $value){
                return '<input type="radio" id="radio-16-'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="radio-16-'.$index.'">'.$label.'</label>';
            }
        ]]) ?>
</div>
```
------------
### License:
### [MIT](https://en.wikipedia.org/wiki/MIT_License)
------------
