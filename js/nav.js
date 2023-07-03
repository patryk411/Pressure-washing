document.addEventListener('DOMContentLoaded', function () {
	const nav = document.querySelector('.navbar')
	const drpdwn = document.querySelector('.dropdown-menu')

	function addShadow() {
		if (window.scrollY >= 300) {
			nav.classList.add('shadow-bg')
		} else {
			nav.classList.remove('shadow-bg')
		}
	}


	window.addEventListener('scroll', addShadow)
})



const btnBrgr = document.querySelector('.navbar-toggler');
const nav = document.querySelector('.navbar-collapse');
let isOpen = false;

const toggleNavigation = () => {
  if (isOpen) {
    nav.style.display = 'none';
    isOpen = false;
  } else {
    nav.style.display = 'block';
    isOpen = true;
  }
}

btnBrgr.addEventListener('click', toggleNavigation);

	



