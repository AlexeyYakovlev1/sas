console.log(1);


const l_characters = document.getElementById('l_characters');
const l_character = l_characters.querySelectorAll('.login__character')

for (var i=0; i<l_character.length; i++){
    l_character[i].addEventListener('click', function(evt){
        evt.preventDefault();
        l_character.forEach(c => {
            c.classList.remove('btn-active');
        })
        $(this).addClass('btn-active');
    })
}

