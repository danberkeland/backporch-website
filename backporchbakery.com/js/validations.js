$(document).ready(function () {
  //form submit start

  $('#OrderSubmit').click(function () {
    let errors = false
    let Location = false
    let DayOption = false
    //let FoodTime = false

    // new foodtime code
    //$.each($("input[name='foodTime']:checked"), function () {
      // favorite.push($(this).val());

    //  FoodTime = $(this).val()
   // })
    // end foodtime new code

    // new DayOption code
    $.each($("input[name='dayOption']:checked"), function () {
      // favorite.push($(this).val());

      DayOption = $(this).val()
    })
    // end DayOption new code

    // new Location code
    $.each($("input[name='location']:checked"), function () {
      // favorite.push($(this).val());

      Location = $(this).val()
    })

    // End Location code

    if (Location === false) {
      errors = true
      console.log('Location Options not selected')
    }

    if (DayOption === false) {
      errors = true
      console.log('DayOption Options not selected')
    }

 //   if (typeof FoodTime === false && DayOption == 'sameday') {
 //     console.log('FoodTime Options not selected')

 //     errors = true
 //   } else if (
 //     (typeof FoodTime === false && DayOption == '2day') ||
 //     (typeof FoodTime === false && DayOption == 'future')
 //   ) {
      FoodTime = 'N/A'
 //   }

    if (errors === true) {
      $('#errors').css('display', 'block')
      $('#errors').html('Errors on Form: Check Inputs')
    } else {
      $('#errors').css('display', 'none')
      // AJAX Code To Submit Form.
      var formData = {
        DayOption,
        Location
      }

      console.log(`${FoodTime} : ${DayOption} : ${Location}`)
      // process the form
      $.ajax({
        type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
        url: 'process.php', // the url where we want to POST
        data: formData, // our data object
        dataType: 'json', // what type of data do we expect back from the server
        encode: true,
        success: function (data) {
          console.log(data.Option)

          if (data.Option) {
            if (data.Option == 'SameDayAtascaderoLunch') {
              top.location.href = 'https://backporchbakery.square.site/cafe'
            }
            if (data.Option == 'SameDayAtascaderoBreakfast') {
              top.location.href = 'https://backporchbakery.square.site/cafe'
            }
            if (data.Option == '2DayAtascadero') {
              top.location.href = 'https://backporchbakery.square.site/atascadero'
            }

            if (data.Option == '2DaySanLuisObispo') {
              top.location.href = 'https://backporchbakery.square.site/prado'
            }
            if (data.Option == 'FutureAtascaderot') {
              top.location.href =
                'https://backporchbakery.square.site/atown-preorders'
            }
            if (data.Option == 'FutureSanLuisObispo') {
              top.location.href =
                'https://backporchbakery.square.site/prado-preorders'
            }
          }
          if (data.Error) {
            $('#errors').html(data.Error)

            $('#errors').css('display', 'block')
          }
        }
      }).done(function (data) {
        // log data to the console so we can see
        // here we will handle errors and validation messages
      })

      return false
    }
  })

  
})
