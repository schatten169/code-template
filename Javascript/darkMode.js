let tombolTema = document.getElementById('gantiTema');
let textTema = document.getElementById('textTema');
function darkMode() {
	  document.documentElement.setAttribute('data-bs-theme', 'dark');
	  tombolTema.setAttribute('class', 'btn btn-sm btn-dark');
	  tombolTema.setAttribute('onclick', 'lightMode()');
	  textTema.setAttribute('class', 'bi-moon-fill');
	  localStorage.setItem('tema', 'dark');
}
function lightMode() {
	  document.documentElement.setAttribute('data-bs-theme', 'light');
	  tombolTema.setAttribute('class', 'btn btn-sm btn-light');
	  tombolTema.setAttribute('onclick', 'darkMode()');
	  textTema.setAttribute('class', 'bi-sun-fill');
	  localStorage.setItem('tema', 'light');
}
(
	function () {
		if (!tombolTema && !textTema) {return;}
		function getSystemDefaultTheme() {
		  const isDarkTheme = window.matchMedia('(prefers-color-scheme: dark)');
		  if (isDarkTheme.matches) {return 'dark';}
		  else return 'light';
		}
		function setup() {
		  var settings = localStorage.getItem('tema');
		  if (settings == null) {settings = getSystemDefaultTheme();}
		  if (settings == 'light') {lightMode();}
		  else {darkMode();}
		}
		setup();
	}
)();