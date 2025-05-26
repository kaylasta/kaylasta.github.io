window.onload = function() {
    // num stars and array to hold
    const numStars = 150;

    for (let i = 0; i < numStars; i++) {
        // create star div and assign css class
        const star = document.createElement('div');
        star.className = 'star';

        // get random width and height(whole page) position 
        star.style.left = `${Math.random() * 99}vw`;
        star.style.top = `${Math.random() * document.documentElement.scrollHeight}px`;

        // assign random animation delay in seconds
        star.style.animationDelay = `${Math.random() * 5}s`;
        document.body.appendChild(star);
    }
};