
		window.addEventListener('load', function() {
  		var quadrado = document.getElementById('quadrado');
  		quadrado.addEventListener('animationend', function() {
    		quadrado.classList.remove('zoom-in');
  		});
		});

		function alternarTema() {
		  var quadrado = document.getElementById('quadrado');
		  quadrado.classList.toggle('dark-theme');

		  var themeButton = document.querySelector('.theme-button');
			  if (quadrado.classList.contains('dark-theme')) {
			    themeButton.classList.remove('theme-button-light');
			    themeButton.classList.add('theme-button-dark');
			  } else {
			    themeButton.classList.remove('theme-button-dark');
			    themeButton.classList.add('theme-button-light');
			  }

			  function alternarTema() {
 				 var body = document.body;
  				body.classList.toggle('dark-theme');
				}
		}

