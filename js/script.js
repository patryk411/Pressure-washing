// function animateValue(num, start, end, duration) {
// 	let startTimestamp = null
// 	const step = timestamp => {
// 		if (!startTimestamp) startTimestamp = timestamp
// 		const progress = Math.min((timestamp - startTimestamp) / duration, 1)
// 		num.innerHTML = Math.floor(progress * (start - end) + end)
// 		if (progress < 1 && window.scrollY >= 3100) {
// 			window.requestAnimationFrame(step)
// 		} else {
// 			num.innerHTML = 0
// 		}
// 		window.addEventListener('scroll', step)
// 	}
// 	window.requestAnimationFrame(step)
// }

// const div = document.querySelector('.count-div')
// const num = div.querySelector('.count-js')
// animateValue(num, 50, 0, 3000)


function countTo50() {
	const numElement = document.querySelector('.count-js');
	let count = 0;
  
	const countInterval = setInterval(() => {
	  if (count >= 50) {
		clearInterval(countInterval);
	  } else {
		count++;
		numElement.textContent = count;
	  }
	}, 200);
  }
  
  window.addEventListener('scroll', () => {
	if (window.innerHeight + window.scrollY >= 3100) {
	  countTo50();
	}
  });
  


const section = document.querySelector('#service');
const box = section.querySelectorAll('.card');
const cardBody = section.querySelectorAll('.card-body');

const checkColors = (event) => {
  event.target.querySelector('.card-body').classList.add('active-card');
};

const removeColors = (event) => {
  event.target.querySelector('.card-body').classList.remove('active-card');
};

box.forEach((element) => {
  element.addEventListener('mouseenter', checkColors);
  element.addEventListener('mouseleave', removeColors);
});





// const Off = () => {
// 	cardBody.classList.remove('active-card')	
// }

// box.addEventListener('mouseleave', Off)


//   function animateValue(num, start, end, duration) {
//     let startTimestamp = null;
//     const step = timestamp => {
//       if (!startTimestamp) startTimestamp = timestamp;
//       const progress = Math.min((timestamp - startTimestamp) / duration, 1);
//       num.innerHTML = Math.floor(progress * (start - end) + end);
//       if (progress < 1 && window.scrollY >= 3100) {
//         window.requestAnimationFrame(step);
//       } else {
//         num.innerHTML = 0;
//       }
//     };
//     window.requestAnimationFrame(step);
//   }

//   const div = document.querySelector('.count-div');
//   const num = div.querySelector('.count-js');
//   animateValue(num, 50, 0, 3000);
