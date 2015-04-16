(function() {
    $('button#findMyWeather').on('click', function(e) {
        $('div.alert').hide();
        if ($('input#city').val() != '') { // If input field is not blank then run the following:
            $.get('weather_scrapper.php?city=' + $('input#city').val(), function (data) { // Use AJAX $.get to get the weather_scrapper.php file and add in the GET variable
                if (data == '') {
                    $('div#fail').fadeIn(); // Fail status message
                } else {
                    $('div#success').html(data).fadeIn(); // Select alert, takes value from the data and fades it in
                }

            });
        } else { // If it's empty then run an alert
            $('div#noCity').fadeIn();
        }
        e.preventDefault(); // Prevent the default submit click action
    });
})();