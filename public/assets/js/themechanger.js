const theme = localStorage.getItem("mode") || "dark";
document.documentElement.dataset.theme = theme;
document.documentElement.classList = "";
document.documentElement.classList.add(theme);
