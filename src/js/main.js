/* Pop up management */

var inputs = document.querySelectorAll('.input-form');
var buttonProjet = document.getElementById('add-finish-projet');
var buttonDevis = document.getElementById('add-finish-devis')
var checkState = false;

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

/* Change color theme */

var links = document.getElementsByTagName("link");

for (var i = 0; i<links.length ; i++){
    var title = links[i].getAttribute("title");
    if ( title == "color"){
        changeHrefColor(links[i]);

        break;
    }
}

function changeHrefColor(linkColor) {
    linkColor.setAttribute("href", "test");
}

/* Table content */

let mainRows = document.querySelectorAll('.main-row');
let expandButtons = document.querySelectorAll('.expand-row-button');

for (let i = 0; i < expandButtons.length; i++){
    expandButtons[i].addEventListener('click', function(){
        let mainRow = this.parentNode.parentNode;
        let subtableRows = getSubtable(mainRow, 'main-row');
        
        mainRow.classList.toggle('active');
        subtableRows.forEach(function(row){
            row.classList.toggle('opened');
        })
    })
}

function getSubtable(el, selector) {
    var siblings = [];
    el = el.nextElementSibling;

	while (el) {
        if (el.classList.contains(selector)) break;
		siblings.push(el);
		el = el.nextElementSibling;
	}

	return siblings;
};