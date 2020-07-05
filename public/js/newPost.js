//////////// UPLOAD IMG


let loadBtn = document.querySelector( '.loadBtn' );
let label = loadBtn.nextElementSibling;

let labelVal = label.innerHTML;
loadBtn.addEventListener( 'change', function( e ) {
	let fileName = '';
	if( this.files ) {
		let	fileName = e.target.value.split( "\\" ).pop();
		label.innerHTML = `<p>${fileName}</p>`;
	}

});