const card = document.querySelector('.card')

card.forEach(() => {
	if ((mouseover = true)) {
		card.classList.add('active-card')
	} else {
		card.classList.remove('active-card')
	}
})

function bigFnc() {
	card.addEventListener('mouseover', () => {
		card.classList.add('active-card')
	})

	card.addEventListener('mouseout', () => {
		card.classList.remove('active-card')
	})
}
setTimeout(bigFnc(), 1000)


function animateValue(num, start, end, duration) {
	let startTimestamp = null
	const step = timestamp => {
		if (!startTimestamp) startTimestamp = timestamp
		const progress = Math.min((timestamp - startTimestamp) / duration, 1)
		num.innerHTML = Math.floor(progress * (start - end) + end)
		if (progress < 1 && window.scrollY >= 3100) {
			window.requestAnimationFrame(step)
		} else {
			num.innerHTML = 0
		}
		window.addEventListener('scroll', step)
	}
	window.requestAnimationFrame(step)
}

const div = document.querySelector('.count-div')
const num = div.querySelector('.count-js')
animateValue(num, 50, 0, 3000)
