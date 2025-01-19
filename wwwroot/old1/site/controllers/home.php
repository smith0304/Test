<?php
 
return function($site, $pages, $page) {
    // fetch the basic set of pages
  
    $tag = param('tag');
    $row = page('library')->children();
    // fetch all tags
    $tags = $row->pluck('tags', ',', true);


    if(param('tag')){
        $row= $row-> filterBy('tags', $tag, ',');
       
    } 
  return compact('row', 'tags', 'tag');


};