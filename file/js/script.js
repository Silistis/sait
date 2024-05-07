let chosen = [];
let count = 0;

$(document).on('click', '.place', function () {
    if ($(this).hasClass('placeOccupied')) {
        console.log('Место занято!');
    } else {
        if ($(this).hasClass('placeClick')) {
            count -= 1;
            chosen = chosen.filter((n) => {return n != $(this).text()});
        } else {
            chosen[count] = $(this).text();
            count += 1;
        }
        $(this).toggleClass('placeClick');
        console.log(chosen, count)
    }
})
$(document).on('click', '.oplata', function () {
    let form = document.getElementById('hiddenForm');
    let hiddenField = document.getElementById('hiddenField');   

    hiddenField.value = chosen;

    form.submit();
})

$(document).on('click', '#regFormSubmit', function () {
    if ($('#regRepassword').val() != $('#regPassword').val()) {
        $('#regFormSubmit').text('Пароли не совпадают!');
    } else if ($('#regRepassword').val() == '' | $('#regPassword').val() == '' | $('#regLogin').val() == '') {
        $('#regFormSubmit').text('Заполните все поля!');
    } else if ($('#regRepassword').val().length < 8 | $('#regPassword').val().length < 8){
        $('#regFormSubmit').text('Длинна минимум 8 символов!');
    } else if ($('.checkbox').is(':checked') == false) {
        $('#regFormSubmit').text('Необхоимо принять Ислам!');
    } else {
        form = document.getElementById('regForm');
        form.submit();
    }
})

$(document).on('click', '.change', function () {
    form = document.getElementById('changeForm');
    form.submit();
})

