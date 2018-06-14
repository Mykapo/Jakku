var inputs = document.querySelectorAll('.input-form');
var buttonProjet = document.getElementById('add-finish-projet');
var buttonDevis = document.getElementById('add-finish-devis');
var addIntitule = document.getElementById('add-intitule');
var divIntitule = document.getElementById('add-div-intitule');
var checkState = false;
console.log(inputs);


addIntitule.addEventListener('click', function(){
    divIntitule.insertAdjacentHTML = '<div>' + '<label for="intitulé" class="input-label">Intitulé</label>' + '<input class="input-form" id="intitulé" type="text" name="intitulé" placeholder="Saisir">' + 'div';
});


// for (let i = 0; i < inputs.length ; i++) {
//     inputs[i].addEventListener('change', function() {
//         if (isAllnotempty() ) {
//             buttonDevis.classList.add('complete');
//             buttonDevis.disabled = false;
//         } else {
//             buttonDevis.classList.remove('complete');
//             buttonDevis.disabled = true;
//         }

        
//     })
// }

// function isAllnotempty () {
//     for (var j = 0; inputs.lenght; j++){
//         if (item[i].value == '') {
//             var verification = false
//         }
//         else 
//         return true
// }
// return false
// }

// for (let i = 0; i < inputs.length ; i++) {
//     inputs[i].addEventListener('change', function() {
//         if (inputs[0].value.length > 0 && inputs[1].value.length > 0 && inputs[2].value.length > 0 && inputs[3].value.length > 0 && inputs[4].value.length > 0 && inputs[5].value.length > 0) {
//             buttonProjet.classList.add('complete');
//             buttonDevis.disabled = false;
//         } else {
//             buttonProjet.classList.remove('complete');
//             buttonDevis.disabled = true;
//         }
       
        
//     })
// }
