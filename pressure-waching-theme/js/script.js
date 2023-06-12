document.addEventListener('DOMContentLoaded', function () {
	const nav = document.querySelector('.navbar')

	function addShadow() {
		if (window.scrollY >= 300) {
			nav.classList.add('shadow-bg')
		} else {
			nav.classList.remove('shadow-bg')
		}
	}
	window.addEventListener('scroll', addShadow)
})

const card = document.querySelector('.card')

// card.forEach(() => {
// 	if ((mouseover = true)) {
// 		card.classList.add('active-card')
// 	} else {
// 		card.classList.remove('active-card')
// 	}
// })

function bigFnc() {
	card.addEventListener('mouseover', () => {
		card.classList.add('active-card')
	})

	card.addEventListener('mouseout', () => {
		card.classList.remove('active-card')
	})
}
setTimeout(bigFnc(), 1000)
