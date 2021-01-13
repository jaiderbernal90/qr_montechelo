const dropdownBtn = document.querySelectorAll(".dropdown-menu-button");
// const divDropdown = document.querySelector();

// Menus despelegables
dropdownBtn.forEach( btn => {
	btn.addEventListener('click', ()=>{
		console.log(btn.parentNode.childNodes[3]);
		if(btn.children[1].innerHTML.includes('Administración')){
			if(btn.parentNode.childNodes[5].className.includes('showDropdown')){
				btn.parentNode.childNodes[5].classList.remove('showDropdown');
				btn.parentNode.classList.remove('dropdownHeigth');
				btn.childNodes[5].classList.remove('rotate');
			}else{
				btn.parentNode.childNodes[5].classList.add('showDropdown');
				btn.parentNode.classList.add('dropdownHeigth');
				btn.childNodes[5].classList.add('rotate');
			};
		}else{
			if(btn.parentNode.childNodes[5].className.includes('showDropdownUser')){
				btn.parentNode.childNodes[5].classList.remove('showDropdownUser');
				btn.parentNode.classList.remove('dropdownHeigthUser');
				btn.childNodes[5].classList.remove('rotate');
				
			}else{
				btn.parentNode.childNodes[5].classList.add('showDropdownUser');
				btn.parentNode.classList.add('dropdownHeigthUser');
				btn.childNodes[5].classList.add('rotate');
			};
		}
	})
});

// Menú 
const hamburguer = document.querySelector('.top-header');
const header = document.querySelector('#mainHeader');
const spanHamburguer = document.querySelector('.burger');
const li = document.querySelectorAll('#mainHeader nav div ul li');
const avatar = document.querySelector('.box__avatar');


console.log(header.childNodes[3].childNodes[9].childNodes[3]);

hamburguer.addEventListener('click', () => {
	if(header.childNodes[3].childNodes[9].className.includes('menuComplete')){
		spanHamburguer.classList.remove('burger-equis');
		header.childNodes[3].childNodes[9].classList.remove('menuComplete');
		header.childNodes[3].childNodes[9].classList.add('menuNormal');
		header.childNodes[3].childNodes[9].childNodes[3].classList.remove('ulHeight');
		avatar.classList.remove('opacity-1');
	}else{
		spanHamburguer.classList.add('burger-equis');
		header.childNodes[3].childNodes[9].classList.add('menuComplete');
		header.childNodes[3].childNodes[9].classList.remove('menuNormal');
		header.childNodes[3].childNodes[9].childNodes[3].classList.add('ulHeight');
		avatar.classList.add('opacity-1');
		li.forEach(lis => {
			lis.classList.add('liHeight');
		})
	}
})
