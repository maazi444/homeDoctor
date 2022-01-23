$(function () {
  $(document).on("click", ".med-card", function () {
    var medcard_id = $(this).data("id");
    $.ajax({
      url: "./includes/meddesc-output.php",
      type: "POST",
      data: { search: medcard_id },
      success: function (data) {
        $(".desc-section").html(data);
      },
    });
  });
});
