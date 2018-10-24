<?php
/**
 * @file
 * islandora-basic-collection.tpl.php
 *
 * @TODO: needs documentation about file and variables
 */
?>

<div class="islandora islandora-basic-collections helloKyle">
  <div class="islandora-basic-collection-grid clearfix">
    <?php foreach ($variables['associated_objects_array'] as $object) : ?>
      <div class='islandora-basic-collection-object <?php print $object['class']; ?>'>
        <div class='islandora-basic-collection-thumb'><?php print $object['thumb_link']; ?> </div>
        <div class='islandora-basic-collection-caption'> <?php print filter_xss($object['title_link']); ?> </div>
      </div>
    <?php endforeach; ?>
</div>
</div>
