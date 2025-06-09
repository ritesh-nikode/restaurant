
function scrollToMenu() {
    const menuSection = document.getElementById("menu");
    if (menuSection) {
        menuSection.scrollIntoView({ behavior: "smooth" });
    }
}

function scrollToBottom() {
    window.scrollTo({
        top: document.body.scrollHeight,
        behavior: 'smooth'
    });
}
function logout() {
            fetch("logout.php", {
                method: "POST"
            })
            .then(() => {
                window.location.href = "main.html";
            });
        }