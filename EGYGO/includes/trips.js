// Function to calculate and display the countdown timer
function updateCountdown() {
    const tripStartDate = new Date('2024-5-31'); // Replace '2024-12-31' with your trip's start date in 'YYYY-MM-DD' format

    const currentTime = new Date();
    const timeDifference = tripStartDate - currentTime;

    if (timeDifference > 0) {
        const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
        const hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

        const countdownElement = document.getElementById('countdown');
        countdownElement.innerHTML = `
            <p>Time left: ${days} days : ${hours} hours : ${minutes} min : ${seconds} sec</p>
        `;

        setTimeout(updateCountdown, 1000); // Update the countdown every second
    } else {
        const countdownElement = document.getElementById('countdown');
        countdownElement.textContent = 'Trip has started!';
    }
}

// Call the updateCountdown function when the page loads
updateCountdown();
