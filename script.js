$(document).ready(function () {
  $("#registrationForm").on("submit", function (e) {
    let valid = true;

    $(this)
      .find("input, select, textarea")
      .each(function () {
        if ($(this).val().trim() === "") {
          $(this).css("border", "2px solid red");
          valid = false;
        } else {
          $(this).css("border", "none");
        }
      });

    if (!valid) {
      e.preventDefault();
      alert("⚠️ Please fill in all required fields.");
    }
  });
});
