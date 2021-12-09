// JavaScript 


// Create variables
var
  // jklmn = document.getElementById('select-all'),
  allTargets = $('.option-target'),
  fieldTarget = $('.field-target'),
  data_id = [],
  currentOption,
  request,
  firstName = 'aSUW',
  currentTarget;

// Create Hide and Show Functionality
$("#productType").change(function () {
  console.log(fieldTarget);
  console.log(allTargets);
  allTargets.each(function () {
    $(this).prop('hidden', true);
    fieldTarget.each(function () {
      $(this).prop('required', false);
    }
    )
  });
  currentOption = $("#productType").val();
  currentTarget = document.getElementById(currentOption);
  currentField = document.getElementById(currentTarget);
  if (currentTarget) {
    currentTarget.removeAttribute('hidden');
    $(currentTarget).find(fieldTarget).attr('required', true);

  }
});

$("#select-all").change(function () {
  $('input:checkbox').not(this).prop('checked', this.checked);
});

$(document).ready(function() {
$("#delete_button").click(function () {
  $('#displayboxcheck:checked').each(function () {
    data_id.push($(this).val());
  })
  request = $.ajax({
    url: "./product_delete.php",
    type: "POST",
    data: data_id,
      
    success: function (data) {
      alert(data);
      window.location.reload();
      
      // You will get response from your PHP page (what you echo or print)
   },
   error: function(jqXHR, textStatus, errorThrown) {
    console.log(textStatus, errorThrown);
 }
});
request.done(function (response, textStatus, jqXHR){
  // Log a message to the console
  console.log("Hoorsay, it worked!");
});
  console.log(data_id);
  data_id = [];

});
});


