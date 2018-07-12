(function($) {
  $("#range_01").ionRangeSlider();
  $("#range_02").ionRangeSlider({
    min: 100,
    max: 1000,
    from: 550
  });
  $("#range_03").ionRangeSlider({
    type: "double",
    grid: true,
    min: 0,
    max: 1000,
    from: 200,
    to: 800,
    prefix: "$"
  });
  $("#range_04").ionRangeSlider({
    type: "double",
    min: 100,
    max: 200,
    from: 145,
    to: 155,
    prefix: "Weight: ",
    postfix: " million pounds",
    decorate_both: true
  });
  $("#range_05").ionRangeSlider({
    type: "double",
    min: 1000,
    max: 2000,
    from: 1200,
    to: 1800,
    hide_min_max: true,
    hide_from_to: true,
    grid: false
  });
  $("#range_06").ionRangeSlider({
    type: "double",
    min: 1000,
    max: 2000,
    from: 1200,
    to: 1800,
    hide_min_max: true,
    hide_from_to: true,
    grid: true
  });
  $("#range_07").ionRangeSlider({
    type: "double",
    grid: true,
    min: 0,
    max: 10000,
    from: 1000,
    step: 9000,
    prefix: "$"
  });
  $("#range_08").ionRangeSlider({
    type: "single",
    grid: true,
    min: -90,
    max: 90,
    from: 0,
    postfix: "°"
  });
  $("#range_09").ionRangeSlider({
    type: "double",
    min: 0,
    max: 10000,
    grid: true
  });
  $("#range_10").ionRangeSlider({
    type: "double",
    min: 0,
    max: 10000,
    grid: true,
    grid_num: 10
  });
  $("#range_11").ionRangeSlider({
    type: "double",
    min: 0,
    max: 10000,
    step: 500,
    grid: true,
    grid_snap: true
  });
  $("#range_12").ionRangeSlider({
    type: "single",
    min: 0,
    max: 10,
    step: 2.34,
    grid: true,
    grid_snap: true
  });
  $("#range_13").ionRangeSlider({
    type: "double",
    min: 0,
    max: 100,
    from: 30,
    to: 70,
    from_fixed: true
  });
  $("#range_14").ionRangeSlider({
    min: 0,
    max: 100,
    from: 30,
    from_min: 10,
    from_max: 50
  });
  $("#range_15").ionRangeSlider({
    min: 0,
    max: 100,
    from: 30,
    from_min: 10,
    from_max: 50,
    from_shadow: true
  });
  $("#range_16").ionRangeSlider({
    type: "double",
    min: 0,
    max: 100,
    from: 20,
    from_min: 10,
    from_max: 30,
    from_shadow: true,
    to: 80,
    to_min: 70,
    to_max: 90,
    to_shadow: true,
    grid: true,
    grid_num: 10
  });
  $("#range_17").ionRangeSlider({
    min: 0,
    max: 100,
    from: 30,
    disable: true
  });
})(jQuery);
