<div class="jumbotron">
    <h1><?php echo $post->title; ?></h1>
    <p>Hier zou je wat meta data kunnen tonen zoals <a>de auteur</a>, de datum van publicatie of <a>enkele</a> <a>tags</a></p>
</div>
<div class="well">
    <p><?php echo Text::limit_words($post->text); ?><p>

</div>
