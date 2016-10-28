  var decimal_places = 0;
  var decimal_factor = decimal_places === 0 ? 1 : decimal_places * 10;

  $('#target').animateNumber(
    {
      number: 506 * decimal_factor,
      numberStep: function(now, tween) {
        var floored_number = Math.floor(now) / decimal_factor,
            target = $(tween.elem);
        if (decimal_places > 0) {
          floored_number = floored_number.toFixed(decimal_places);
        }

        target.text(floored_number);
      }
    },
    9400
  )

   var decimal_places = 0;
  var decimal_factor = decimal_places === 0 ? 1 : decimal_places * 10;

  $('#clients').animateNumber(
    {
      number: 150 * decimal_factor,
      numberStep: function(now, tween) {
        var floored_number = Math.floor(now) / decimal_factor,
            clients = $(tween.elem);
        if (decimal_places > 0) {
          floored_number = floored_number.toFixed(decimal_places);
        }

        clients.text(floored_number);
      }
    },
    19000
  ) 

   var decimal_places = 0;
  var decimal_factor = decimal_places === 0 ? 1 : decimal_places * 10;

  $('#countries').animateNumber(
    {
      number: 56 * decimal_factor,
      numberStep: function(now, tween) {
        var floored_number = Math.floor(now) / decimal_factor,
            countries = $(tween.elem);
        if (decimal_places > 0) {
          floored_number = floored_number.toFixed(decimal_places);
        }

        countries.text(floored_number);
      }
    },
    15000
  ) 

   var decimal_places = 0;
  var decimal_factor = decimal_places === 0 ? 1 : decimal_places * 10;

  $('#coffe').animateNumber(
    {
      number: 1023 * decimal_factor,
      numberStep: function(now, tween) {
        var floored_number = Math.floor(now) / decimal_factor,
            coffe = $(tween.elem);
        if (decimal_places > 0) {
          floored_number = floored_number.toFixed(decimal_places);
        }

        coffe.text(floored_number);
      }
    },
    10000
  ) 
