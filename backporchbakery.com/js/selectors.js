$(document).ready(function () {
  // new code for Food time
  $('input[name=foodTime]').click(function () {
    // $(this).closest('div').removeClass('orderTypeTabActive-870')
    $.each($("input[name='foodTime']"), function () {
      if ($(this).is(':checked')) {
        $(this)
          .closest('div')
          .addClass('orderTypeTabActive-870')
      } else {
        $(this).prop('checked', false)
        $(this)
          .closest('div')
          .removeClass('orderTypeTabActive-870')
      }
    })
  })

  // end new code
    
    
    
    
    // new code for Location time
  $('input[name=location]').click(function () {
    // $(this).closest('div').removeClass('orderTypeTabActive-870')
    $.each($("input[name='location']"), function () {
      if ($(this).is(':checked')) {
        $(this)
          .closest('div')
              .addClass('orderTypeTabActive-870')
          
          console.log($(this).val());
      } else {
        $(this).prop('checked', false)
        $(this)
          .closest('div')
          .removeClass('orderTypeTabActive-870')
      }
    })
  })

  // end new code

    
    
        // new code for Foodtime 
  $('input[name=dayOption]').change(function () {
    // $(this).closest('div').removeClass('orderTypeTabActive-870')
    $.each($("input[name='dayOption']"), function () {
      if ($(this).is(':checked')) {
        $(this)
          .closest('div')
              .addClass('orderTypeTabActive-870')
          
          console.log($(this).val());
          if ($(this).val() == 'sameday') {
              $('#sanluis').hide()
              $('#foodOptions').show()
          } else {
              $('#sanluis').show();
              $('#foodOptions').hide();
          }
      } else {
        $(this).prop('checked', false)
        $(this)
          .closest('div')
          .removeClass('orderTypeTabActive-870')
      }
    })
  })

  
})
