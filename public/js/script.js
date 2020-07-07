$(window).on('load', function() {
    $("body").removeClass("preload");
});

//////////// BURGER
const menuBtn = document.querySelector('.menu-btn');
const innerNav = document.querySelector('.header-inner');
let menuOpen = false;
menuBtn.addEventListener('click', () => {
    if(!menuOpen){
        menuBtn.classList.add('open');
        innerNav.classList.remove('hide');
        menuOpen = true;
    } else {
        menuBtn.classList.remove('open');
        innerNav.classList.add('hide');
        menuOpen = false;
    }
});

/////////// AVATAR

const colours = [
		"#1abc9c", "#2ecc71", "#3498db", "#9b59b6", "#34495e", "#16a085", "#27ae60", "#2980b9", "#8e44ad", "#2c3e50", 
		"#f1c40f", "#e67e22", "#e74c3c", "#ecf0f1", "#95a5a6", "#f39c12", "#d35400", "#c0392b", "#bdc3c7", "#7f8c8d"
	];
let avatars = document.querySelectorAll('.author-avatar');
avatars.forEach(avatar => {
	let authorAvatar = avatar.parentNode;
	let authorName ='';
	if(authorAvatar.querySelector('.comment-author__name')) {
		authorName = authorAvatar.querySelector('.comment-author__name').textContent
	} else {
		authorName = authorAvatar.querySelector('.author__name').textContent;
	}
	let letter = authorName[0].toUpperCase();
	let colorIndex = Math.ceil( (letter.charCodeAt() - 65) / 3);
	avatar.textContent = letter;
	let color = colours[colorIndex];
	avatar.style = `background: ${color};`
})

//////////// HEART
let heartBtn = document.querySelectorAll('.heart');
heartBtn.forEach(heart => {
	heart.addEventListener('click', () => {
		let parentN = heart.parentNode;
		let articleId = parentN.querySelector('.article_id').value;
		let userId = parentN.querySelector('.user_id').value;
		let likesCount = parentN.querySelector('.likes-count-number');
		console.log(likesCount);
	//	console.log(userId);
		if(!heart.classList.contains('like')){
			fetch(`/likes`, {
			method: 'POST',
			headers: {
			  'Accept': 'application/json',
			  'Content-Type': 'application/json',
			  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			body: JSON.stringify({articleId: articleId, userId: userId, action: 'set'})
		  })
		  .then(result => result.json())
		  .then(heart.classList.add('like'))
		  .then(likesCount.textContent = Number(likesCount.textContent) + 1);
		  
		  
		} else {
			fetch(`/likes`, {
			method: 'POST',
			headers: {
			  'Accept': 'application/json',
			  'Content-Type': 'application/json',
			  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			body: JSON.stringify({articleId: articleId, userId: userId, action: 'unset'})
		  })
		  .then(result => result.json())
		  .then(heart.classList.remove('like'))
		  .then(likesCount.textContent = Number(likesCount.textContent) - 1);		  
		}
	});
});
