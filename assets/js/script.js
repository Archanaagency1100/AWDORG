document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll('.number');

    const formatNumber = (num) => {
        return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    };

    const runCounter = () => {
        counters.forEach(counter => {
            const target = +counter.getAttribute('data-target');
            let count = 0;
            const increment = target / 50; // Adjust speed here

            const update = () => {
                if (count < target) {
                    count += increment;
                    counter.innerText = formatNumber(Math.ceil(count));
                    setTimeout(update, 30);
                } else {
                    counter.innerText = formatNumber(target);
                }
            };
            update();
        });
    };

    // Scroll trigger
    const observer = new IntersectionObserver(entries => {
        if (entries[0].isIntersecting) {
            runCounter();
            observer.disconnect();
        }
    }, { threshold: 0.6 });

    observer.observe(document.querySelector('.impact-section'));
});




const activityData = {
    28: {
        images: [
            "assets/img/Activity/blanket-distribution-1-.webp",
            "assets/img/Activity/blanket-distribution-2.webp",
        ],
        title: "SUPPORTING LIVES THROUGH WARMTH AND CAREER GUIDANCE.",
        desc: `
            <p>In January, Anything Will Do (AWDORG) Foundation successfully organized a compassionate initiative that combined shawl distribution with an insightful career counselling session in the hospitality sector.

            This dual-purpose program not only extended warmth and comfort to those in need during the chilly winter season but also empowered youth with valuable career guidance and employment opportunities in the growing field of hospitality.

            The career counselling session, conducted in collaboration with Taj, helped participants understand the diverse career paths, skill requirements, and growth prospects within the hospitality industry.

            Through this thoughtful initiative, AWDORG Foundation continues to uphold its mission of supporting lives, spreading warmth, and building brighter futures for underprivileged communities.

            </p>
            <p>This initiative empowered youth with hospitality career guidance.</p>
        `
    },
    26: {
        images: [
            "assets/img/Activity/activity-26-1.webp",
            "assets/img/Activity/activity-26-2.webp"
        ],
        title: "REPUBLIC DAY CELEBRATION",
        desc: `
            <p>Republic Day celebrated with community participation.</p>
        `
    }
};


const dates = document.querySelectorAll(".date-item");
const slider = document.getElementById("slider");
const dotsContainer = document.getElementById("dots");
const title = document.getElementById("activityTitle");
const desc = document.getElementById("activityDesc");

let currentIndex = 0;
let autoSlide;

function loadActivity(key) {
    const data = activityData[key];
    if (!data) return; // safety

    // reset
    slider.innerHTML = "";
    dotsContainer.innerHTML = "";
    currentIndex = 0;
    clearInterval(autoSlide);

    // load images
    data.images.forEach((src, index) => {
        const img = document.createElement("img");
        img.src = src;
        slider.appendChild(img);

        const dot = document.createElement("span");
        if (index === 0) dot.classList.add("active");
        dot.onclick = () => goToSlide(index);
        dotsContainer.appendChild(dot);
    });

    title.innerHTML = data.title;
    desc.innerHTML = data.desc;

    autoSlide = setInterval(nextSlide, 4000);
}

function updateSlider() {
    slider.style.transform = `translateX(-${currentIndex * 100}%)`;
    document.querySelectorAll(".dots span").forEach((d, i) => {
        d.classList.toggle("active", i === currentIndex);
    });
}

function nextSlide() {
    currentIndex = (currentIndex + 1) % slider.children.length;
    updateSlider();
}

function goToSlide(index) {
    currentIndex = index;
    updateSlider();
}

// Date click
dates.forEach(date => {
    date.addEventListener("click", () => {
        dates.forEach(d => d.classList.remove("active"));
        date.classList.add("active");
        loadActivity(date.dataset.date); // 
    });
});

// ✅ DEFAULT LOAD
loadActivity(document.querySelector(".date-item.active")?.dataset.date);

