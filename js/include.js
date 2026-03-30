document.addEventListener("DOMContentLoaded", () => {

    // HEADER
    fetch("/partials/header.html")
        .then(res => res.text())
        .then(data => {
            document.getElementById("header").innerHTML = data;
            setActiveMenu();
        });

    // FOOTER
    fetch("/partials/footer.html")
        .then(res => res.text())
        .then(data => {
            document.getElementById("footer").innerHTML = data;
            document.getElementById("year").textContent = new Date().getFullYear();
        });

    // Active menu function
    function setActiveMenu() {
        const currentPage = location.pathname.split("/").pop() || "index.html";
        document.querySelectorAll(".nav-link").forEach(link => {
            if (link.getAttribute("href") === currentPage) {
                link.classList.add("active");
            }
        });
    }
});



var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  return new bootstrap.Popover(popoverTriggerEl)
})