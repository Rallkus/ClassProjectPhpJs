
  function initMap() {
    var ontinyent = {lat: 38.81667, lng: -0.61667};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 4,
      center: ontinyent
    });

    var contentString = '<div id="content">'+
        '<div id="siteNotice">'+
        '</div>'+
        '<h1 id="firstHeading" class="firstHeading">Ontinyent</h1>'+
        '<div id="bodyContent">'+
        '<p><b>Ontinyent</b>, blablablablabalbalabbalbalbalbala.</p>'+
        '<p>Para más información, <a href="https://es.wikipedia.org/wiki/Onteniente">'+
        'https://en.wikipedia.org/w/index.php?title=Ontinyent</a> '+
        '.</p>'+
        '</div>'+
        '</div>';

    var infowindow = new google.maps.InfoWindow({
      content: contentString
    });

    var marker = new google.maps.Marker({
      position: ontinyent,
      map: map,
      title: 'Uluru (Ayers Rock)'
    });
    marker.addListener('click', function() {
      infowindow.open(map, marker);
    });
  }
