const themeToggleBtn = document.getElementById("theme-toggle");
const themeToggleDarkIcon = document.getElementById("theme-toggle-dark-icon");
const themeToggleLightIcon = document.getElementById("theme-toggle-light-icon");
const themeStatus = document.getElementById("theme-status");

// Función para actualizar íconos y texto
function updateThemeVisuals() {
	const isDark = document.documentElement.classList.contains("dark");

	if (isDark) {
		themeToggleDarkIcon.classList.remove("hidden");
		themeToggleLightIcon.classList.add("hidden");
		themeStatus.textContent = "Estás utilizando el modo oscuro.";
	} else {
		themeToggleLightIcon.classList.remove("hidden");
		themeToggleDarkIcon.classList.add("hidden");
		themeStatus.textContent = "Estás utilizando el modo claro.";
	}
}

// Estado inicial al cargar
if (localStorage.getItem("color-theme") === "dark" || (!("color-theme" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
	document.documentElement.classList.add("dark");
} else {
	document.documentElement.classList.remove("dark");
}
updateThemeVisuals();

// Evento al hacer clic
themeToggleBtn.addEventListener("click", function () {
	const currentTheme = localStorage.getItem("color-theme");

	if (currentTheme) {
		if (currentTheme === "light") {
			document.documentElement.classList.add("dark");
			localStorage.setItem("color-theme", "dark");
		} else {
			document.documentElement.classList.remove("dark");
			localStorage.setItem("color-theme", "light");
		}
	} else {
		if (document.documentElement.classList.contains("dark")) {
			document.documentElement.classList.remove("dark");
			localStorage.setItem("color-theme", "light");
		} else {
			document.documentElement.classList.add("dark");
			localStorage.setItem("color-theme", "dark");
		}
	}

	updateThemeVisuals(); // sincroniza íconos y texto
});
