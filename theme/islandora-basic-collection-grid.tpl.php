<?php
/**
 * @file
 * islandora-basic-collection.tpl.php
 *
 * @TODO: needs documentation about file and variables
 */
?>

<?php if (isset($key_image)) : ?>
  <div class='parralax-mirror'>
    <img class='parralax-slider' src='<?php print $key_image['path']?>'></img>
    <?php foreach ($key_image['meta'] as $meta) : ?>
      <div class='pallax-meta'><?php print $meta ?></div>
    <?php endforeach; ?>
  </div>
<?php endif; ?>
<div class="islandora islandora-basic-collections helloKyle">
  <div class="islandora-basic-collection-grid clearfix">
    <div class='collectionHeader masonryItem image_header'>
        <div class="itemTitle" id="page-title"></div>
        <div class="headerBreadcrumb"><a href="/">LDL</a> / </div>
        <div class="userMenu">
            <div class="infoToggle userSelect"><div class="iconSelect"></div><div class="textSelect">details</div></div>
            <div id="shareToggle" class="userSelect"><div class="iconSelect"></div><div class="textSelect">share</div></div>
        </div>
    </div>
          <div class="loadingMessage"> <div class="lds-ring"><div></div><div></div><div></div><div></div></div> Loading </div>

    
    <?php foreach ($variables['associated_objects_array'] as $object) : ?>
      <div class='islandora-basic-collection-object masonryItem <?php print $object['class']; ?>'>


        <div class='islandora-basic-collection-caption'> <?php print filter_xss($object['title_link']); ?> </div>
        <div class='islandora-basic-collection-thumb'><?php print $object['thumb_link']; ?> </div>
        <div class='islandora-basic-collection-meta'>
        <!-- regular object not collection  -->
            <!-- where are my ranged dates?  -->
              <div class='islandora-basic-object-date_created'> <?php print $object['date_created'] ?></div>
            <?php foreach ($object['subjects'] as $key => $sub) :?>
              <div class='islandora-basic-object-<?php print $key; print ' modsSubject' ?>'> <?php print $sub; ?> </div>
            <?php endforeach; ?>
            <?php foreach ($object['creator'] as $key => $value) : ?>
              <div class='islandora-basic-collection-creator'> <?php print $value; ?></div>
            <?php endforeach; ?>


          <!-- only if on collection -->
            <?php foreach($object['stats'] as $cmodel => $value) : ?>
              <div  class="islandora-basic-collection-content_stats <?php print $cmodel;?>"><?php print "$cmodel $value"; ?> </div>
            <?php endforeach; ?>

          <!-- collection and basic object both have this  -->
            <div class='islandora-basic-object-abstract'> <?php print $object['description']; ?> </div>
            <div class='islandora-basic-object-note'> <?php print $object['note']; ?> </div>
            <div class='islandora-basic-object-contact'> <?php print $object['contact']; ?> </div>
        </div>

      </div>
    <?php endforeach; ?>
</div>
</div>
