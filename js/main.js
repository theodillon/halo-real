$(function() {
  var header = $(".unsticky");
  var body = $(".unsticky-body");
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();
    
    if (scroll >= 40) {
      header.removeClass('unsticky').addClass("sticky");
      body.removeClass('unsticky-body').addClass("sticky-body");
    } else {
      header.removeClass("sticky").addClass('unsticky');
      body.removeClass("sticky-body").addClass('unsticky-body');
    }
  });
});

$(function() {
  $('#map-container').storeLocator({

    mapSettings : {
      zoom                   : 13,
      mapTypeId              : google.maps.MapTypeId.ROADMAP,
      disableDoubleClickZoom : true,
      scrollwheel            : false,
      navigationControl      : false
    },

    dataLocation             : 'assets/halocations.xml',
    infowindowTemplatePath   : 'templates/infowindow-description.html',
    listTemplatePath         : 'templates/location-list-description.html',
    KMLinfowindowTemplatePath: 'templates/kml-infowindow-description.html',
    KMLlistTemplatePath      : 'templates/kml-location-list-description.html',
    markerImg                : 'img/mapMarker.png', 
    distanceAlert            : 50
  });
});