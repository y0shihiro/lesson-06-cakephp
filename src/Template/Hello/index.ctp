<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title ?></title>
    <style>
        h1 {
            font-size: 48pt;
            margin: 0 0 10px 0;
            padding: 0 20px;
            color: white;
            background: linear-gradient(to right, #aaa, #fff);
        }

        p {
            font-size: 14pt;
            color: #666;
        }
    </style>
</head>

<body>
    <header class="row">
        <h1><?=$title ?></h1>
    </header>
    <div class="row">
        <pre><?php print_r($data); ?></pre>
    </div>
    <div class="row">
        <table>
					<?=$this->Form->create(null,
					['type'=>'post',
					'url'=>['controller'=>'Hello',
					'action'=>'index']]) ?>
                <tr><th>name</th><td>
                        <?=$this->Form->text('Form1.name') ?></td></tr>
                <tr><th>mail</th><td>
												<?=$this->Form->text('Form1.mail') ?></td></tr>
                <tr><th>age</th><td>
												<?=$this->Form->text('Form1.age') ?></td></tr>
								<tr><th>CheckBox</th><td>
												<?=$this->Form->checkbox('Form1.check', ['id'=>'check1']) ?>
												<?=$this->Form->label('check1', 'check box') ?></td></tr>
								<tr><th>RadioButton</th><td>
												<?=$this->Form->radio('Form1.radio', [
													['text'=>'male', 'value'=>'男性'],
													['text'=>'female', 'value'=>'女性', 'checked'=>true]
												]) ?></td></tr>
								<tr><th>Select</th><td>
												<?=$this->Form->select('Form1.select',
												['one'=>'最初', 'two'=>'２番目', 'three'=>'真ん中', 'four'=>'4番目', 'five'=>'最後'],
												['multiple'=>true, 'size'=>5]) ?>
								</td></tr>
								<tr><th></th><td>
												<?=$this->Form->submit('送信') ?></td></tr>
                <?=$this->Form->end() ?>
        </table>
    </div>
</body>

</html>