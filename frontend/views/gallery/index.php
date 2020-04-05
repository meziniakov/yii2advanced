<?php

use frontend\assets\GalleryAsset;

GalleryAsset::register($this);
$this->registerJsFile('@web/js/init-isotope.js', ['depends' => [
      GalleryAsset::className()
]]);
?>

<h1>jQuery Isotope</h1>
 
 <div class="portfolioFilter">
 
   <a href="#" data-filter="*" class="">All Categories</a>
   <a href="#" data-filter=".people">People</a>
   <a href="#" data-filter=".places" class="">Places</a>
   <a href="#" data-filter=".food" class="current">Food</a>
   <a href="#" data-filter=".objects">Objects</a>
 
 </div>
 
 <div class="portfolioContainer isotope" style="position: relative; overflow: hidden; height: 428px;">
 
   <div class="objects isotope-item isotope-hidden" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(0.001, 0.001, 1); opacity: 0;">
     <img src="uploads/gallery/watch.jpg" alt="image">
   </div>
   
   <div class="people places isotope-item isotope-hidden" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(0.001, 0.001, 1); opacity: 0;">
     <img src="uploads/gallery/surf.jpg" alt="image">
   </div>	
 
   <div class="food isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); opacity: 1;">
     <img src="uploads/gallery/burger.jpg" alt="image">
   </div>
   
   <div class="people places isotope-item isotope-hidden" style="position: absolute; left: 0px; top: 0px; transform: translate3d(470px, 0px, 0px) scale3d(0.001, 0.001, 1); opacity: 0;">
     <img src="uploads/gallery/subway.jpg" alt="image">
   </div>
 
   <div class="places objects isotope-item isotope-hidden" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 214px, 0px) scale3d(0.001, 0.001, 1); opacity: 0;">
     <img src="uploads/gallery/trees.jpg" alt="image">
   </div>
 
   <div class="people food objects isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(470px, 0px, 0px) scale3d(1, 1, 1); opacity: 1;">
     <img src="uploads/gallery/coffee.jpg" alt="image">
   </div>
 
   <div class="food objects isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 214px, 0px) scale3d(1, 1, 1); opacity: 1;">
     <img src="uploads/gallery/wine.jpg" alt="image">
   </div>	
   
   <div class="food isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(470px, 214px, 0px) scale3d(1, 1, 1); opacity: 1;">
     <img src="uploads/gallery/salad.jpg" alt="image">
   </div>	
   
 </div>