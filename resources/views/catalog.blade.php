<?php
    $results = DB::select('select * from users');
?>


<div class="users">
    <?php foreach( $results as $result) { ?>

        <div class="user">
            <?= $result->fname; ?>
        </div>

    <?php } ?>
</div>