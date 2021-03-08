$(" #date ").datepicker({
    dateFormat: "dd-mm-yy"
});

$
$("#slider-1").slider({
    min: 1000,
    max: 3000000,
    value: 500000,
    animate: "slow",
    range: "min",
    
    slide: function (event, ui) { 
        $("#summ-vklad").val(ui.value);
    }
});
$("#slider-2").slider({
    min: 1000,
    max: 3000000,
    value: 500000,
    animate: "slow",
    range: "min",

    slide: function (event, ui) {
        $("#summ-popolnenie-vklad").val(ui.value);
    }
});

// AJAX

$(document).ready(function () { 
    var form = $('#calculator-form');
    form.submit(function (event) { 
        event.preventDefault(); // Добавил, чтобы страница не перезагружалась.
        $.ajax({
            url: 'php/calc.php',
            type: 'POST',
            data: form.serialize(),
            success: function (response) { 
                $("#result").html(response);
            }
        })
    })
})
