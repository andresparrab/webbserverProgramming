console.log("Tghe mega scripts: ");

$(document).ready(function () {
  console.log("Tghe mega script2s: ");
  // Send Search Text to the server
  $("#search").keyup(function () {
    let searchText = $(this).val();
    console.log(searchText);
    if (searchText != "") {
      console.log("text2: " + searchText);
      $.ajax({
        url: "action.php",
        method: "POST",
        data: {
          query: searchText,
        },
        success: function (response) {
          $("#show-list").html(response);
        },
      });
      // if the search is empty
    } else {
      $("#show-list").html("nothing here");
    }
  });
  // Set searched text in input field on click of search button
  $(document).on("click", "a", function () {
    $("#search").val($(this).text());
    $("#show-list").html("");
  });
});
