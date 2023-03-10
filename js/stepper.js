$(document).ready(function () {
  let stepsWizard = $("form");
  stepsWizard.steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    autoFocus: true,
    transitionEffectSpeed: 100,
    enableKeyNavigation: true,
    enableFinishButton: false,
    // startIndex: 9,
    labels: {
      next: "<i class='fa fa-angle-right'></i>",
      previous: "<i class='fa fa-angle-left'></i>",
      finish: "",
    },
    onInit: function (event, current) {
      $(".actions ul li:last-child").addClass("finish");
      $(".actions a[href=\\#finish]").attr("id", "FinishButton");
    },
    onStepChanging: function (event, currentIndex, newIndex) {
      if (currentIndex == 0) {
        if (!$(".step_01 input").is(":checked") && !$("#step1_1_text").val()) {
          console.log("Cancel");
          $(".alert").fadeIn();
          return false;
        } else {
          $(".alert").fadeOut();
          return true;
        }
      }
      if (currentIndex == 1) {
        if (!$(".step_02 input").is(":checked")) {
          console.log("Cancel");
          $(".alert").fadeIn();
          return false;
        } else {
          $(".alert").fadeOut();
          return true;
        }
      }
      if (currentIndex == 2) {
        if (!$(".step_03 input").is(":checked")) {
          console.log("Cancel");
          $(".alert").fadeIn();
          return false;
        } else {
          $(".alert").fadeOut();
          return true;
        }
      }
      if (currentIndex == 3) {
        if (!$(".step_04 input").is(":checked")) {
          console.log("Cancel");
          $(".alert").fadeIn();
          return false;
        } else {
          $(".alert").fadeOut();
          return true;
        }
      }
      if (currentIndex == 4) {
        if (!$(".step_05 input").is(":checked") && !$("#step2_3_text").val()) {
          console.log("Cancel");
          $(".alert").fadeIn();
          return false;
        } else {
          $(".alert").fadeOut();
          return true;
        }
      }
      if (currentIndex == 5) {
        if (!$(".step_06 input").is(":checked") && !$("#step3_3_text").val()) {
          console.log("Cancel");
          $(".alert").fadeIn();
          return false;
        } else {
          $(".alert").fadeOut();
          return true;
        }
      }
      if (currentIndex == 6) {
        if (!$(".step_07 input").is(":checked") && !$("#step4_4_text").val()) {
          console.log("Cancel");
          $(".alert").fadeIn();
          return false;
        } else {
          $(".alert").fadeOut();
          return true;
        }
      }
      if (currentIndex == 7) {
        if (!$(".step_08 input").is(":checked")) {
          console.log("Cancel");
          $(".alert").fadeIn();
          return false;
        } else {
          $(".alert").fadeOut();
          return true;
        }
      }
      if (currentIndex == 8) {
        if (!$(".step_09 input").is(":checked")) {
          console.log("Cancel");
          $(".alert").fadeIn();
          return false;
        } else {
          $(".alert").fadeOut();
          return true;
        }
      }
      if (currentIndex == 9) {
        if (!$("#step5_5_text").val()) {
          console.log("Cancel");
          $(".alert").fadeIn();
          return false;
        } else {
          $(".alert").fadeOut();
          return true;
        }
      }
      return true;
    },
    onStepChanged: function (event, currentIndex) {
      if (currentIndex === 10) {
        stepsWizard.find('a[href="#finish"]').remove();
        $("ul[role='menu']").append('<input type="submit">');
        $(".actions input").addClass("finish");
      }
    },
    onFinishing: function (event, currentIndex) {
      console.log("finishing");
      console.log(currentIndex);
    },
    onFinished: function (event, currentIndex) {
      console.log("finish");

      //   $("form").submit();
    },
  });
  function formSend() {
    $("#main_form").submit(function (e) {
      if (window.localStorage) {
        var value = localStorage.getItem("count"),
          newvalue = isFinite(value) ? ++value : 0;
        localStorage.setItem("count", newvalue);
      }
      window.localStorage.clear();

      var d = new Date();
      var month = d.getMonth() + 1;
      var day = d.getDate();
      var random = Math.random() * 100;
      var output =
        d.getFullYear() +
        "/" +
        (month < 10 ? "0" : "") +
        month +
        "/" +
        (day < 10 ? "0" : "") +
        day;

      $(".step_11 h2 span").html(
        "SNP_" + output + "/" + newvalue + random.toFixed()
      );
      $('.promocode').attr("value", "SNP_" + output + "/" + newvalue + random.toFixed())
      $("input.finish").remove();
      e.preventDefault();
      var data = $(this).serialize();
      $.ajax({
        type: "POST",
        url: "send.php",
        dataType: "html",
        data: data,
        success: function (response) {
          console.log(response);
        },
      });
    });
  }
  formSend();
  $("#name").on("change", function () {
    let userName = $("#name").val();
    if (userName.length > 1) {
      console.log(userName);
      $("#start").fadeIn(400);
      $("#start").click(function (e) {
        $("#user_name").attr("value", userName);
        e.preventDefault();
        $(".step_00").hide(400);
      });
    }
  });

  $("#main_form").on("change", function (e) {
    let sm = e.target.value;
    console.log(sm);
  });
  // inputs
  textInInputs();
  // Checkboxes
  checkBoxes();
});

function textInInputs() {
  $('.step_01 input[type="text"]').keypress(function () {
    $(this).addClass("checked");
    $(".step_01 input").not(this).prop("checked", false);
  });
  $('.step_01 input[type="text"]').click(function () {
    $(this).addClass("checked");
    $('.step_01 input[type="checkbox"]').not(this).prop("checked", false);
  });
  $('.step_01 input[type="checkbox"]').click(function () {
    if ($(".step_01 input:checked")) {
      $('.step_01 input[type="text"]').removeClass("checked");
    }
  });
  $('.step_05 input[type="text"]').keypress(function () {
    $(this).addClass("checked");
    $(".step_05 input").not(this).prop("checked", false);
  });
  $('.step_05 input[type="text"]').click(function () {
    $(this).addClass("checked");
    $('.step_05 input[type="checkbox"]').not(this).prop("checked", false);
  });
  $('.step_05 input[type="checkbox"]').click(function () {
    if ($(".step_05 input:checked")) {
      $('.step_05 input[type="text"]').removeClass("checked");
    }
  });
}
function checkBoxes() {
  $(".step_01 input").click(function () {
    $(".step_01 input").not(this).prop("checked", false);
    $(".alert").fadeOut();
  });
  $(".step_02 input").on("change", function () {
    $(".step_02 input").not(this).prop("checked", false);
    $(".alert").fadeOut();
  });
  $(".step_03 input").on("change", function () {
    $(".step_03 input").not(this).prop("checked", false);
    $(".alert").fadeOut();
  });
  $(".step_04 input").on("change", function () {
    $(".step_04 input").not(this).prop("checked", false);
    $(".alert").fadeOut();
  });
  $(".step_05 input").on("change", function () {
    $(".step_05 input").not(this).prop("checked", false);
    $(".alert").fadeOut();
  });
  $(".step_06 input").on("change", function () {
    $(".step_06 input").not(this).prop("checked", false);
    $(".alert").fadeOut();
  });
  $(".step_07 input").on("change", function () {
    $(".step_07 input").not(this).prop("checked", false);
    $(".alert").fadeOut();
  });
  $(".step_08 input").on("change", function () {
    $(".step_08 input").not(this).prop("checked", false);
    $(".alert").fadeOut();
  });
  $(".step_09 input").on("change", function () {
    $(".step_09 input").not(this).prop("checked", false);
    $(".alert").fadeOut();
  });
}
