document.addEventListener('DOMContentLoaded', function() {
    fetch('http://localhost:3008/players')
        .then(response => response.json())
        .then(data => {
            const playersDiv = document.getElementById('players');
            data.forEach(player => {
                const playerCard = document.createElement('div');
                playerCard.className = 'player-card';
                playerCard.innerHTML = `
                    <h3>${player.name}</h3>
                    <p>Team: ${player.team}</p>
                    <p>Role: ${player.role}</p>
                    <p>Rating: ${player.rating}</p>
                `;
                playersDiv.appendChild(playerCard);
            });
        })
        .catch(error => {
            console.error('Error fetching players:', error);
        });
});
