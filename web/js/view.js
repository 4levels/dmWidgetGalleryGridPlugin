(function($) {
  
  $('#dm_page div.dm_widget.content_gallery_grid').live('dmWidgetLaunch', function()
  {
    var $galleryGrid = $(this).find('ol.dm_widget_content_gallery_grid');

    // only if elements in gallery
    if(!$galleryGrid.find('>li a.gallery_grid_link').length)
    {
      return;
    }

    // get options from gallery metadata
    var options = $galleryGrid.metadata();

    // attach colorbox
    $galleryGrid.find('>li a.gallery_grid_link').colorbox();

  });

})(jQuery);