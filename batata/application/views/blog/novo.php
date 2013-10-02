<h1>Nova Postagem</h1>

<?php if ($errors): ?>
    <div style="background-color: yellow">
        <ul>
        <?php foreach ($errors as $erro): ?>
            <li><?php echo $erro; ?></li>
        <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>


<?php

echo Form::open();

echo Form::label('author', 'Nome do autor');
echo Form::input('author');

echo '<br>';

echo Form::label('body', 'Nova Postagem');
echo Form::textarea('body');


echo Form::submit('submit', 'Enviar Post');

echo Form::close();

?>