<?php

/**
 * @file
 * islandora-basic-collection.tpl.php
 *
 * @TODO: needs documentation about file and variables
 */
?>

<div class="islandora islandora-basic-collection">
    <div class='collectionHeader_container'>
        <div class="collectionHeader image_header">
          <div class="itemTitle" id="page-title">[Page Title]</div>
          <div class="headerBreadcrumb">[breadcrumb]</div>
          <div class="userMenu">
              <div class="infoToggle userSelect"><div class="iconSelect"></div><div class="textSelect">details</div></div>
              <div id="shareToggle" class="userSelect"><div class="iconSelect"></div><div class="textSelect">share</div></div>
          </div>
        </div>
    </div>
    <?php $row_field = 0; ?>
    <?php foreach($associated_objects_array as $object): ?>
      <div class="islandora-basic-collection-object1 islandora-basic-collection-list-item clearfix">

      <div class="list-item-container <?php print $object['class']; ?>">
        <div class="list-thumbnail">
          <?php print $object['thumb_link']; ?>
          <div class='list-hover'>
            <!-- creator -->
            <?php foreach ($object['creator'] as $key => $value) : ?>
              <div class='islandora-basic-collection-creator'> <?php print $value; ?></div>
            <?php endforeach; ?>            
            <div class='islandora-basic-object-date_created'> <?php print $object['date_created']; ?> </div>
          </div>
        </div>
        <div class="list-text">
          <!-- title -->    
          <div class="collection-value <?php print isset($object['dc_array']['dc:title']['class']) ? $object['dc_array']['dc:title']['class'] : ''; ?>
            <?php print $row_field == 0 ? ' first' : ''; ?>">
            <?php print filter_xss($object['title_link']); ?>
          </div>
          <!-- description -->
          <div class='islandora-basic-object-abstract list-abstract'> <?php print $object['description']; ?> </div>
          <!-- subjects -->    
          <div class='list-subjects'>      
            <?php foreach ($object['subjects'] as $key => $sub) :?>
              <div class='list-subject islandora-basic-object-<?php print $key; print ' modsSubject' ?>'> <?php print filter_xss($sub); ?> </div>
            <?php endforeach; ?>
          </div>

        </div>

        <!-- collection only -->
        <?php foreach($object['stats'] as $cmodel => $value) : ?>
          <div  class="islandora-basic-collection-content_stats <?php print $cmodel;?>"><?php print "$cmodel $value"; ?> </div>
        <?php endforeach; ?>

        <!-- collection and basic object both have this  -->
          <div class='islandora-basic-object-note'> <?php print $object['note']; ?> </div>
          <div class='islandora-basic-object-contact'> <?php print $object['contact']; ?> </div>
         <!-- collection description  
          <div class="collection-value <?php /* print $object['dc_array']['dc:description']['class']; */ ?>">
            <? /* php print $object['dc_array']['dc:description']['value']; */ ?>
          </div> -->         

        <!-- only if on collection -->
          <?php foreach($object['stats'] as $cmodel => $value) : ?>
            <div class="islandora-basic-collection-content_stats <?php print $cmodel;?>"><?php print "$cmodel $value"; ?> </div>
          <?php endforeach; ?>

        </div>
      </div>
    <?php $row_field++; ?>
    <?php endforeach; ?>
</div>
