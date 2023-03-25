window.addEventListener('load', function() {
  const alert = document.querySelector('#alert');
  const hamburger = document.querySelector('#hamburger');
  
  if (hamburger) {
    hamburger.addEventListener('click', function() {
      hamburger.classList.toggle('selected');
      const mobileNav = document.querySelector('.nav').cloneNode(true);
      const mobileMenu = document.createElement('div');
      mobileMenu.classList.add('hamburgerMenu');
      mobileMenu.appendChild(mobileNav);
      document.body.appendChild(mobileMenu);
  });
}

  // Slider range value
  const humidtyRange = document.querySelector('#humidity-range');
  const humidtyValue = document.querySelector('#humidity');
  const waterRange = document.querySelector('#water-range');
  const waterValue = document.querySelector('#water_level');
  const tempRange = document.querySelector('#temperature-range');
  const tempValue = document.querySelector('#temperature');


  if (humidtyRange) {
    humidtyValue.addEventListener('input', function() {
    humidtyRange.innerHTML = humidtyValue.value;
    });
  }
  if (waterRange) {
    waterValue.addEventListener('input', function() {
    waterRange.innerHTML = waterValue.value;
    });
  }
  if (tempRange) {
    tempValue.addEventListener('input', function() {
    tempRange.innerHTML = tempValue.value;
    });
  }

  if(alert) {
    setTimeout(() => {
      alert.classList.add('fade-out');
    }, 2000);
    alert.addEventListener('transitionend', function() {
      alert.remove();
    });
  }

  //if url params = /add-data, get element with href add-data and add class active
  const urlParams = (window.location.pathname).split('/').pop();
  // console.log(urlParams)
  let navLinkHighlight = document.querySelector(`#${urlParams}`);
  if(navLinkHighlight) {
    navLinkHighlight.classList.add('active');
    // console.log('add-data')
  }
});
