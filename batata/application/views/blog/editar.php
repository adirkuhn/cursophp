<h1>Editar Postagem</h1>

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

echo Form::hidden('id', $postagem->id);

echo Form::label('author', 'Nome do autor');
echo Form::input('author', $postagem->author);

echo '<br>';

echo Form::label('body', 'Postagem');
echo Form::textarea('body', $postagem->body);


echo Form::submit('submit', 'Salvar Alterações');

echo Form::close();

?>