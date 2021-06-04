window.addEventListener('load', () => {
    toggleScrollButton();
});

document.addEventListener('mouseup', (e) => {
    const form = document.getElementById('login');
    
    if (!form) { return; }
    
    // Click out side form and does not click the text link "Login"
    if (!form.contains(e.target) && !e.target.innerText.toLowerCase().includes('login')) {
        form.style.display = '';
    }
});


function scrollToTop() {
    window.scrollTo({top: 0, behavior: 'smooth'});
}

// window.addEventListener('scroll', function() {
//     const currentScrollPosition = window.scrollY;
//     // scrollY returns the number of pixels that the document is currently scrolled vertically

//     const scrollBtn = document.getElementById('scroll');
//     // in css, you query the html tag is: #scroll

//     if (currentScrollPosition !== 0) {
//         scrollBtn.setAttribute('style', 'display: block;');
//         // this will add the style attribute
//         // <a style="display: block;">...</a>
//     } else {
//         scrollBtn.setAttribute('style', 'display: none;');
//     }
// });
function toggleScrollButton() {
    const lastPosition = window.scrollY;
    const scrollBtn = document.getElementById('scroll');

    if (lastPosition !== 0) {
        scrollBtn.setAttribute('style', 'display: block;');
    } else {
        scrollBtn.setAttribute('style', 'display: none;');
    }
}

window.addEventListener('scroll', function() {
    toggleScrollButton();
});

function showLoginForm() {
    const form = document.getElementById('login');
    
    if (!form) { return; }
    
    if(form.style.display == ''){
        form.style.display='block';
    }
    // form.style.display = form.style.display ? '' : 'block';
}
