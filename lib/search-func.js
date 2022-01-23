$(function () {
  $("#s_box").on("keyup", function () {
    var search_term = $("#s_box").val();
    $.ajax({
      url: "./includes/med-search.php",
      type: "POST",
      data: { search: search_term },
      success: function (data) {
        $("#main").html(data);
      },
    });
  });
});
