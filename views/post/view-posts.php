<?php

?>

<div class="row">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Date Created</th>
                <th>Title</th>
                <th>Content</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $post){ ?>
            <tr>
                <td><?= $post->created_on ?></td>
                <td><?= $post->title ?></td>
                <td><?= $post->body ?></td>
                <td>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>