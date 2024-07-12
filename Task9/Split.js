document.getElementById('splitForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    let number = parseInt(document.getElementById('number').value);
    let splits = parseInt(document.getElementById('splits').value);
    let container = document.getElementById('container');
    container.innerHTML = '';
    
    if (splits > 0) {
        let splitValue = Math.floor(number / splits);
        let remainder = number % splits;

        for (let i = 0; i < splits; i++) {
            let value = i < remainder ? splitValue + 1 : splitValue;
            let div = document.createElement('div');
            div.className = 'split-div';
            div.style.width = (value * 10) + 'px';
            div.style.backgroundColor = getRandomColor();
            div.innerText = value;
            container.appendChild(div);
        }
    } else {
        alert('Number of splits must be greater than 0');
    }
});

function getRandomColor() {
    let letters = '0123456789ABCDEF';
    let color = '#';
    for (let i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}
