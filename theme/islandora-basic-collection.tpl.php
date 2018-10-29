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
          <?php if(isset($object['stats'])) : ?>
            <?php foreach($object['stats'] as $cmodel => $value) : ?>
              <div  class="islandora-basic-collection-content_stats <?php print $cmodel;?>"><?php print "$cmodel: $value"; ?> </div>
            <?php endforeach; ?>
          <?php endif; ?>
            <div>
              <?php if (isset($object['thumb_link'])): ?>
                <?php print $object['thumb_link']; ?>
              <?php endif; ?>
            </div>
            <?php if(!in_array('islandora:collectionCModel', $object['object']->models)) : ?>
              <div class='islandora-basic-object-date_created'> <?php print filter_xss($object['date_created']); ?> </div>
              <?php if (isset($object['subjects'])) : ?>
                <?php foreach ($object['subjects'] as $key => $sub) :?>
                  <div class='islandora-basic-object-<?php print $key; print ' modsSubject' ?>'> <?php print filter_xss($sub); ?> </div>
                <?php endforeach; ?>
              <?php endif; ?>
              <div class='islandora-basic-object-abstract'> <?php print filter_xss($object['abstract']); ?> </div>
            <?php endif; ?>
            <?php if(in_array('islandora:collectionCModel', $object['object']->models) && isset($object['object']['MODS'])) : ?>
              <div class='islandora-basic-collection-abstract'> <?php print filter_xss($object['abstract']); ?> </div>
              <div class='islandora-basic-collection-note'> <?php print filter_xss($object['note']); ?> </div>
              <?php if(isset($object['contact'])) : ?>
                <div class='islandora-basic-collection-contact'> <?php print filter_xss($object['contact']); ?> </div>
              <?php endif; ?>
            <?php endif; ?>
            <div class="collection-value <?php print isset($object['dc_array']['dc:title']['class']) ? $object['dc_array']['dc:title']['class'] : ''; ?> <?php print $row_field == 0 ? ' first' : ''; ?>">
              <?php if (isset($object['thumb_link'])): ?>
                <strong><?php print filter_xss($object['title_link']); ?></strong>
              <?php endif; ?>
            </div>
            <?php if (isset($object['dc_array']['dc:description']['value'])): ?>
              <div class="collection-value <?php print $object['dc_array']['dc:description']['class']; ?>">
                <?php print filter_xss($object['dc_array']['dc:description']['value']); ?>
              </div>
            <?php endif; ?>
        </div>
      </div>
    <?php $row_field++; ?>
    <?php endforeach; ?>
</div>
