// Recherche
document.getElementById("searchInput").addEventListener("keyup", function () {
    let filter = this.value.toLowerCase();
    let sections = document.querySelectorAll(".section_2_info");

    sections.forEach(function (section) {
        // Récupère le nom de l'utilisateur dans chaque section
        let nomUtilisateur = section.querySelector(".nom_utilisateur");

        if (nomUtilisateur) {
            let nomText = nomUtilisateur.textContent.toLowerCase();

            if (nomText.includes(filter)) {
                section.style.display = "";
            } else {
                section.style.display = "none";
            }
        }
    });
});

// Mouse over input file
$(document).ready(function(){
    $("#inputFile").mouseover(function(){
      $("#icone_file").css("color", "#EE2D6A");
    });
    $("#inputFile").mouseout(function(){
      $("#icone_file").css("color", "rgb(170, 166, 166)");
    });
});
$(document).ready(function(){
    $(".photo_pub").mouseover(function(){
      $("#photoPub").css("color", "#EE2D6A");
    });
    $(".photo_pub").mouseout(function(){
      $("#photoPub").css("color", "rgb(170, 166, 166)");
    });
});

// Ouvert séction 2
$(document).ready(function(){
    $("#icone_recherche_responsive").click(function(){
        $(".section_2").fadeIn();
    });
});

// Fermer Séction 2
$(document).ready(function(){
    $(".icon_fermer_section_2").click(function(){
        $(".section_2").fadeOut();
    });
});


// Ouvert séction 4
$(document).ready(function(){
    $("#openSection4").click(function(){
        $(".section_4").fadeIn();
    });
});

// Fermer Séction 4
$(document).ready(function(){
    $("#fermerSection4").click(function(){
        $(".section_4").fadeOut();
    });
});


// Ouvert Séction Tout utilisateurs
$(document).ready(function(){
    $("#toutUsers").click(function(){
        // Actualisation
        function loadMessages() {
            $.ajax({
                url: '/amis', // Une route Laravel qui renvoie le contenu du <div>
                method: 'GET',
                success: function(data) {
                    $("#us").html(data);
                }
            });
        }
        loadMessages();
        $(".grand_parent_tout_tuilisateurs").fadeIn();
    });
});


// Fermer Séction Tout utilisateurs
$(document).ready(function(){
    $(".icon_fermer_utilisateurs").click(function(){
        $(".grand_parent_tout_tuilisateurs").fadeOut();
    });
});

// Fermer supression notification
$(document).ready(function(){
    $("#btnAnnuler").click(function(){
        $(".parent_supression_msg").fadeOut();
    });
});

// Actualisation vers Home
$(document).ready(function(){
    $("#home").click(function(){
        location.reload();
    });
});


// Notification
const notif = document.getElementById("notification");
notif.classList.add("show");

// Cacher après 3 secondes
setTimeout(() => {
    notif.classList.remove("show");
}, 3000);