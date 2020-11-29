$(document).ready(function (e) {
  $('#frmApply').on('submit',(function(e) {
    e.preventDefault();
    let errors = false
    let lastName = false
    let firstName = false
    let email = false
    let availableToWork = false
    let experience = false
    let experienceBread = false
    let seek = false
    let currentOccupation = false
    let customFile = false
    // new foodtime code
    let formData = 'test'
    // end foodtime new code

    console.log('apply form code here')

    firstName = $('#firstName').val()
    lastName = $('#lastName').val()
    email = $('#email').val()

    $.each($("input[name='availableToWork']:checked"), function () {
      availableToWork = $(this).val()
    })

    $.each($("input[name='experience']:checked"), function () {
      experience = $(this).val()
    })

    $.each($("input[name='experienceBread']:checked"), function () {
      experienceBread = $(this).val()
    })

    $.each($("input[name='seek']:checked"), function () {
      seek = $(this).val()
    })

    $.each($("input[name='currentOccupation']:checked"), function () {
      currentOccupation = $(this).val()
    })

    console.log(
      `${availableToWork} : ${currentOccupation} : ${experience} : ${seek}`
    )
    if (
      experienceBread === false ||
      availableToWork === false ||
      experience === false ||
      seek === false ||
      currentOccupation === false
    ) {
      errors = true
      console.log(' Options not selected')
    }

    if (errors === true) {
      $('#errors').css('display', 'block')
      $('#errors').css('color', 'red')
      $('#errors').css('text-align', 'center')
      $('#errors').html('Errors on Form: Make sure All require fields filled')
      $('.mfp-wrap').animate({ scrollTop: 0 }, 'slow')
    } else {
      $('#errors').css('display', 'none')


      var myFile = 'test';
      myFile = $('#customFile').prop('files');

      console.log(myFile);



      var applyFormData = {
        experienceBread,
        availableToWork,
        experience,
        seek,
        currentOccupation,
        firstName,
        lastName,
        email,
        myFile
      }

      $.ajax({
        type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
        url: 'process-applyNow.php', // the url where we want to POST
        data: new FormData(this), // our data object
        contentType: false,
        cache: false,
        processData:false,
        success: function (data) {
          console.log(data)
        }
      }).done(function (data) {
        // log data to the console so we can see
        // here we will handle errors and validation messages
      })
    }
  }))
  //form submit end

  // new code for Foodtime
  $('input[name=experienceBread]').change(function () {
    // $(this).closest('div').removeClass('orderTypeTabActive-870')
    $.each($("input[name='experienceBread']"), function () {
      if ($(this).is(':checked')) {
        $(this)
          .closest('div')
          .addClass('orderTypeTabActive-870')

        console.log($(this).val())
      } else {
        $(this).prop('checked', false)
        $(this)
          .closest('div')
          .removeClass('orderTypeTabActive-870')
      }
    })
  })

  // new code for Foodtime
  $('input[name=experience]').change(function () {
    // $(this).closest('div').removeClass('orderTypeTabActive-870')
    $.each($("input[name='experience']"), function () {
      if ($(this).is(':checked')) {
        $(this)
          .closest('div')
          .addClass('orderTypeTabActive-870')

        console.log($(this).val())
      } else {
        $(this).prop('checked', false)
        $(this)
          .closest('div')
          .removeClass('orderTypeTabActive-870')
      }
    })
  })

  // new code for Foodtime
  $('input[name=availableToWork]').change(function () {
    // $(this).closest('div').removeClass('orderTypeTabActive-870')
    $.each($("input[name='availableToWork']"), function () {
      if ($(this).is(':checked')) {
        $(this)
          .closest('div')
          .addClass('orderTypeTabActive-870')

        console.log($(this).val())
      } else {
        $(this).prop('checked', false)
        $(this)
          .closest('div')
          .removeClass('orderTypeTabActive-870')
      }
    })
  })

  //   seek
  $('input[name=seek]').change(function () {
    // $(this).closest('div').removeClass('orderTypeTabActive-870')
    $.each($("input[name='seek']"), function () {
      if ($(this).is(':checked')) {
        $(this)
          .closest('div')
          .addClass('orderTypeTabActive-870')

        console.log($(this).val())
      } else {
        $(this).prop('checked', false)
        $(this)
          .closest('div')
          .removeClass('orderTypeTabActive-870')
      }
    })
  })

  // Notcurrentlywork
  $('input[name=currentOccupation]').change(function () {
    // $(this).closest('div').removeClass('orderTypeTabActive-870')
    $.each($("input[name='currentOccupation']"), function () {
      if ($(this).is(':checked')) {
        $(this)
          .closest('div')
          .addClass('orderTypeTabActive-870')

        console.log($(this).val())
      } else {
        $(this).prop('checked', false)
        $(this)
          .closest('div')
          .removeClass('orderTypeTabActive-870')
      }
    })
  })
})
