// Inisialisasi variabel map
var map;

// Fungsi yang akan dieksekusi setelah dokumen HTML selesai dimuat
$(document).ready(function () {

  // Membuat peta dengan marker di Lima
  (map = new GMaps({ div: "#gmaps-markers", lat: 3.5475359, lng: 98.6549565 })).addMarker({
    lat: 3.5475359,
    lng: 98.6549565,
    title: "Mbulan",
    click: function (a) {
      console.log && console.log(a), alert("Lokasi Apotik Mbulan");
    },
  }),

  // Menambahkan overlay di lokasi yang sama di peta yang berbeda
  (map = new GMaps({ lat: 3.5475359, lng: 98.6549565 })).drawOverlay({
    lat: map.getCenter().lat(),
    lng: map.getCenter().lng(),
  }),

  // Mengatur jenis peta yang ditampilkan menjadi OpenStreetMap
  map.setMapTypeId("osm");
});
