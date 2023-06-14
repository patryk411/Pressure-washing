// document.addEventListener('DOMContentLoaded', function () {
// 	const nav = document.querySelector('.navbar')

// 	function addShadow() {
// 		if (window.scrollY >= 300) {
// 			nav.classList.add('shadow-bg')
// 		} else {
// 			nav.classList.remove('shadow-bg')
// 		}
// 	}
// 	window.addEventListener('scroll', addShadow)
// })

// const card = document.querySelector('.card')

// card.forEach(() => {
// 	if ((mouseover = true)) {
// 		card.classList.add('active-card')
// 	} else {
// 		card.classList.remove('active-card')
// 	}
// })

// function bigFnc() {
// 	card.addEventListener('mouseover', () => {
// 		card.classList.add('active-card')
// 	})

// 	card.addEventListener('mouseout', () => {
// 		card.classList.remove('active-card')
// 	})
// }
// setTimeout(bigFnc(), 1000)

// document.addEventListener('DOMContentLoaded', function () {
// 	const num = document.querySelector('.count-js')
// 	const div = document.querySelector('.count-div')

// 	function constNumbs() {
// 		if (window.scrollY >= 3100) {
// 			console.log('start counting')
// 		} else {
// 			console.log('not do anything')
// 		}
// 		console.log(window.scrollY)
// 	}

// 	window.addEventListener('scroll', constNumbs)

// 	function counting() {
// 		for (let i = 0; i < 50; i++) {}
// 	}
// })

function animateValue(num, start, end, duration) {
	let startTimestamp = null
	const step = timestamp => {
		if (!startTimestamp) startTimestamp = timestamp
		const progress = Math.min((timestamp - startTimestamp) / duration, 1)
		num.innerHTML = Math.floor(progress * (start - end) + end)
		if (progress < 1) {
			window.requestAnimationFrame(step)
		}
	}
	window.requestAnimationFrame(step)
}

const div = document.querySelector('.count-div')
const num = div.querySelector('.count-js')
animateValue(num, 50, 0, 3000)
