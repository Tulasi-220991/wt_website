document.addEventListener("DOMContentLoaded", function () {

    // Contact form alert
    window.submitForm = function (event) {
        event.preventDefault();
        alert("Thank you! Your message has been sent successfully 😊");
    };

    // Animated statistics counter
    const counters = document.querySelectorAll(".count");

    counters.forEach(counter => {
        let target = +counter.getAttribute("data-target");
        let count = 0;

        let updateCount = () => {
            if (count < target) {
                count++;
                counter.innerText = count;
                setTimeout(updateCount, 10);
            }
        };
        updateCount();
    });

});