// let isCounting = false;

// function countTo50() {
//   const countElements = document.querySelectorAll('.count-js');


//   countElements.forEach((element) => {
//     let count = 0;

//     const countInterval = setInterval(() => {
//       if (count >= 50) {
//         clearInterval(countInterval);
//       } else {
//         count++;
//         element.textContent = count;
//       }
//     }, 50);
//   });

//   isCounting = true;
// }

// function handleScroll() {
//   const scrollPosition = window.innerHeight + window.scrollY;

//   if (!isCounting && scrollPosition >= 3400) {
//     countTo50();
// }
// }

// window.addEventListener('scroll', handleScroll,{ once: true });



let isCounting = false;

function countTo50() {
  const countElements = document.querySelectorAll('.count-js');

  countElements.forEach((element) => {
    let count = 0;

    const countInterval = setInterval(() => {
      if (count >= 50) {
        clearInterval(countInterval);
      } else {
        count++;
        element.textContent = count;
      }
    }, 50);
  });

  isCounting = true;
}

function handleScroll() {
  const scrollPosition = window.scrollY;

  if (!isCounting && scrollPosition >= 3400 && scrollPosition <= 4800) {
    countTo50();
    window.removeEventListener('scroll', handleScroll);
  }
  console.log(window.scrollY);
}

window.addEventListener('scroll', handleScroll);

  










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





