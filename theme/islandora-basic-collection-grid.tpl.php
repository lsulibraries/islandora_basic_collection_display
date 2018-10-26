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
        <?php if(isset($object['stats'])) : ?>
          <?php foreach($object['stats'] as $cmodel => $value) : ?>
            <div  class="islandora-basic-collection-content_stats <?php print $cmodel;?>"><?php print "$cmodel: $value"; ?> </div>
          <?php endforeach; ?>
        <?php endif; ?>
        <div class='islandora-basic-collection-thumb'><?php print $object['thumb_link']; ?> </div>
        <div class='islandora-basic-collection-caption'> <?php print filter_xss($object['title_link']); ?> </div>
        <?php if(!in_array('islandora:collectionCModel', $object['object']->models)) : ?>
          <div class='islandora-basic-object-date_created'> <?php print filter_xss($object['date_created']); ?> </div>
          <?php foreach ($object['subjects'] as $key => $sub) :?>
            <div class='islandora-basic-object-<?php print $key ?>'> <?php print filter_xss($sub); ?> </div>

          <?php endforeach; ?>
          <div class='islandora-basic-object-abstract'> <?php print filter_xss($object['abstract']); ?> </div>
        <?php endif; ?>
        <?php if(in_array('islandora:collectionCModel', $object['object']->models) && isset($object['object']['MODS'])) : ?>
          <div class='islandora-basic-collection-abstract'> <?php print filter_xss($object['abstract']); ?> </div>
          <div class='islandora-basic-collection-note'> <?php print filter_xss($object['note']); ?> </div>
          <?php if(isset($object['contact'])) : ?>
            <div class='islandora-basic-collection-contact'> <?php print filter_xss($object['contact']); ?> </div>
          <?php endif; ?>
        <?php endif; ?>
      </div>
    <?php endforeach; ?>
</div>
</div>
