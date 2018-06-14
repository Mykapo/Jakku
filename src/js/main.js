var inputs = document.querySelectorAll('.input-form');
var buttonProjet = document.getElementById('add-finish-projet');
var buttonDevis = document.getElementById('add-finish-devis')
var checkState = false;
console.log(inputs);

for (let i = 0; i < inputs.length ; i++) {
    inputs[i].addEventListener('change', function() {
        if (inputs[0].value.length > 0 && inputs[1].value.length > 0 && inputs[2].value.length > 0 && inputs[3].value.length > 0 && inputs[4].value.length > 0 && inputs[5].value.length > 0 && inputs[6].value.length > 0 ) {
            buttonDevis.classList.add('complete');
            buttonDevis.disabled = false;
        } else {
            buttonDevis.classList.remove('complete');
            buttonDevis.disabled = true;
        }
       
        
    })
}

for (let i = 0; i < inputs.length ; i++) {
    inputs[i].addEventListener('change', function() {
        if (inputs[0].value.length > 0 && inputs[1].value.length > 0 && inputs[2].value.length > 0 && inputs[3].value.length > 0 && inputs[4].value.length > 0 && inputs[5].value.length > 0) {
            buttonProjet.classList.add('complete');
            buttonDevis.disabled = false;
        } else {
            buttonProjet.classList.remove('complete');
            buttonDevis.disabled = true;
        }
       
        
    })
}
