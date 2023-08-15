function initMap(){
  //New options
  var options = {
    zoom: 18,
    center: {lat: -25.961257, lng: 32.572332}
  }
  //New Map
  var map = new
  google.maps.Map(document.getElementById('map'), options);

  addMarker({coords:{lat: -25.961257, lng: 32.572332}}); //maputo
  addMarker({coords:{ lat: -25.958854, lng: 32.459724}}); //matola
  // addMarker({coords:{lat: -25.8616151, lng:  32.8432287}}); //manhica
  addMarker({coords:{ lat: -25.0516743, lng: 33.6413356}}); //xai-xai
  addMarker({coords:{lat: -23.859586, lng: 35.347935}}); //Cidade de Maxixe
  addMarker({coords:{ lat: -22.003057, lng: 35.313930}}); //Vilankulo
  addMarker({coords:{lat: -16.165356, lng:  33.590748}}); //Tete 
  addMarker({coords:{ lat: -19.818358, lng: 34.834322}}); //baira
  addMarker({coords:{lat: -19.112610, lng: 33.476600}}); //Chimoio
  addMarker({coords:{ lat: -17.878333, lng: 36.888485}}); //Quelimane
  addMarker({coords:{lat: -13.303690, lng:  35.237780}}); //Lichinga
  addMarker({coords:{ lat: -14.543710, lng: 40.688500}}); //Nacala
  addMarker({coords:{lat: -15.125429, lng: 39.275866}}); //Nampula
  addMarker({coords:{ lat: -12.968929, lng: 40.517644}}); //Pemba
  //add Marker
  function addMarker(props){
    var marker = new google.maps.Marker({
    position:props.coords,
    map:map
  });
  }
}



