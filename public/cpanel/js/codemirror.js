(function($) {
    if($('textarea[name=code-editable]').length) {
      var editableCodeMirror = CodeMirror.fromTextArea(document.getElementById('code-editable'), {
          mode: "javascript",
          theme: "ambiance",
          lineNumbers: true
      });
    }
    if($('#code-readonly').length) {
      var readOnlyCodeMirror = CodeMirror.fromTextArea(document.getElementById('code-readonly'), {
          mode: "javascript",
          theme: "ambiance",
          lineNumbers: true,
          readOnly: "nocursor"
      });
    }

    //Use this method of there are multiple codes with same properties
    if($('.multiple-codes').length) {
      var code_type = '';
      $('.multiple-codes').each(function(index) {
          $(this).attr('id', 'code-' + index);
          CodeMirror.fromTextArea(document.getElementById('code-' + index), {
                mode: "javascript",
                theme: "ambiance",
                lineNumbers: true,
                readOnly: "nocursor"
              }
          );

      });
    }

    //Use this method of there are multiple codes with same properties in shell mode
    if($('.shell-mode').length) {
      var code_type = '';
      $('.shell-mode').each(function(index) {
          $(this).attr('id', 'code-' + index);
          CodeMirror.fromTextArea(document.getElementById('code-' + index), {
                mode: "shell",
                theme: "ambiance",
                readOnly: "nocursor"
              }
          );

      });
    }
})(jQuery);
