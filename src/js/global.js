
// NAVIGATION ON SCROLL
window.addEventListener('scroll', function (ev) {
  ev.preventDefault();
  windowScroll();
});
  
function windowScroll() {
	const navbar = document.getElementById("navbar");
	if (navbar) {
		if (document.body.scrollTop >= 50 || document.documentElement.scrollTop >= 50) {
			navbar.classList.add("is-sticky");
		} else {
			navbar.classList.remove("is-sticky");
		}
	}
}

// NAVBAR MENU TOGGLE
const toggler = document.querySelector(".navbar-toggler");
const navbar = document.getElementById("navbar");

toggler.addEventListener("click", function() {
  navbar.classList.toggle("is-sticky-toggle");
});

// PROJECT FILTER BTN - GRAPHICS SECTION
var filterBtns = document.querySelectorAll(".filter-btns .nav-link");
var graphicsItem = document.querySelectorAll(".graphics-item");

Array.from(filterBtns).forEach(function (button) {
  button.addEventListener("click", function (e) {
	e.preventDefault();

	for (var i = 0; i < filterBtns.length; i++) {
	  filterBtns[i].classList.remove("active");
	}
	this.classList.add("active");

	var filter = e.target.dataset.filter;

	Array.from(graphicsItem).forEach(function (item) {
	  if (filter === "all") {
		if ((item.classList.contains(filter))) {
		  item.style.display = "none";
		} else {
		  item.style.display = "block";
		}
	  } else {
		if (item.classList.contains(filter)) {
		  item.style.display = "block";
		} else {
		  item.style.display = "none";
		}
	  }
	});
  });
});


//About page 
var TxtType = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};
  
TxtType.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
	this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
	this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

  var that = this;
  var delta = 200 - Math.random() * 100;

  if (this.isDeleting) { delta /= 2; }

  if (!this.isDeleting && this.txt === fullTxt) {
  	delta = this.period;
  	this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
  	this.isDeleting = false;
  	this.loopNum++;
  	delta = 500;
  }

  setTimeout(function() {
  that.tick();
  }, delta);
};
  
window.onload = function() {
  var elements = document.getElementsByClassName('typewrite');
  for (var i=0; i<elements.length; i++) {
	  var toRotate = elements[i].getAttribute('data-type');
	  var period = elements[i].getAttribute('data-period');
	  if (toRotate) {
		new TxtType(elements[i], JSON.parse(toRotate), period);
	  }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
  document.body.appendChild(css);
};

//About page END

//Social Links

//Contacts Page
//map function


//Contacts Page END