// JavaScript 

(function () {
  // Create variables
  var optionsList = document.getElementById('productType'),
    allTargets = $('.option-target'),
    fieldTarget = $('.field-target'),
    currentOption,
    currentTarget;
    
  console.log(fieldTarget);
  console.log(allTargets);
  // Create Hide and Show Functionality
  function hideShowTargets() {
    console.log('coalagi');
    allTargets.each(function () {
      $(this).attr('hidden', true);
     
      fieldTarget.each(function (){
        $(this).removeAttr('required');
      }
      )
    });
    currentOption = optionsList.value;
    currentTarget = document.getElementById(currentOption);
    currentField = document.getElementById(currentTarget);
    if (currentTarget) {
      currentTarget.removeAttribute('hidden');
      $(currentTarget).find(fieldTarget).attr('required', true);
    
    }
  }
  // Add event listener
  optionsList.addEventListener('change', hideShowTargets);
})();
