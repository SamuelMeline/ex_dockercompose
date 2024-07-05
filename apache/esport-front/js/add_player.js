document.getElementById('addPlayerForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const formData = new FormData(this);
    const playerData = {
        name: formData.get('name'),
        team: formData.get('team'),
        role: formData.get('role'),
        rating: formData.get('rating')
    };

    fetch('http://localhost:3000/players', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(playerData)
    })
    .then(response => response.json())
    .then(data => {
        alert('Player added successfully!');
        this.reset();
    })
    .catch(error => {
        console.error('Error adding player:', error);
    });
});
