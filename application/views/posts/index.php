<h1 class="col-sm-offset-5">Posts <small>Een overzicht met alle posts</small></h1>


<div class="row">
    <div class="well col-sm-4">
        <?php echo View::factory('posts/sidebar'); ?>
    </div>
    <div class="well col-sm-7 col-sm-offset-1">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Titel</th>
                    <th>Acties</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($posts as $post): ?>
                    <tr>
                        <td><?php echo $post->id; ?></td>
                        <td><?php echo $post->title; ?></td>
                        <td>
                            <a href="<?php echo URL::site('posts/view/'.$post->id); ?>">Bekijken</a> |
                            <a href="<?php echo URL::site('posts/edit/'.$post->id); ?>">Bewerken</a> |
                            <a href="<?php echo URL::site('posts/delete/'.$post->id); ?>">Verwijderen</a>
                        </td>
                    </tr>
                <?php endforeach ;?>
            </tbody>
        </table>

    </div>
</row>
