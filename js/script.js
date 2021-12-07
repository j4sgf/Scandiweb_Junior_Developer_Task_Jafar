// JavaScript 

(function () {
  // Create variables
  var optionsList = document.getElementById('productType'),
    allTargets = $('.option-target'),
    currentOption,
    currentTarget;
  console.log(allTargets);
  // Create Hide and Show Functionality
  function hideShowTargets() {
    console.log('coalagi');
    allTargets.each(function () {
      $(this).attr('hidden', true);
      console.log(this + `gw`);
    });
    currentOption = optionsList.value;
    currentTarget = document.getElementById(currentOption);
    if (currentTarget) {
      currentTarget.removeAttribute('hidden');
    }
  }
  // Add event listener
  optionsList.addEventListener('change', hideShowTargets);
})();