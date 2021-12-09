// JavaScript 


  // Create variables
  var 
    // jklmn = document.getElementById('select-all'),
    allTargets = $('.option-target'),
    fieldTarget = $('.field-target'),
    currentOption,
    currentTarget;
  
  // Create Hide and Show Functionality
  $("#productType").change(function() {
    console.log(fieldTarget);
    console.log(allTargets);
    allTargets.each(function () {
      $(this).prop('hidden',true);
      fieldTarget.each(function (){
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

$("#select-all").change(function(){
  $('input:checkbox').not(this).prop('checked', this.checked);
});


