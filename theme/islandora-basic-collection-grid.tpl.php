<?php
/**
 * @file
 * islandora-basic-collection.tpl.php
 *
 * @TODO: needs documentation about file and variables
 */
?>

<div class="islandora islandora-basic-collections">
  <div class="islandora-basic-collection-grid clearfix">
    <?php foreach ($variables['rendered_grids'] as $grid) : ?>
      <?php print render($grid); ?>
    <?php endforeach; ?>
</div>
</div>
