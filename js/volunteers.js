document.addEventListener("DOMContentLoaded", function () {

    const images = [
        "tamay.webp","ankit_tamta.webp","hritang_sugandh.webp","daksh_chandi.webp","jayant_raghav.webp","Naman_Dhakeria.webp","nikshit_tomar.webp","sanjana_dabas.jpeg","lakshay_kakkar.jpg","rachna_mahajan.jpg","usha_badiyal.png","janvi_patidar.png","shivani_Gautam.jpg","kuideep_singh.jpg","rahul_allala.jpg","Aadya_Agarwal.jpg","Neha_Arora.jpg","Smriti_Maini.jpg","Pari_Jain.jpg","Deepshikha_Chauhan.jpg","Reva_Arora.jpg","Jyotsna-Aul.jpg","Neha_Sharma.jpg","Ruchika_Kadian.jpg","BHUSHAN_BHUJBAL.jpg","Sanchit_Uppal.jpg","Yash_Gautam.jpg","Anjali_Singh.jpg","Vishakha_Gaur.jpg","Aditi_Singhal.jpg","ritul_prajapti.jpg","aru_tyagi.jpg","Shruti_Yadav.jpg","Sheetal_Chaubey.jpg","Shireen_Girotra.jpg","Nikita_Parihar.jpg"
    ];

    const container = document.getElementById("team");

    images.forEach(file => {

        let name = file
            .replace(/\.(webp|jpg|jpeg|png)$/i, "")
            .replace(/_/g, " ")
            .replace(/\b\w/g, l => l.toUpperCase());

        const card = document.createElement("div");
        card.classList.add("member-card"); 

        card.innerHTML = `
            <img src="assets/img/volunteers/${file}" alt="${name}">
            <div class="overlay">
                <h6>${name}</h6>
            </div>
        `;

        container.appendChild(card);
    });

});
