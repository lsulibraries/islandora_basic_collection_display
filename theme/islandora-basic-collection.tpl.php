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
    <?php foreach($associated_objects_array as $associated_object): ?>
      <div class="islandora-basic-collection-object1 islandora-basic-collection-list-item clearfix">
        <div class="<?php print $associated_object['class']; ?>">
            <div>
              <?php if (isset($associated_object['thumb_link'])): ?>
                <?php print $associated_object['thumb_link']; ?>
              <?php endif; ?>
            </div>
            <div class="collection-value <?php print isset($associated_object['dc_array']['dc:title']['class']) ? $associated_object['dc_array']['dc:title']['class'] : ''; ?> <?php print $row_field == 0 ? ' first' : ''; ?>">
              <?php if (isset($associated_object['thumb_link'])): ?>
                <strong><?php print filter_xss($associated_object['title_link']); ?></strong>
              <?php endif; ?>
            </div>
            <?php if (isset($associated_object['dc_array']['dc:description']['value'])): ?>
              <div class="collection-value <?php print $associated_object['dc_array']['dc:description']['class']; ?>">
                <?php print filter_xss($associated_object['dc_array']['dc:description']['value']); ?>
              </div>
            <?php endif; ?>
        </div>
      </div>
    <?php $row_field++; ?>
    <?php endforeach; ?>
</div>
