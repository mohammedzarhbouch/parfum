document.addEventListener("DOMContentLoaded", function () {


    window.addEventListener('scroll', function () {
        let scrollPosition = window.scrollY;
        let opacity = scrollPosition / 100; // Adjust the division value for the fade effect

        // Ensure opacity is within the range [0, 1]
        opacity = Math.min(1, Math.max(0, opacity));

        document.querySelector('.header-container').style.backgroundColor = `rgba(212, 175, 55, ${opacity})`;
    });



    var heartIcon = document.getElementById('heartIcon');
    var scrollDown = document.getElementById('scrollTo');

    heartIcon.addEventListener('click', function () {
        scrollDown.scrollIntoView({ behavior: 'smooth' });
    });

});
