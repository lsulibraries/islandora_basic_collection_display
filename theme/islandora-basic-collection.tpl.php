<?php

/**
 * @file
 * islandora-basic-collection.tpl.php
 *
 * @TODO: needs documentation about file and variables
 */
?>

<div class="islandora islandora-basic-collection">
    <?php $row_field = 0; ?>
    <?php foreach($associated_objects_array as $object): ?>
      <div class="islandora-basic-collection-object1 islandora-basic-collection-list-item clearfix">

        <div class="<?php print $object['class']; ?>">

        <!-- collection only -->
        <?php if(isset($object['stats'])) : ?>
          <?php foreach($object['stats'] as $cmodel => $value) : ?>
            <div  class="islandora-basic-collection-content_stats <?php print $cmodel;?>"><?php print "$cmodel: $value"; ?> </div>
          <?php endforeach; ?>
        <?php endif; ?>

        <div class="collection-value <?php print isset($object['dc_array']['dc:title']['class']) ? $object['dc_array']['dc:title']['class'] : ''; ?> <?php print $row_field == 0 ? ' first' : ''; ?>">
          <strong><?php print filter_xss($object['title_link']); ?></strong>
          <div><?php print $object['thumb_link']; ?></div>
      </div>


        <!-- regular object, not collection  -->
        <?php if(!in_array('islandora:collectionCModel', $object['object']->models)) : ?>
          <div class='islandora-basic-object-date_created'> <?php print $object['date_created']; ?> </div>
          <?php if (isset($object['subjects'])) : ?>
            <?php foreach ($object['subjects'] as $key => $sub) :?>
              <div class='islandora-basic-object-<?php print $key; print ' modsSubject' ?>'> <?php print $sub; ?> </div>
            <?php endforeach; ?>
          <?php endif; ?>
          <?php if (isset($object['creator'])) : ?>
            <?php foreach ($object['creator'] as $key => $value) : ?>
              <div class='islandora-basic-collection-creator'> <?php print $value; ?></div>
            <?php endforeach; ?>
          <?php endif ;?>
        <?php endif; ?>

        <!-- collection and basic object both have this  -->
        <?php if (isset($object['abstract'])) : ?>
          <div class='islandora-basic-object-abstract'> <?php print $object['abstract']; ?> </div>
        <?php endif; ?>
        <?php if (isset($object['note'])) : ?>
          <div class='islandora-basic-object-note'> <?php print $object['note']; ?> </div>
        <?php endif; ?>
        <?php if(isset($object['contact'])) : ?>
          <div class='islandora-basic-object-contact'> <?php print $object['contact']; ?> </div>
        <?php endif; ?>
        <?php if (isset($object['dc_array']['dc:description']['value'])): ?>
          <div class="collection-value <?php print $object['dc_array']['dc:description']['class']; ?>">
            <?php print $object['dc_array']['dc:description']['value']; ?>
          </div>

        <!-- only if on collection -->
        <?php if(isset($object['stats'])) : ?>
          <?php foreach($object['stats'] as $cmodel => $value) : ?>
            <div  class="islandora-basic-collection-content_stats <?php print $cmodel;?>"><?php print "$cmodel: $value"; ?> </div>
          <?php endforeach; ?>
        <?php endif; ?>

        <?php endif; ?>
        </div>
      </div>
    <?php $row_field++; ?>
    <?php endforeach; ?>
</div>
