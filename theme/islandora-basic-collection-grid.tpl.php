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
    <div class='collectionHeader masonryItem image_header'>
        <div class="itemTitle" id="page-title">[Page Title]</div>   
        <div class="headerBreadcrumb">[breadcrumb]</div>        
        <div class="userMenu">
            <div class="infoToggle userSelect"><div class="iconSelect"></div><div class="textSelect">details</div></div>
            <div id="shareToggle" class="userSelect"><div class="iconSelect"></div><div class="textSelect">share</div></div>            
        </div>        
    </div>
    <?php foreach ($variables['associated_objects_array'] as $object) : ?>
      <div class='islandora-basic-collection-object masonryItem <?php print $object['class']; ?>'>
        <div class='islandora-basic-collection-caption'> <?php print filter_xss($object['title_link']); ?> </div>      
        <div class='islandora-basic-collection-thumb'><?php print $object['thumb_link']; ?> </div>
      </div>
    <?php endforeach; ?>
</div>
</div>
