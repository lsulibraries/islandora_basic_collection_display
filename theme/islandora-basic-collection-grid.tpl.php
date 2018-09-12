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
    <?php foreach ($variables['associated_objects_array'] as $object) : ?>
      <dl class='islandora-basic-collection-object <?php print $object['class']; ?>'>
        <dt class='islandora-basic-collection-thumb'><?php print $object['thumb_link']; ?> </dt>
        <dd class='islandora-basic-collection-caption'> <?php print filter_xss($object['title_link']); ?> </dd>
      </dl>
    <?php endforeach; ?>
</div>
</div>
