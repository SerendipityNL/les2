<h1 class="col-sm-offset-2"><?php echo $page_title; ?></h1>

<?php echo Form::open(NULL, array(
    'method' => 'POST',
    'role' => 'form',
    'class' => 'form-horizontal'
)); ?>
    <div class="form-group">
        <?php echo Form::label('title', 'Titel', array(
            'class' => 'col-sm-2 control-label'
        )); ?>
        <div class="col-sm-4">
            <?php echo Form::input('title', NULL, array(
                'placeholder' => 'Titel',
                'class' => 'form-control',
                'id' => 'title'
            )); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo Form::label('text', 'Tekst', array(
            'class' => 'col-sm-2 control-label'
        )); ?>
        <div class="col-sm-4">
            <?php echo Form::textarea('text', NULL, array(
                'placeholder' => 'Tekst',
                'class' => 'form-control',
                'id' => 'text'
            )); ?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-4">
            <a class="btn btn-danger" href="<?php echo URL::site('posts'); ?>">Terug</a>
            <?php echo Form::submit(NULL, 'Opslaan', array(
                'class' => 'btn btn-success'
            )); ?>
        </div>
    </div>
<?php echo Form::close(); ?>
