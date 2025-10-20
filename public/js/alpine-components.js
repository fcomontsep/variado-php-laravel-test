document.addEventListener("alpine:init", () => {
    Alpine.data("darkModeToggle", () => ({
        isDark: false,
        init() {
            this.isDark =
                localStorage.getItem("color-theme") === "dark" ||
                (!("color-theme" in localStorage) &&
                    window.matchMedia("(prefers-color-scheme: dark)").matches);

            document.documentElement.classList.toggle("dark", this.isDark);
        },
        toggleTheme() {
            this.isDark = !this.isDark;
            document.documentElement.classList.toggle("dark", this.isDark);
            localStorage.setItem("color-theme", this.isDark ? "dark" : "light");
        },
    }));
});
