<?php echo HTML::anchor('blog/novo', '+ Nova Postagem'); ?>

<h1>Minhas Postagens</h1>

<?php foreach($postagens as $postagem): ?>
    <hr>
    <?php 
    echo HTML::anchor('blog/editar/' . $postagem->id, 'Editar');
    ?>
     - 
    <?php 
    echo HTML::anchor('blog/deletar/' . $postagem->id, 'Deletar');
    ?>

    <br>
    <strong><?php echo HTML::entities($postagem->author); ?></strong>
    <br>
    <p><?php echo HTML::entities($postagem->body); ?></p>
<?php endforeach; ?>