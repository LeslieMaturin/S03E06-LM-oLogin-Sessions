var app = {
  init: function() {
    // console.log('app.init');

    // On déclare des nouvelles propriétés à l'objet app
    app.fields = document.querySelectorAll('.field-input');
    app.errorArea = document.querySelector('#errors');
    
    for (var fieldIndex = 0;fieldIndex < app.fields.length;fieldIndex += 1) {
      app.fields[fieldIndex].addEventListener('blur', app.isInputValid);
    }

    var form = document.getElementById('login-form');
    form.addEventListener('submit', app.isFormValid);
  },
  isInputValid: function(evt) {
    // console.log(evt);
    var input = evt.target;
    if (input.value.length < 3) {
      input.classList.remove('valid');
      input.classList.add('invalid');
    } else {
      input.classList.remove('invalid');
      input.classList.add('valid');
    }
  },
  isFormValid: function (evt) {
    app.errorArea.innerHTML = "";
    for (var fieldIndex = 0;fieldIndex < app.fields.length;fieldIndex += 1) {
      var input = app.fields[fieldIndex];
      if (input.value.length < 3) {
        evt.preventDefault();
        app.showError(input.placeholder);
      }

    }
  },
  showError: function(inputName) {
    
    var pElement = document.createElement('p');
    pElement.classList.add('error');
    pElement.innerText = inputName +' doit contenir au moins trois caractères';
    app.errorArea.appendChild(pElement);
  }
};

document.addEventListener('DOMContentLoaded', app.init);