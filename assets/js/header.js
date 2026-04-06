function initMobileMenu() {

    const mToggle = document.getElementById("mToggle");
    const mMenu = document.getElementById("mMenu");
    const mOverlay = document.getElementById("mOverlay");

    // 🛑 Safety check (important)
    if (!mToggle || !mMenu || !mOverlay) return;

    // ✅ HAMBURGER TOGGLE (WORKING)
    mToggle.addEventListener("click", () => {
        mMenu.classList.toggle("active");
        mOverlay.classList.toggle("active");
        mToggle.classList.toggle("active");
    });

    mOverlay.addEventListener("click", () => {
        mMenu.classList.remove("active");
        mOverlay.classList.remove("active");
        mToggle.classList.remove("active");
    });

    // ✅ DROPDOWN FIXED
    const toggles = document.querySelectorAll(".m-link-toggle");

    toggles.forEach(item => {
        item.addEventListener("click", function (e) {

            e.preventDefault();
            e.stopPropagation(); // 🔥 important

            const currentSub = this.nextElementSibling;
            if (!currentSub) return;

            const parentSub = this.closest(".m-sub");

            // ✅ CLOSE ONLY SAME LEVEL
            let siblings;
            if (parentSub) {
                siblings = parentSub.querySelectorAll(":scope > .m-sub");
            } else {
                siblings = document.querySelectorAll(".m-menu > .m-sub");
            }

            siblings.forEach(sub => {
                if (sub !== currentSub) {
                    sub.style.maxHeight = null;
                }
            });

            // ✅ REMOVE ACTIVE FROM SAME LEVEL
            let siblingToggles;
            if (parentSub) {
                siblingToggles = parentSub.querySelectorAll(":scope > .m-link-toggle");
            } else {
                siblingToggles = document.querySelectorAll(".m-menu > .m-link-toggle");
            }

            siblingToggles.forEach(btn => {
                if (btn !== this) {
                    btn.classList.remove("active");
                }
            });

            // ✅ TOGGLE CURRENT
            this.classList.toggle("active");

            if (currentSub.style.maxHeight) {
                currentSub.style.maxHeight = null;
            } else {
                currentSub.style.maxHeight = currentSub.scrollHeight + "px";
            }

            // 🔥 UPDATE PARENT HEIGHTS (CRITICAL FIX)
            let parent = this.parentElement.closest(".m-sub");
            while (parent) {
                parent.style.maxHeight = parent.scrollHeight + "px";
                parent = parent.parentElement.closest(".m-sub");
            }
        });
    });
}