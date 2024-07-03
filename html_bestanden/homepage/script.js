// Select the element with the overflow
var elements = document.querySelectorAll('.slider-horizontal');



elements.forEach(element => {
    var startX, startScrollLeft;

    element.addEventListener('mousedown', function(e) {
        // Store the initial position
        startX = e.pageX;
        startScrollLeft = this.scrollLeft;
        this.classList.add('active');
        e.preventDefault();
    }, false);

    element.addEventListener('mousemove', function(e) {
        if(!this.classList.contains('active')) return;
        e.preventDefault();
        var x = e.pageX;
        var walk = (x - startX) * 3; //scroll-fast
        this.scrollLeft = startScrollLeft - walk;
    }, false);

    element.addEventListener('mouseup', function() {
        this.classList.remove('active');
    }, false);

    element.addEventListener('mouseleave', function() {
        this.classList.remove('active');
    }, false);
});

// Variables to store the starting positions
