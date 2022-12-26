$(document).ready(function () {

    let stepsWizard = $("form").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        autoFocus: true,
        transitionEffectSpeed: 100,
        labels: {
            next: "<i class='fa fa-angle-right'></i>",
            previous: "<i class='fa fa-angle-left'></i>",
            finish: "Отправить"

        },
        onStepChange: function (event, currentIndex, newIndex) {
            if (stepsWizard.steps("getCurrentIndex") == 0) {
                $("ul[role='menu']").hide();
            }
        }

    });
    $("#start").click(function () {
        var indx = 0;
        for (i = 0; i <= indx; i++) {
            stepsWizard.steps("next");
        }
        $("ul[role='menu']").show()
    })



    $('form').on('change', function () {
        let sm = $('input:checked').val();
        console.log(sm);
    })

    if (stepsWizard.steps("getCurrentIndex") == 0) {
        $("ul[role='menu']").hide();
    }
    // inputs
    textInInputs();
    // Checkboxes
    checkBoxes();
});


function textInInputs() {
    $('.step_01 input[type="text"]').keypress(function () {
        $(this).addClass('checked');
        $('.step_01 input').not(this).prop('checked', false);
    });
    $('.step_01 input[type="text"]').click(function () {
        $(this).addClass('checked');
        $('.step_01 input[type="checkbox"]').not(this).prop('checked', false);
    })
    $('.step_01 input[type="checkbox"]').click(function () {
        if ($('.step_01 input:checked')) {
            $('.step_01 input[type="text"]').removeClass('checked')
        }
    })
    $('.step_05 input[type="text"]').keypress(function () {
        $(this).addClass('checked');
        $('.step_05 input').not(this).prop('checked', false);
    });
    $('.step_05 input[type="text"]').click(function () {
        $(this).addClass('checked');
        $('.step_05 input[type="checkbox"]').not(this).prop('checked', false);
    })
    $('.step_05 input[type="checkbox"]').click(function () {
        if ($('.step_05 input:checked')) {
            $('.step_05 input[type="text"]').removeClass('checked')
        }
    })
}
function checkBoxes() {
    $('.step_01 input').click(function () {
        $('.step_01 input').not(this).prop('checked', false);
    });
    $('.step_02 input').on('change', function () {
        $('.step_02 input').not(this).prop('checked', false);
    });
    $('.step_03 input').on('change', function () {
        $('.step_03 input').not(this).prop('checked', false);
    });
    $('.step_04 input').on('change', function () {
        $('.step_04 input').not(this).prop('checked', false);
    });
    $('.step_05 input').on('change', function () {
        $('.step_05 input').not(this).prop('checked', false);
    });
    $('.step_06 input').on('change', function () {
        $('.step_06 input').not(this).prop('checked', false);
    });
    $('.step_07 input').on('change', function () {
        $('.step_07 input').not(this).prop('checked', false);
    });
    $('.step_08 input').on('change', function () {
        $('.step_08 input').not(this).prop('checked', false);
    });
    $('.step_09 input').on('change', function () {
        $('.step_09 input').not(this).prop('checked', false);
    });
}