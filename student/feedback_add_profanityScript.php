<script>
  var swear_words_arr = profanity; 

  var swear_alert_arr = new Array;
  var swear_alert_count = 0; 

  function reset_alert_count()
  {
    swear_alert_count = 0; 
  }

  function validate_text() {
    reset_alert_count();

    var compare_text = document.form1.text.value; 
    var regex = new RegExp('\\b(' + swear_words_arr.join('|') + ')\\b', 'i');


    if (regex.test(compare_text)) {
      alert("The message will not be sent, it contains restricted words!!!");
      document.form1.text.select();
    } else {
      document.form1.submit();
    }

  }
</script>

