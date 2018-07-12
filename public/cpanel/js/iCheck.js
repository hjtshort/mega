(function($) {
  $(function() {
    $('.icheck input').iCheck({
        checkboxClass: 'icheckbox_minimal-purple',
        radioClass: 'iradio_minimal',
        increaseArea: '20%'
    });
    $('.icheck-square input').iCheck({
        checkboxClass: 'icheckbox_flat',
        radioClass: 'iradio_square',
        increaseArea: '20%'
    });
    $('.icheck-flat input').iCheck({
        checkboxClass: 'icheckbox_flat-red',
        radioClass: 'iradio_flat',
        increaseArea: '20%'
    });
    $('.icheck-line input').each(function() {
        var self = $(this),
            label = self.next(),
            label_text = label.text();

        label.remove();
        self.iCheck({
            checkboxClass: 'icheckbox_line-green',
            radioClass: 'iradio_line',
            insert: '<div class="icheck_line-icon"></div>' + label_text
        });
    });
    $('.icheck-polaris input').iCheck({
        checkboxClass: 'icheckbox_polaris',
        radioClass: 'iradio_polaris',
        increaseArea: '20%'
    });
    $('.icheck-futurico input').iCheck({
        checkboxClass: 'icheckbox_futurico',
        radioClass: 'iradio_futurico',
        increaseArea: '20%'
    });
  });
})(jQuery);
