// perubahan warna navbar
const navbar =document.getElementById("bgnav");
const hero = document.getElementById("hero");

const sectionOneObserver = new IntersectionObserver(
    function(entries){
        entries.forEach(entry =>{
            if(!entry.isIntersecting){
                navbar.classList.add("bghover");
            }else{
                navbar.classList.remove("bghover");
            }
    })
})
// perubahan warna navbar ending

// memunculkan nama 
const nameCard = document.getElementById("namecard");

const showCard = new IntersectionObserver(
    function(entries){
        entries.forEach(entry =>{
            if(entry.isIntersecting){
                nameCard.classList.add("show")
            }else{
                nameCard.classList.remove("show");
            }
        })
    }
)
// memunculkan nama ending

// memunculkan skill bar 
const skillCard = document.getElementById("skills");

const showSkill = new IntersectionObserver(
    function(entries){
        entries.forEach(entry =>{
            if(entry.isIntersecting){
                skillCard.classList.add("showSkill");
            }else{
                skillCard.classList.remove("showSkill");
            }
        })
    }
)
// memunculkan ending 

sectionOneObserver.observe(hero);
showCard.observe(nameCard);
showSkill.observe(skillCard);