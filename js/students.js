/**
 * AWDORG Foundation - Students Listing JS
 * Handles fetching students.json and implementing client-side pagination.
 */

document.addEventListener("DOMContentLoaded", () => {
    const studentsGrid = document.getElementById("studentsGrid");
    const paginationContainer = document.getElementById("pagination");
    const studentsPerPage = 24;
    let allStudents = [];
    let currentPage = 1;

    // Fetch student data
    fetch("/js/students.json")
        .then(response => {
            if (!response.ok) {
                throw new Error("Network response was not ok");
            }
            return response.json();
        })
        .then(data => {
            allStudents = data;
            renderPage(1);
        })
        .catch(error => {
            console.error("Error fetching students:", error);
            studentsGrid.innerHTML = `<div class="col-12 text-center py-5">
                <p class="text-danger">Failed to load student data. Please try again later.</p>
            </div>`;
        });

    function renderPage(page) {
        currentPage = page;
        studentsGrid.innerHTML = "";
        
        const start = (page - 1) * studentsPerPage;
        const end = start + studentsPerPage;
        const pageItems = allStudents.slice(start, end);

        pageItems.forEach(student => {
            const card = document.createElement("div");
            card.classList.add("student-card");

            // Always use gender-based avatars as per user request
            const studentImg = student.gender === "Female" 
                ? "/assets/img/students/female_default.jpg" 
                : "/assets/img/students/male_default.jpg";

            card.innerHTML = `
                <div class="img-wrapper">
                    <img src="${studentImg}" alt="${student.name}" loading="lazy" onerror="this.src='/assets/img/students/${student.gender === 'Female' ? 'female_default.jpg' : 'male_default.jpg'}'">
                </div>
                <div class="student-info">
                    <h6>${student.name}</h6>
                    <p>${student.location || 'Student'}</p>
                </div>
            `;
            studentsGrid.appendChild(card);
        });

        renderPagination();
        window.scrollTo({ top: 300, behavior: 'smooth' });
    }

    function renderPagination() {
        const totalPages = Math.ceil(allStudents.length / studentsPerPage);
        paginationContainer.innerHTML = "";

        if (totalPages <= 1) return;

        // Previous button
        const prevBtn = document.createElement("button");
        prevBtn.className = "page-btn";
        prevBtn.innerHTML = '<i class="fas fa-chevron-left"></i>';
        prevBtn.disabled = currentPage === 1;
        prevBtn.onclick = () => renderPage(currentPage - 1);
        paginationContainer.appendChild(prevBtn);

        // Page info for mobile or simplified view
        const pageInfo = document.createElement("span");
        pageInfo.className = "page-info";
        pageInfo.textContent = `Page ${currentPage} of ${totalPages}`;
        paginationContainer.appendChild(pageInfo);

        // Next button
        const nextBtn = document.createElement("button");
        nextBtn.className = "page-btn";
        nextBtn.innerHTML = '<i class="fas fa-chevron-right"></i>';
        nextBtn.disabled = currentPage === totalPages;
        nextBtn.onclick = () => renderPage(currentPage + 1);
        paginationContainer.appendChild(nextBtn);
    }
});
