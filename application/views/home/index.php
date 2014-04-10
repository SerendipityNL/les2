<div class="jumbotron">
    <h1><?php echo $page_title; ?></h1>
    <p>Welkom bij de index van jullie nieuwe website.</p>
</div>
<?php foreach ($posts as $post): ?>
    <div class="well">
        <h1><a href="<?php echo URL::site('posts/view/'.$post->id);?>"><?php echo $post->title; ?></a></h1>
        <p><?php echo Text::limit_words($post->text); ?><p>

    </div>
<?php endforeach; ?>
