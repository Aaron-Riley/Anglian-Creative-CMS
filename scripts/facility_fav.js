$(function () {
  $("body").on("click", "#addFav", function (e) {
    var facility_id = $(this).data("facilityid");
    $.ajax({
      method: "POST",
      url: "/Fitness-Finder/ajax/togglefav.php",
      dataType: "json",
      data: { facility_id: facility_id },
    }).done(function (rtnData) {
      console.log(rtnData);
      $('#addFav').text('Remove from favourites').attr('id', 'removeFav');
    });
  });
  $("body").on("click", "#removeFav", function (e) {
    var facility_id = $(this).data("facilityid");
    $.ajax({
      method: "POST",
      url: "/Fitness-Finder/ajax/togglefav.php",
      dataType: "json",
      data: { facility_id: facility_id },
    }).done(function (rtnData) {
      console.log(rtnData);
      $('#removeFav').text('Add to favourites').attr('id', 'addFav');
    });
  });
});
